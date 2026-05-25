<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\KategoriIstilah;

class TermController extends Controller
{
    public function show(Request $request)
    {
        $categories = KategoriIstilah::all();

        $keyword = $request->keyword;

        if ($keyword) {
            $terms = Term::where('nama_istilah', 'LIKE', '%' . $keyword . '%')->get();

            if ($terms->isEmpty()) {
                $message = "Istilah '$keyword' tidak ditemukan.";
            } else {
                $message = null;
            }
        } else {
            $terms = Term::orderByRaw('TRIM(LOWER(nama_istilah)) ASC')->get();
            $message = null;
        }

        return view('halamankamus', compact('terms', 'categories', 'message'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $terms = Term::where('nama_istilah', 'LIKE', "%$keyword%")->get();

        return response()->json($terms);
    }
}