<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(){
        return 'Hallo';
    }
    public function index(){
        return 'Selamat datang ';
    }
    public function about(){
        return 'Nama : Catur Wulan Ndari <br> NIM : 2141762111 ';
    }
    public function articles($articleId){
        return "Halaman Artikel dengan id $articleId";
    }
}
