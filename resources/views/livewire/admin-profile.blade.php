<div class="main-profile">
    <div class="image-bx">
        <img id="profile_picture_preview" src="{{ Auth::user()->profile_picture !== null ? asset( Auth::user()->profile_picture)
                                                            : asset('app-assets/images/logo/treble Clef_logo original.png')}}" alt="">

    </div>
    <h5 class="name"><span class="font-w400">Hello,</span> {{Auth::user()->name}}</h5>
    <p class="email">{{Auth::user()->email}}</p>
</div>

<script>
    document.getElementById('profile_picture_preview').addEventListener('click', function(){
        document.getElementById('profile_picture').click();
    });
</script>
