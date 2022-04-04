@extends('layouts.home')
@section('content')

    <style>
        #component-swiper-progress > div > div.card-header > h1{
            margin-left:82%;
        }
        #component-swiper-progress > div{
            /*min-height:597px;*/
        }

    </style>
    <div class="content-body">
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-profile">
                        <img src="../../../app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo">
                        <div class="card-body">
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <div class="avatar">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture">
                                    </div>
                                </div>
                            </div>
                            <h3>{{Auth::user()->name}}</h3>
                            <h6 class="text-muted">School Name Here</h6>
                            <span class="badge badge-light-primary profile-badge">Student Level</span>
                            <hr class="mb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted fw-bolder">SUBJECTS</h6>
                                    <h3 class="mb-0">4</h3>
                                </div>
                                <div>
                                    <h6 class="text-muted fw-bolder">LESSONS</h6>
                                    <h3 class="mb-0">10</h3>
                                </div>
                                <div>
                                    <h6 class="text-muted fw-bolder">
                                        <ABBR TITLE="Student of the Week">SOTW AWARDS</ABBR>
                                    </h6>

                                    <h3 class="mb-0">23</h3>
                                </div>

                            </div>
                            <br/><br/>
                            <div class="text-center">
                                <p class="card-text m-auto w-75">
                                    You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12" >
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

                                                <div class="card-body" style="min-height:500px; height: 500px">
                                                    <div class="swiper-progress swiper-container">
                                                        <div class="swiper-wrapper">
                                                            @foreach($trebleClefTvContent['content'] as $item)
                                                                <div class="swiper-slide">
                                                                    @if($item['type'] === 'video/mp4')
                                                                        <video class="img-fluid" autoplay controls muted loop style="padding-right:2px">
                                                                            <source src="{{$item['file']}}" type="video/mp4"/>
                                                                        </video>
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

            <div class="row match-height">
                @foreach($navigationCards as $nav_card)
                    <div class="col-lg-3 col-md-12 col-sm-12">
                            @if($nav_card['type'] === 'communications')
                                <a href="{{route('communications')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="bell"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @elseif($nav_card['type'] === 'student_of_the_week')
                                <a href="{{route('student-of-the-week')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="award"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            @elseif($nav_card['type'] === 'events')
                                <a href="{{route('events')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="cast"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @elseif($nav_card['type'] === 'calendar')
                                <a href="{{route('calendar')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="calendar"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @elseif($nav_card['type'] === 'classroom')
                                <a href="{{route('classroom')}}">
                                    <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                        <div class="card-body text-center">

                                            <div class="avatar avatar-xl bg-primary shadow">
                                                <div class="avatar-content">
                                                    <i class="font-large-1" data-feather="book-open"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            @elseif($nav_card['type'] === 'foundation')
                                    <a href="{{route('foundations')}}">
                                        <div class="card card-congratulations" style="background-image:url('{{$nav_card['background']}}'); background-size: cover">
                                            <div class="card-body text-center">

                                                <div class="avatar avatar-xl bg-primary shadow">
                                                    <div class="avatar-content">
                                                        <i class="font-large-1" data-feather="heart"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h1 class="mb-1 text-white">{{$nav_card['cardTitle']}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                            @endif
                    </div>
                @endforeach


                <!-- Greetings Card ends -->

            </div>
        </section>
        <!-- Dashboard Analytics end -->
    </div>

@endsection





