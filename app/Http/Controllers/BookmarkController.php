<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return view('bookmark', [
                'bookmarks' => collect(), // kosongkan data
                'needLogin' => false
            ]);
        }

        $bookmarks = auth()->user()
            ->bookmarks()
            ->with('term.kategori')
            ->get();

        return view('bookmark', compact('bookmarks'));
    }

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        Bookmark::firstOrCreate([
            'id_user' => auth()->id(),
            'id_istilah' => $request->term_id
        ]);

        return back()->with('success', 'Istilah berhasil disimpan');
    }
}