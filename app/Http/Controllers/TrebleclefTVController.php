<?php

namespace App\Http\Controllers;

use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\TrebleclefTv;
use Illuminate\Http\Request;

class TrebleclefTVController extends Controller
{
    //
    public function index()
    {
        $trebleClefTv = TrebleclefTv::all();

        $data = [
            'tca_tv' => $trebleClefTv,
        ];

        return view('TCA_TV.tca_tv', $data);
    }
}
