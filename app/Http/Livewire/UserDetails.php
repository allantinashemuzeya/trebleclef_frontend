<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class UserDetails extends Component
{
    use WithFileUploads;

    public $firstName;
    public $lastName;
    public $profilePicture;
    public $coverImage;
    public $bio;
    public $emailAddress;
    public $nextOfKinFullName;
    public $nextOfKinCellphoneNumber;
    public $activities;
    public $cellphoneNumber;
    public $school;
    public $currentStudent;
    public $currentUser;
    public $processResponse = '';

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->currentStudent = Student::where('user_id', Auth::user()->id)->first();
        $this->currentUser = Auth::user();
        $this->firstName = $this->currentUser->firstname;
        $this->lastName = $this->currentUser->lastname;
        $this->emailAddress = $this->currentUser->email;
        $this->school = $this->currentStudent->school;

    }

    public function render()
    {
        return view('livewire.user-details');
    }

    public function saveGeneral(){

        dd($this->profilePicture);

        $path = $this->profilePicture->store('profilePictures/'.Auth::user()->id);
        $this->currentStudent->profile_picture = $path;

        $this->currentUser->firstname = $this->firstName;
        $this->currentStudent->school = $this->school;

        $this->currentStudent->save();

        if($this->currentUser->save()){
//           return to_route('profile')->with(['response'=>'Information Saved Successfully']);
        }
    }
    public function save(){
        $this->validate([
            'coverImage' => 'image|max:5024', // 5MB Max
            'profilePicture' => 'image|max:5024', // 5MB Max
        ]);
        $this->coverImage->store('coverImages');
        $this->profilePicture->store('profilePictures');
    }

}
