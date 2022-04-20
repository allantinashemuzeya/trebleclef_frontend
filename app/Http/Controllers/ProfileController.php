<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Section Home
    public function index()
    {
        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        return view('profile.profile', ['currentStudent'=>$currentStudent]);
    }

    public function updateProfile(Request $request)
    {

        if($request->formType === 'general'){
            $isGeneralSaved = $this->saveGeneral($request);
            $isProfilePictureSaved = false;

            if(count($request->files)) {
                $isProfilePictureSaved = $this->saveProfilePicture($request);
            }

            if($isGeneralSaved === true){
                return redirect(route('profile'))->with(['response'=>'Saved Successfully', 'statusCode'=>200]);
            }else {
                return redirect(route('profile'))->with(['response' => 'error', 'statusCode' => 500]);
            }
        }

        else if($request?->formType === 'changePassword'){


            if (Auth::attempt(['email'=>Auth::user()->email, 'password'=> $request->current_password])) {

                if($request->new_password === $request->confirm_new_password){
                    Auth::user()->password = Hash::make($request->new_password);
                    if(Auth::user()->save()){
                        return redirect(route('profile'))->with(['response'=>'Saved Successfully', 'statusCode'=>200]);
                    }
                    else{
                        return redirect(route('profile'))->with(['response' => 'error', 'statusCode' => 500]);
                    }
                }
                else{

                    return redirect()->intended('profile')->with(['password_error'=>'Passwords do not match.']);
                }
            }
            return redirect()->intended('profile')->with(['response'=>'Current Password Is Incorrect']);
        }

        else if($request->formType === 'details'){

            $areDetailsSaved = $this->saveDetails($request);

            if(count($request->files)) {
                $isProfilePictureSaved = $this->saveCoverImage($request);
            }

            if($areDetailsSaved){
                return redirect(route('profile'))->with(['response'=>'Saved Successfully', 'statusCode'=>200]);
            }else{
                return redirect(route('profile'))->with(['response' => 'error', 'statusCode' => 500]);
            }
        }

        return abort(500);

    }

    public function saveGeneral($request)
    {
        $currentUser = Auth::user();
        $currentUser->firstname = $request->firstName;
        $currentUser->lastname = $request->lastName;

        if($currentUser->save()){
            return true;
        }
        return false;
    }

    public function saveProfilePicture($request)
    {
        $date = Carbon::now()->isoFormat('DD.MMM.YYYY.HH:MM:SSS');

        $path = $request->file('profilePicture')->storeAs('public/profilePictures/'.Auth::user()->id.'/'.$date, $request->file('profilePicture')->getClientOriginalName());

        if($path){

            $currentStudent = Student::where('user_id', Auth::user()->id)->first();
            $currentStudent->profile_picture = Auth::user()->id.'/' . $date .'/' . $request->file('profilePicture')->getClientOriginalName();

            if($currentStudent->save()){
                return true;
            }
        }

        return false;
    }


    public function saveCoverImage($request)
    {
        $date = Carbon::now()->isoFormat('DD.MMM.YYYY.HH:MM:SSS');

        $path = $request->file('profilePicture')->storeAs('public/CoverImages/'.Auth::user()->id.'/'.$date, $request->file('coverImage')->getClientOriginalName());

        if($path){

            $currentStudent = Student::where('user_id', Auth::user()->id)->first();
            $currentStudent->cover_image = Auth::user()->id.'/' . $date .'/' . $request->file('coverImage')->getClientOriginalName();

            if($currentStudent->save()){
                return true;
            }
        }

        return false;
    }

    public function saveDetails($request)
    {

        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        $currentStudent->date_of_birth = $request->dob;
        $currentStudent->postal_address = $request->postal_address;
        $currentStudent->residential_address = $request->residential_address;
        $currentStudent->bio = $request->bio;
        $currentStudent->school = $request->school;
        $currentStudent->cellphoneNumber = $request->cellphone_number;
        $currentStudent->next_of_kin_fullName = $request->next_of_kin_fullName;
        $currentStudent->next_of_kin_cellphoneNumber = $request->next_of_kin_cellphoneNumber;

        if($currentStudent->save()){
            return true;
        }else{
            return false;
        }

    }
}
