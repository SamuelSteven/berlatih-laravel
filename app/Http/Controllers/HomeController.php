<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function task(){
        return view('Tugas 13/dataTask');
    }

    public function data(){
        return view('Tugas 13/dataTable');
    }
}
