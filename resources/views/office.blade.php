@extends('layouts.home')
@section('content')

<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">

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

                                <div class="card-body" style="min-height:500px; height: 500px">
                                    <div class="swiper-progress swiper-container">
                                        <div class="swiper-wrapper">
                                            @foreach($trebleClefTvContent['content'] as $item)
                                                <div class="swiper-slide">
                                                    @if($item['type'] === 'video/mp4')
                                                        <video  class="img-fluid" autoplay controls muted loop style="padding-right:2px">
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


    <!-- Greetings Card ends -->

    </div>
</section>


@endsection
