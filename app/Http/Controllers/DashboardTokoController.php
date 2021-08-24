<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTokoController extends Controller
{
    public function dashboardToko()
    {
        return view('toko.dashboard', [
            'active' => 'dashboard'
        ]);
    }

    public function produkToko()
    {
        return view('toko.produk', [
            'active' => 'produk'
        ]);
    }

    public function tambahProduk()
    {
        return view('toko.create', [
            'active' => 'produk'
        ]);
    }

    public function profileToko()
    {
        return view('toko.profile', [
            'active' => 'profile'
        ]);
    }
}
