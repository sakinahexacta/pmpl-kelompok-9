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

        $request->validate([
            'nama_istilah' => 'required|unique:terms,nama_istilah',
            'definisi' => 'required',
            'penjelasan' => 'required',
            'id_kategori' => 'required',
        ]);

        $path = null;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('gambar_terms', 'public');
        }

        $kategori = KategoriIstilah::find($request->id_kategori);

        Term::create([
            'nama_istilah' => $request->nama_istilah,
            'definisi' => $request->definisi,
            'penjelasan' => $request->penjelasan,
            'pelafalan' => $request->pelafalan,
            'singkatan' => $request->singkatan,
            'asal_bahasa' => $request->asal_bahasa,
            'sub_kategori' => $request->sub_kategori,
            'gambar' => $path,
            'id_kategori' => $request->id_kategori,

            'kategori_utama' => $kategori ? $kategori->nama_kategori : 'Tidak ada',
        ]);

        return redirect()->back()->with('success', 'Istilah berhasil ditambahkan');
    }

    public function edit($id)
    {
        $term = Term::findOrFail($id);
        $categories = KategoriIstilah::all();

        return view('admin.glosarium', compact('term', 'categories')) ;
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

        return redirect()->back()
            ->with('success', 'Istilah berhasil dihapus');
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

