<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontpageController extends Controller
{
  
    public function index()
    {
        $hero = DB::table('heroes')->get();
        $menus = DB::table('menus')->get();
        return view('pages.homepage',[
            'hero' => $hero,
            'menus' => $menus
        ]);
    }
}
