<?php

namespace App\Http\Controllers;

use App\Http\Services\Home\Home;

class HomeController extends Controller
{
    //
    public function index()
    {
      $draggableSlider = (new Home())->draggableSlider();

      $trebleClefTv = (new Home())->trebleClefTv();
      $navigationCards = (new Home())->navigationCards();
        return view('home.home', ['draggableSliderContent' => $draggableSlider, 'trebleClefTvContent' => $trebleClefTv, 'navigationCards'=>$navigationCards]);
    }
}
