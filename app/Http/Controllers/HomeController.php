<?php

namespace App\Http\Controllers;

use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;

class HomeController extends Controller
{
    //
    public function index()
    {
      $draggableSlider = (new Home())->draggableSlider();

      $trebleClefTv = (new Home())->trebleClefTv();
      $navigationCards = (new Home())->navigationCards();
      $musicQuotes = (new MusicQuotes())->getAll();

      shuffle($musicQuotes);

      $data = [
          'draggableSliderContent' => $draggableSlider,
          'trebleClefTvContent' => $trebleClefTv,
          'navigationCards'=>$navigationCards,
          'musicQuotes'=> $musicQuotes
      ];

        return view('home.home', $data);
    }
}
