<?php

namespace App\Http\Controllers;

use App\Models\Tridharma;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TridharmaController extends Controller
{
    //
    public function pengabdian()
    {
        $tridharmas = Tridharma::with('lecturer')->where('category', 'pengabdian')->orderBy('year', 'desc')->get();
        $groupedByYear = $tridharmas->groupBy('year');
        $result = [];
        foreach ($groupedByYear as $year => $items) {
            $result[] = [
                'year' => $year,
                'data' => $items
            ];
        }
        return view('pengabdian', ['tridharmas' => $result]);
    }
    public function penelitian()
    {
        $tridharmas = Tridharma::with('lecturer')->where('category', 'penelitian')->orderBy('year', 'desc')->get();
        $groupedByYear = $tridharmas->groupBy('year');
        $result = [];
        foreach ($groupedByYear as $year => $items) {
            $result[] = [
                'year' => $year,
                'data' => $items
            ];
        }
        return view('penelitian', ['tridharmas' => $result]);
    }
}
