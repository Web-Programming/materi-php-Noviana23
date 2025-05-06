<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        function index(){
            return view("prodi.index");
        }
        function create(){
            return view("prodi.create");
        }
    }
}
