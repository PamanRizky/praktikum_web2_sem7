<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    public function index($angka1,$angka2)
    {
        $hasil = $angka1 + $angka2;
        return view('home',compact('hasil'));
    }
    
    public function welcome()
    {
        $post = Posts::Lates()->get();
        return View('welcome',compact('posts'));
    }
}
