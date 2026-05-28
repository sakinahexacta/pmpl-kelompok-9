<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\KategoriIstilah;
use Illuminate\Http\Request;


class HistoryController extends Controller
{
    public function index()
    {
        $histories = session('search_history', []);
            $categories = KategoriIstilah::all();
            $activeCategory = null;

            return view('history', compact(
                'histories',
                'categories',
                'activeCategory'
            ));
    }

    public function category($id)
    {
        $histories = session('search_history', []);
        $categories = KategoriIstilah::all();
        $activeCategory = null;

        return view('history', compact('histories', 'categories', 'activeCategory'));
    }
    
}