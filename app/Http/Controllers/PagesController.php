<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage() {
    	$halaman = 'homepage';
    	return view('pages.homepage', compact('halaman'));
    }

    public function about() {
    	$halaman = 'about';
    	return view('pages.about', compact('halaman'));
    }
}
