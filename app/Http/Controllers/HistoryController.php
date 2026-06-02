<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\KategoriIstilah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->check()) {
            return view('history', [
                'histories' => collect(),
                'categories' => KategoriIstilah::all(),
                'activeCategory' => null,
                'needLogin' => true
            ]);
        }

        $categories = KategoriIstilah::all();

        $activeCategory = $request->category; // ini dari URL ?category=1
        $sort = $request->sort?? 'desc'; // ini dari URL ?sort=asc atau ?sort=desc

        $histories = History::with(['term.kategori'])
            ->when($activeCategory, function ($query) use ($activeCategory) {
                $query->whereHas('term', function ($q) use ($activeCategory) {
                    $q->where('id_kategori', $activeCategory);
                });
            })
            ->orderBy('created_at', $sort)
            ->get()
            ->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('d M Y');
            });

        return view('history', [
            'histories' => $histories,
            'categories' => $categories,
            'activeCategory' => $activeCategory,
            'needLogin' => false
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_istilah' => 'required|integer'
        ]);

        $history = History::create([
            'id_user' => auth()->id(),
            'id_istilah' => $request->id_istilah
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'History berhasil disimpan',
            'data' => $history
        ]);
    }
}