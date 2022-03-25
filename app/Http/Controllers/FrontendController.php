<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // $berita = Berita::all();
        $beritaTerbaru = Berita::orderBy('created_at', 'ASC')->get();
        $beritaLama = Berita::orderBy('created_at', 'DESC')->get();
        $kategori = Kategori::all();
        return view('layouts.frontend', compact('beritaTerbaru', 'beritaLama', 'kategori'));

    }

    public function show(Kategori $kategori)
    {
        $berita = Berita::where('id_kategori', $kategori->id)->get();
        $kategories = Kategori::all();
        return view('layouts.kategori', compact('berita', 'kategori', 'kategories'));
    }


    public function cari(Request $request){
        $beritaTerbaru = Berita::where('judul', 'LIKE', '%'.$request->search.'%')->get();
        $kategori = Kategori::all();

        return view('layouts.frontend',compact('beritaTerbaru', 'kategori'));
    }

}
