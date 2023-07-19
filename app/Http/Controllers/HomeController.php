<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }


    public function addToCart($id) {

        $barang = Barang::find($id);

        Pemesanan::create([
            'user_id' => Auth::user()->id,
            'tanggal_pemesanan' => Carbon::now(),
            'status_pemesanan' => 'pending',
            'total_pemesanan' => $barang->harga_barang
        ]);


        return redirect()->route();

    }


    public function detailPesanan($id) {
        $pesanan = Pemesanan::find($id);
    }
}
