@extends('layouts.home')
@section('content')

    <style>
        #component-swiper-progress > div > div.card-header > h1{
            /* margin-left:82%; */
        }
        #component-swiper-progress > div{
            /*min-height:597px;*/
        }
        @media (max-width: 568px) {

            #component-swiper-progress{
                /* position: absolute;
                top: -190vh;    */
                padding: 0;
                margin: auto;
                left: 0;
                right: 0;
            }
            #component-swiper-progress > div{
                min-height: 46px!important;
                 height: auto!important;
            }
            #component-swiper-progress > div{
                padding: 0px;
            }
        }

        div.swiper-slide.swiper-slide-active{
            width: calc(50% + 89px);
        }

        #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12{
            margin-top: 48px;
        }

        #dashboard-analytics > div > div > div > div > a.btn.btn-primary.btn-cart.waves-effect.waves-float.waves-light{
            width: 100%;
        }
    </style>
    <div class="content-body">

        @if(empty($currentStudent->profile_picture))
            <div class="col-12 mt-75">

                <div class="alert alert-danger mb-50" role="alert">
                    <h4 class="alert-heading text-center">Please finish setting up your <a href="{{route('profile')}}">account!</a>
                    </h4>
                </div>
            </div>

        @elseif(empty($currentStudent->bio))
            <div class="col-12 mt-75">

                <div class="alert alert-warning mb-50" role="alert">
                    <h4 class="alert-heading text-center">Please update your Bio in <a href="{{route('profile')}}">account settings</a>
                    </h4>
                </div>
            </div>
        @endif


        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">


            @if($draggableSliderContent['sliderType'] === 'standard')
                <!-- Responsive Breakpoints swiper  #Not-Standard-->
                    <section id="component-swiper-responsive-breakpoints">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$draggableSliderContent['sliderTitle']}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="swiper-responsive-breakpoints swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($draggableSliderContent['content'] as $item)

                                            <div class="swiper-slide">
                                                @if($item['type'] === 'video/mp4')
                                                    <video class="" autoplay controls muted loop style="border-radius:10px">
                                                        <source src="{{$item['file']}}" type="video/mp4"/>
                                                    </video>
                                                @else
                                                    <img class="img-fluid" src="{{$item['file']}}" alt=""/>
                                                @endif
                                            </div>

                                        @endforeach

                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!--/ Responsive Breakpoints swiper -->
            @else
                <!-- coverflow 3D effect swiper -->
                <section id="component-swiper-coverflow">
                    <div class="card" style="background: linear-gradient(45deg, black, #a5171738);">
                        <div class="card-header">
                            <h4 class="card-title">{{$draggableSliderContent['sliderTitle']}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="swiper-coverflow swiper-container autoplay" style="perspective: 1185px;">
                                <div class="swiper-wrapper" >
                                    @foreach($draggableSliderContent['content'] as $item)

                                        <div class="swiper-slide">
                                            @if($item['type'] === 'video/mp4')
                                                <video class="img-fluid" autoplay controls muted loop style="border-radius:10px">
                                                    <source src="{{$item['file']}}" type="video/mp4"/>
                                                </video>
                                            @else
                                                <img class="img-fluid" src="{{$item['file']}}" alt=""/>
                                            @endif
                                        </div>

                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ coverflow effect swiper -->
            @endif

            <!-- Swiper -->
            <div class="row match-height">
                <!-- Greetings Card starts -->
                @if(!empty($currentStudent->profile_picture))
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="{{route('profile')}}">
                            <div class="card card-profile">
                            <!-- <img src="{{asset('storage/profilePictures/'.$currentStudent->cover_image)}}" class="img-fluid card-img-top" alt="Profile Cover Photo"> -->
                                <div class="card-body">
                                    <div class="profile-image-wrapper">
                                        <div class="profile-image">
                                            <div class="avatar">
                                                <img src="{{asset('storage/profilePictures/'.$currentStudent->profile_picture)}}" alt="Profile Picture">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
                                    @foreach($schools as $school)
                                        @if($school['id'] === $currentStudent->school)
                                            <h6 class="text-muted">{{$school['name']}}</h6>
                                        @endif
                                    @endforeach
                                    <span class="badge badge-light-primary profile-badge">{{Auth::user()->student_level}}</span>
                                    <hr class="mb-2">
                                    @if(!empty($currentStudent->bio))
                                        <div class="text-center">
                                            <h4 class="text-title">My Bio</h4>
                                            <p class="card-text m-auto w-75 text-white-50">
                                                {{$currentStudent->bio}}
                                            </p>
                                        </div>
                                        <hr/>

                                    @endif

                                    <br/><br/>
                                    @if(count($musicQuotes)>0)
                                        <div class="text-center">
                                            <h4 class="text-title"> Quote of the day</h4>
                                            <p class="card-text m-auto w-75 text-danger">
                                                {{$musicQuotes[0]['text']}}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </a>

                    </div>
                @endif


                <div class="{{ !empty($currentStudent->profile_picture) ? 'col-lg-8 col-md-12 col-sm-12' : 'col-lg-12 col-md-12 col-sm-12'  }}" >
{{--                    <div class="card-header">--}}
{{--                        <h4 class="card-title">Treble Clef Tv</h4>--}}

{{--                    </div>--}}
                    <div class="card card-congratulations" style="background: linear-gradient(45deg, black, #1f0808);">
                        <div class="card-body text-center">
                            {{-- treble clef tv  --}}
                            <!-- Media Player -->
                                <section id="media-player-wrapper">
                                    <div class="row">
                                        <!-- progress swiper -->
                                        <section id="component-swiper-progress">

                                                <div class="card-body" style="min-height:500px;">
                                                    <div class="swiper-progress swiper-container">
                                                        <div class="swiper-wrapper">
                                                            @foreach($trebleClefTvContent['content'] as $item)
                                                                <div class="swiper-slide">
                                                                    @if($item['type'] === 'video/mp4')
                                                                        <video  class="img-fluid" autoplay controls muted loop style="padding-right:2px">
                                                                            <source src="{{$item['file']}}" type="video/mp4"/>
                                                                        </video>
                                                                    @elseif($item['type'] === 'remote_video')
                                                                        <iframe
                                                                            width="100%"
                                                                            height="450px"
                                                                            src="{{$item['file']}}"
                                                                            title="YouTube video player" frameborder="2"
                                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                            allowfullscreen>
                                                                        </iframe>
                                                                    @else
                                                                        <img class="img-fluid " src="{{$item['file']}}" alt=""/>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                        </section>
                                        <!--/ progress swiper -->

                                    </div>
                                </section>
                                <!--/ Media Player -->
                        </div>
                    </div>
                </div>

            </div>

            <div class="row match-height jhfhjfhf">
                @foreach($navigationCards as $nav_card)

                            @if($nav_card['type'] === 'communications')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('communications')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="bell"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('communications')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'student_of_the_week')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('student-of-the-week')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="award"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('student-of-the-week')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'events')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('events')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="cast"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('events')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'networks')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('networks')}}">
                                        <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                            <div class="card-body text-center">

                                                <div class="avatar avatar-xl bg-primary shadow">
                                                    <div class="avatar-content">
                                                        <i class="font-large-1" data-feather="git-branch"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
    {{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                                </div>
                                            </div>
                                            <div class="item-options text-center">
                                                <a href="{{route('networks')}}" class="btn btn-primary btn-cart">
                                                    <i data-feather="book-open"></i>
                                                    <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                                </a>
                                            </div>
                                        </div>

                                    </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'newsletters')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('communication-by-type', 'NewsLetter')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="cast"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('communication-by-type', 'NewsLetter')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'competitions')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('communication-by-type', 'Competitions')}}"
                                >
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="award"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('communication-by-type', 'Competitions')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a></div>
                            @elseif($nav_card['type'] === 'calendar')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('calendar')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="calendar"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('calendar')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'classroom')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('classroom')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="book-open"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
{{--                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <a href="{{route('classroom')}}" class="btn btn-primary btn-cart">
                                                <i data-feather="book-open"></i>
                                                <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                            </a>
                                        </div>
                                    </div>

                                </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'foundation')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('foundations')}}">
                                        <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                            <div class="card-body text-center">

                                                <div class="avatar avatar-xl bg-primary shadow">
                                                    <div class="avatar-content">
                                                        <i class="font-large-1" data-feather="heart"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
{{--                                                    <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                                </div>
                                            </div>
                                            <div class="item-options text-center">
                                                <a href="{{route('foundations')}}" class="btn btn-primary btn-cart">
                                                    <i data-feather="book-open"></i>
                                                    <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                                </a>
                                            </div>
                                        </div>

                                    </a>
                                                    </div>
                            @elseif($nav_card['type'] === 'office')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                <a href="{{route('office')}}">
                                        <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                            <div class="card-body text-center">

                                                <div class="avatar avatar-xl bg-primary shadow">
                                                    <div class="avatar-content">
                                                        <i class="font-large-1" data-feather="file-text"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
{{--                                                    <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                                </div>
                                            </div>
                                            <div class="item-options text-center">
                                                <a href="{{route('office')}}" class="btn btn-primary btn-cart">
                                                    <i data-feather="book-open"></i>
                                                    <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                                </a>
                                            </div>
                                        </div>

                                    </a>
                                                    </div>
                    @elseif($nav_card['type'] === 'gallery')
                                                    <div class="col-lg-3 col-md-12 col-sm-12">

                               <a href="{{route('gallery')}}">
                                        <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                            <div class="card-body text-center">

                                                <div class="avatar avatar-xl bg-primary shadow">
                                                    <div class="avatar-content">
                                                        <i class="font-large-1" data-feather="image"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
{{--                                                    <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>--}}
                                                </div>
                                            </div>
                                            <div class="item-options text-center">
                                                <a href="{{route('gallery')}}" class="btn btn-primary btn-cart">
                                                    <i data-feather="image"></i>
                                                    <span class="add-to-cart">{{$nav_card['cardTitle']}}</span>
                                                </a>
                                            </div>
                                        </div>

                                    </a>
                                                    </div>
                            @endif
                @endforeach


                <!-- Greetings Card ends -->

            </div>
        </section>



        <!-- Dashboard Analytics end -->
    </div>

    @push('scripts')
   <script>
   var times_next_clicked = 0;
   function Scrolldown() {
     window.scroll(0,800);
    }

    function myFunction(x) {
     if (x.matches) { // If media query matches
        window.onload = Scrolldown;

       }
    }

    var x = window.matchMedia("(max-width: 500px)")
    myFunction(x)
    x.addListener(myFunction)

    //    console.log('---===>',);
    setTimeout(() => {

        const all_elements = document.querySelectorAll('.swiper-wrapper');


        console.log(all_elements[1].children)
        Array.prototype.slice.call(all_elements[1].children).forEach(x=>{

            x.style.width = '100%';
        })

        const nxt_btn = document.querySelector('.swiper-button-next')
        const prev_btn = document.querySelector('.swiper-button-prev')

        nxt_btn.addEventListener('click',(e)=>{
          const video =  e.target.parentElement.getElementsByTagName('video')[times_next_clicked];

          video.pause();
          const first_parent_div = video.parentElement
          first_parent_div.style.width = '100%'
          first_parent_div.parentElement.style.transform='translate3d(-100%, 0px, 0px)';


            times_next_clicked++;
            e.target.parentElement.getElementsByTagName('video')[times_next_clicked].play();
        })

        prev_btn.addEventListener('click',(e)=>{
          const video =  e.target.parentElement.getElementsByTagName('video')[times_next_clicked];

          video.pause();
          video.parentElement.style.width = '100%'

          times_next_clicked--;
          e.target.parentElement.getElementsByTagName('video')[times_next_clicked].play();
        })

    }, 1000);
   </script>
    @endpush
@endsection





