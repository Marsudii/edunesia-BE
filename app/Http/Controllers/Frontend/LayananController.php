<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layanan(){
        return view('Frontend.Layanan');
    }
}