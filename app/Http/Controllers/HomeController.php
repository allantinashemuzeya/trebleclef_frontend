<?php

namespace App\Http\Controllers;
use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(): Factory|View|Application
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
          'musicQuotes'=> $musicQuotes,
          'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
      ];



      return view('home.home', $data);

    }
}
