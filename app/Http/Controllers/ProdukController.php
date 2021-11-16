<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use \App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $getProduk = Products::all();
        return view('pages/tables/data', [
            'title' => 'AdminLTE 3 | Data Table',
            'produk' => $getProduk
        ]);
    }

    public function destroy($id)
    {
        $getProduk = Products::find($id);
        $getProduk->delete();
        return redirect()->back();
    }

    public function create()
    {
        $getProduk = Products::all();
        return view('pages/tables/simple', [
            'title' => 'AdminLTE 3 | Tambah Produk',
            'produk' => $getProduk
        ]);
    }
}
