<?php

namespace App\Http\Controllers;

use App\Models\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    //
    public function index()
    {
        $receptions = Reception::all();
        return view('penerimaan', compact('receptions'));
    }
}
