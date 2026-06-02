<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Daftar history berhasil diambil',
            'data' => $histories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_istilah' => 'required|integer'
        ]);

        $history = History::create([
            'id_user' => 1, // sementara untuk testing
            'id_istilah' => $request->id_istilah
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'History berhasil disimpan',
            'data' => $history
        ]);
    }
}