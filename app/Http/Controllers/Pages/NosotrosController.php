<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function nosotros(){
        return view('pages.nosotros');
    }
}
