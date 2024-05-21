<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $news = \App\Models\News::latest()->take(4)->get();
        return view('beranda', compact('news'));
    }
}
