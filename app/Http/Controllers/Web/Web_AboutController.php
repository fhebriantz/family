<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\About;

class Web_AboutController extends Controller
{
    public function show(){  
    	$abouts = About::all();
    	return view('pages/web/about/about', compact('abouts'));
    }
}