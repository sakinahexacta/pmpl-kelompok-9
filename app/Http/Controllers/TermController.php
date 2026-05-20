<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $terms = Term::where('nama_istilah', 'LIKE', "%$keyword%")->get();

        return response()->json($terms);
    }
}