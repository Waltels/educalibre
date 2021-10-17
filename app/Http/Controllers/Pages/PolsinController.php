<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolsinController extends Controller
{
    public function polsin(){
        return view('pages.polsin');
    }
}
