<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
        }
    public function about() {
        return 'Asyifa Nurfadilah/2241720257';
    }    

    public function articles($id) {
        return 'halaman artikel id-'.$id;
    }    
    
}
