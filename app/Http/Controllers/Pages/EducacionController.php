<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducacionController extends Controller
{
    public function education(){
        return view('pages.educacion');
    }
}
