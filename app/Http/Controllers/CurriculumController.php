<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    //
    public function index()
    {
        $curriculums = Curriculum::all();
        return view('kurikulum', compact('curriculums'));
    }
}
