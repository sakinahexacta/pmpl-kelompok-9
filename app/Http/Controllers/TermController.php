<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\KategoriIstilah;

class TermController extends Controller
{

    public function show($id)
    {
        $term = Term::with('kategori')->findOrFail($id);

        return view('detailistilah', compact('term'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $terms = Term::where('nama_istilah', 'LIKE', "%$keyword%")->get();

        return response()->json($terms);
    }

    public function index(Request $request)
    {
 
        $categories = KategoriIstilah::all();

        $id_kategori = $request->query('category');
        $keyword = $request->query('keyword');

        $terms = Term::with('kategori')
            ->when($id_kategori, function ($query) use ($id_kategori) {
                $query->where('id_kategori', $id_kategori);
            })
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('nama_istilah', 'LIKE', '%' . $keyword . '%');
            })
            ->orderByRaw('TRIM(LOWER(nama_istilah)) ASC')
            ->get();

        $message = null;

        if ($keyword && $terms->isEmpty()) {
            $message = "Istilah '$keyword' tidak ditemukan.";
        }

        return view('halamankamus', compact('categories', 'terms', 'message'));
    }
}

