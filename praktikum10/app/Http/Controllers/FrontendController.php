<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tugas10.darma');
    }

    public function kesuma()
    {
        return view('tugas10.layout.about');
    }

}