<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    // Metode untuk halaman About
    public function about()
    {
        return view('landing.about');
    }

    // Metode untuk halaman Menu
    public function menu()
    {
        return view('landing.menu');
    }

    // Metode untuk halaman Review
    public function review()
    {
        return view('landing.review');
    }

    // Metode untuk halaman Contact
    public function contact()
    {
        return view('landing.contact');
    }
}