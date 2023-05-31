<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homepage = "SHOPPING STORE";
        $deskripsi = "10% OFF YOUR ORDER";
        $nama = [
            'PAKAIAN',
            'CELANA',
            'SEPATU',
            'SANDAL',
            'TAS'
    ];


    return view ('landing', compact('namaprdct', 'deskripsi' ));
    return view ('master.product', compact('nama' ));

        
    }

    public function index2()
    {

    $kategori = [
        'Alat elektronik',
        'Kendaraan',
        'Fashion',
        'Alat Tulis Kantor',
        'Kebutuhan Pokok'
    ];

    $produk = [
        'Pakaian',
        'Celana',
        'Sepatu',
        'Sandal',
        'Tas',
        'Perhiasan'
    ];

    $pengguna = [
        'Ayana',
        'Ayani',
        'Bagas',
        'Sista',
        'Xiu',
        'Mole',
        'Sast',
    ];
    
    
    
    return view('dashboar', compact('kategori', 'produk', 'pengguna'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}