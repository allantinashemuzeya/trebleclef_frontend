<?php

namespace App\Http\Controllers;

use App\Http\Services\Events\Events;
use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    //
    public function index(&$user)
    {
        $allan = new class{
            public function sex(){
                $mike = null;
                return $mike ??= 'loe sex';
            }
            public function sex2(){
                return 'I love sex';
            }
        };

        dd($allan->sex());


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
