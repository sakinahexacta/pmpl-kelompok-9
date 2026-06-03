<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\History;
use App\Models\KategoriIstilah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalTerms' => Term::count(),
            'totalCategories' => KategoriIstilah::count(),
            'totalHistory' => History::count(),
            'histories' => History::with('term')->latest()->take(5)->get(),
        ]);
    }

    public function glosarium()
    {
        return view('admin.glosarium', [
            'categories' => KategoriIstilah::all()
        ]);
    }

    public function publish()
    {
        $terms = Term::orderBy('created_at', 'desc')->get();

        return view('admin.publish', [
            'terms' => $terms
        ]);
    }

    public function pending()
    {
        return view('admin.pending');
    }
}