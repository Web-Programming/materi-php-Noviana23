<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', action: function() {
    return view(
        'beranda',
        [
            'name' => 'Nopi',
            'email' => 'noviphi889@gmail.com',
            'alamat' => 'Jl. Rumah'
        ]
    );
});

Route::get('/berita/{id}/{judul}', function($id,$judul){
    return view('berita', ['id'=>$id, 'judul'=>$judul]);
});