<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CulturaController extends Controller
{
    public function cultura(){
        return view('pages.cultura');
    }
}
