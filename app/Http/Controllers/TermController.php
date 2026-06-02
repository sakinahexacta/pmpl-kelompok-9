<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\KategoriIstilah;
use App\Models\History;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


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

        $results = Term::where('nama_istilah', 'like', "%$keyword%")->get();

        if (Auth::check()) {
           $term = Term::where('nama_istilah', 'like', "%$keyword%")
                ->first();

            if (Auth::check() && $term) {
                History::create([
                    'id_user' => Auth::id(),
                    'id_istilah' => $term->id_istilah,
                ]);
            }
        }

        return view('kamus', compact('results', 'keyword'));
    }


    // public function searchResults(Request $request)
    // {
    //     $keyword = $request->keyword;

    //     $terms = Term::query();

    //     if ($keyword) {
    //         $terms->where('nama_istilah', 'LIKE', "%$keyword%");
    //     }

    //     $terms = $terms->get();

    //     return view('halamankamus', compact('terms', 'keyword'));
    // }

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

        if ($keyword && Auth::check()) {

            $term = Term::where('nama_istilah', 'like', "%$keyword%")->first();

            if ($term) {
                History::firstOrCreate([
                    'id_user' => Auth::id(),
                    'id_istilah' => $term->id_istilah,
                ]);
            }
        }
        
        $message = null;

        if ($keyword && $terms->isEmpty()) {
            $message = "Istilah '$keyword' tidak ditemukan.";
        }

        return view('halamankamus', compact('categories', 'terms', 'keyword', 'message'));
    }

    public function store(Request $request)
    {
        $term = Term::create([
            'nama_istilah' => $request->nama_istilah,
            'definisi' => $request->definisi,
            'pelafalan' => $request->pelafalan,
            'singkatan' => $request->singkatan,
            'asal_bahasa' => $request->asal_bahasa,
            'kategori_utama' => $request->kategori_utama,
            'sub_kategori' => $request->sub_kategori,
            'penjelasan' => $request->penjelasan,
            'gambar' => $request->gambar,
            'id_kategori' => $request->id_kategori,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Istilah berhasil ditambahkan',
            'data' => $term
        ]);
    }

    public function showApi($id)
    {
        $term = Term::with('kategori')->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $term
        ]);
    }

    public function update(Request $request, $id)
    {
        $term = Term::findOrFail($id);

        $term->update([
            'nama_istilah' => $request->nama_istilah,
            'definisi' => $request->definisi,
            'pelafalan' => $request->pelafalan,
            'singkatan' => $request->singkatan,
            'asal_bahasa' => $request->asal_bahasa,
            'kategori_utama' => $request->kategori_utama,
            'sub_kategori' => $request->sub_kategori,
            'penjelasan' => $request->penjelasan,
            'gambar' => $request->gambar,
            'id_kategori' => $request->id_kategori,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Istilah berhasil diperbarui',
            'data' => $term
        ]);
    }

    public function destroy($id)
    {
        $term = Term::findOrFail($id);

        $term->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Istilah berhasil dihapus'
        ]);
    }

    public function getAll()
    {
        $terms = Term::with('kategori')->get();

        return response()->json([
            'status' => 'success',
            'data' => $terms
        ]);
    }
}

