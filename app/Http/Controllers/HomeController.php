<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
   

    public function tentang(){
        return view('tentang');
    }
   
    public function pemberitahuan(){
        return view('pemberitahuan');
    }

    public function opd(){
        return view('opd');
    }

    public function reqdownload(){
        return view('reqdownload');
    }

}