{{-- user info and avatar --}}


@php
    if(Illuminate\Support\Facades\Auth::user()->userType === 1){
           $currentUser = App\Models\Student::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->first();
    }
    else if(Illuminate\Support\Facades\Auth::user()->userType === 2){
        $currentUser =  App\Models\Tutors::where('userId', Illuminate\Support\Facades\Auth::user()->id)->first();
    }
    else{
       $currentUser =  App\Models\Student::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->first();
    }

@endphp
<div class="avatar av-l chatify-d-flex">
    @if(!empty($currentUser->profile_picture))
        <span class="avatar">
              <img
                  alt="avatar"
                  class="round"
                  height="40"
                  src="{{asset('storage/profilePictures/'.$currentUser->profile_picture)}}"
                  {{--                            src="https://ui-avatars.com/api/?name={{Auth::user()->firstname}}+{{Auth::user()->lastname}}&background=random&rounded=true"--}}
                 /><span class="avatar-status-online"></span></span></a>
    @endif
</div>
<p class="info-name">{{ config('chatify.name') }}</p>
<div class="messenger-infoView-btns">
    {{--     <a href="#" class="default"><i class="fas fa-camera"></i> default</a>--}}
    <a href="#" class="danger delete-conversation"><i class="fas fa-trash-alt"></i> Delete Conversation</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title">shared photos</p>
    <div class="shared-photos-list"></div>
</div>
