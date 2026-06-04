<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_folder' => 'required|string|max:255'
        ]);

        Folder::create([
            'user_id' => Auth::id(),
            'nama_folder' => $request->nama_folder
        ]);

        return back()->with('success', 'Folder berhasil dibuat');
    }
}