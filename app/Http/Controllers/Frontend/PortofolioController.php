<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{

    public function portofolio(){
        return view('Frontend.Portofolio');
    }
}

