<?php

namespace App\Http\Controllers;
use App\Hoodie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        $hoodies =  Hoodie::orderBy('created_at','desc')->limit(6)->get();
        return view('welcome')->withHoodies($hoodies);
    }
}
