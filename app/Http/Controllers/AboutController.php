<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function sejarahTujuan()
    {
        $data = About::first();
        $purpose = $data->purpose;
        $history = $data->history;
        return view('sejarah-tujuan', compact('purpose', 'history'));
    }

    public function visiMisi()
    {
        $data = About::first();
        $vision = $data->vision;
        $mission = $data->mission;
        return view('visi-misi', compact('vision', 'mission'));
    }

    public function sasaranStrategi()
    {
        $data = About::first();
        $goals = $data->goals;
        $strategies = $data->strategy;
        return view('sasaran-strategi', compact('goals', 'strategies'));
    }
}
