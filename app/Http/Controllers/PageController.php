<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat datang";
    }

    public function about(){
        return "1941720070 - I Made Genadi Dharma Slawa";
    }

    public function articles($id){
        return "Halaman artikel dengan ID: " . $id;
    }
}
