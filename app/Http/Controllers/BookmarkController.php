<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{

    public function index()
    {
        $bookmarks = Bookmark::all();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Daftar data bookmark berhasil diambil',
            'data'    => $bookmarks
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_istilah' => 'required|integer',
            'id_folder' => 'nullable|integer',
        ]);

        // $bookmark = Bookmark::create([
        //     'id_user' => Auth::id(),
        //     'id_istilah' => $request->id_istilah,
        //     'id_folder' => $request->id_folder,
        // ]);

        $bookmark = Bookmark::create([
            'id_user' => 1,
            'id_istilah' => $request->id_istilah,
            'id_folder' => $request->id_folder,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Bookmark berhasil disimpan',
            'data' => $bookmark
        ], 201);
    }
}