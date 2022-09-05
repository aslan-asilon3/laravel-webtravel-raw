<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    
    public function index() 
    {
        return view('pages.landingpage');
    }
    
    public function detail_bali() 
    {
        return view('pages.detail-bali');
    }
    
    public function detail_nusapenida() 
    {
        return view('pages.detail-nusapenida');
    }
    
    public function checkout() 
    {
        return view('pages.checkout');
    }
    
    public function success() 
    {
        return view('pages.success');
    }
}
