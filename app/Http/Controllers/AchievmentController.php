<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use Illuminate\Http\Request;

class AchievmentController extends Controller
{
    //
    public function index()
    {
        $achievments = Achievment::all();
        return view('prestasi.index', compact('achievments'));
    }

    public function show(Achievment $achievment)
    {
        return view('prestasi.show', compact('achievment'));
    }
}
