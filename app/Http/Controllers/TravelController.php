<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class TravelController extends Controller
{
    //
    public function index()
    {
        $travels = TravelPackage::all();
        return view ('pages.admin.travel.index', compact('travels'));
    }

    public function create()
    {
        return view ('pages.admin.travel.create');
    }

    public function show()
    {
        $travels = Travel::all();
        return view ('pages.admin.travel.index', compact('travels'));
    }

    public function edit()
    {

    }

    public function destroy()
    {

    }
}
