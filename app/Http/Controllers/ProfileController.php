<?php /** @noinspection PhpVoidFunctionResultUsedInspection */

/** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Http\Controllers;

use App\Mail\InviteTutor;
use App\Models\School;
use App\Models\Student;
use App\Models\TutorInvites;
use App\Models\Tutors;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    // Section Home
    public function index()
    {
        $currentUser = $this->getCurrentUser();
//        else if(Auth::user()->userType === 4){
//           $currentUser = O::where('user_id', Auth::user()->id)->first();
//        }

        return view('profile.profile', ['currentUser'=>$currentUser, 'schools'=>School::all()]);
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

        else if($request?->formType === 'inviteTutor'){

            $link = env('APP_URL').'tutor_invite/'.$request->tutorEmail;

            try {

                Mail::to($request->tutorEmail)->send(new InviteTutor($link));

                $tutorInvitesModel = new TutorInvites();
                $tutorInvitesModel->TutorInviteEmail = $request->tutorEmail;

                $tutorInvitesModel->save();

                return redirect(route('profile'))->with(['response'=>'Tutor Invited Successfully', 'statusCode'=>200]);

            }catch(Exception $e){
                log::alert($e);
            }


        }

        return abort(500);

    }

    public function saveGeneral($request)
    {
        $currentUser = Auth::user();
        $currentUser->name = $request->name . $request->last_name;

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

            if(Auth::user()->userType === 1){
                $currentUser = Student::where('user_id', Auth::user()->id)->first();
            }
            else if(Auth::user()->userType === 2){
                $currentUser = Tutors::where('userId', Auth::user()->id)->first();
            }
            else{
                $currentUser = Student::where('user_id', Auth::user()->id)->first();
            }

            $currentUser->profile_picture = Auth::user()->id.'/' . $date .'/' . $request->file('profilePicture')->getClientOriginalName();

            if($currentUser->save()){
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

            if(Auth::user()->userType === 1){
                $currentUser = Student::where('user_id', Auth::user()->id)->first();
            }
            else if(Auth::user()->userType === 2){
                $currentUser = Tutors::where('userId', Auth::user()->id)->first();
            }
            else{
                $currentUser = Student::where('user_id', Auth::user()->id)->first();
            }

            $currentUser->cover_image = Auth::user()->id.'/' . $date .'/' . $request->file('coverImage')->getClientOriginalName();

            if($currentUser->save()){
                return true;
            }
        }

        return false;
    }

    public function saveDetails($request)
    {

        if(Auth::user()->userType === 1){
            return $this->extracted($request);
        }

        else if(Auth::user()->userType === 2){
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();

            $currentUser->bio = $request->bio;
            $currentUser->cellphoneNumber = $request->cellphone_number;

            if($currentUser->save()){
                return true;
            }else{
                return false;
            }
        }

       else{
           return $this->extracted($request);
       }


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

    /**
     * @param $request
     * @return bool
     */
    public function extracted($request): bool
    {
        $currentUser = Student::where('user_id', Auth::user()->id)->first();

        $currentUser->date_of_birth = $request->dob;
        $currentUser->postal_address = $request->postal_address;
        $currentUser->residential_address = $request->residential_address;
        $currentUser->bio = $request->bio;
        $currentUser->school = $request->school;
        $currentUser->cellphoneNumber = $request->cellphone_number;
        $currentUser->next_of_kin_fullName = $request->next_of_kin_fullName;
        $currentUser->next_of_kin_cellphoneNumber = $request->next_of_kin_cellphoneNumber;

        if ($currentUser->save()) {
            return true;
        } else {
            return false;
        }
    }
}
