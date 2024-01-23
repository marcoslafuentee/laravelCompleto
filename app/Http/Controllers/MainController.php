<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $nombre = "María";
        $num = rand(1,10);
        return view("main",compact("nombre","num"));
    }
    public function get_proyectos(){

        return view("proyectos");
    }
}
