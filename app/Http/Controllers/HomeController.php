<?php

namespace App\Http\Controllers;
use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\Student;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    //

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);

        if(Auth::check()){
            $user = User::where('id', Auth::user()->id)->get();
            $user->name = $user->firstname . ' ' . $user->lastname;

            $user->save();
        }

    }
    public function index(): Factory|View|Application
    {

      $draggableSlider = (new Home())->draggableSlider();
      $trebleClefTv = (new Home())->trebleClefTv();
      $navigationCards = (new Home())->navigationCards();
      $musicQuotes = (new MusicQuotes())->getAll();

      shuffle($musicQuotes);

        $currentUser = $this->getCurrentUser();

        $data = [
          'draggableSliderContent' => $draggableSlider,
          'trebleClefTvContent' => $trebleClefTv,
          'navigationCards'=>$navigationCards,
          'musicQuotes'=> $musicQuotes,
          'currentUser' => $currentUser

      ];



      return view('home.home', $data);

    }

    /**
     * @return mixed
     */
    public function getCurrentUser(): mixed
    {
        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        return $currentUser;
    }


}
