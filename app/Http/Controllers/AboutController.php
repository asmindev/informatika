<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function sejarahTujuan()
    {
        $data = About::first();
        if ($data) {
            $purpose = $data->purpose;
            $history = $data->history;
        } else {
            $purpose = null;
            $history = null;
        }
        return view('sejarah-tujuan', compact('purpose', 'history'));
    }

    public function visiMisi()
    {
        $data = About::first();
        if ($data) {

            $vision = $data->vision;
            $mission = $data->mission;
        } else {
            $vision = null;
            $mission = null;
        }
        return view('visi-misi', compact('vision', 'mission'));
    }

    public function sasaranStrategi()
    {
        $data = About::first();
        if ($data) {
            $goals = $data->target;
            $strategies = $data->strategy;
        } else {
            $goals = null;
            $strategies = null;
        }
        return view('sasaran-strategi', compact('goals', 'strategies'));
    }
    public function strukturOrganisasi()
    {
        $data = About::first();
        if ($data) {
            $structure = $data->structure;
        } else {
            $structure = null;
        }
        return view('struktur-organisasi', compact('structure'));
    }
}
