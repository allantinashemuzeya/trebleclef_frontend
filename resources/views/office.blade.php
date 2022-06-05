@extends('layouts.home')
@section('content')


    <style>
        #component-swiper-progress > div > div.card-header > h1 {
            /* margin-left:82%; */
        }

        #component-swiper-progress > div {
            /*min-height:597px;*/
        }

        @media (max-width: 568px) {

            #component-swiper-progress {
                /* position: absolute;
                top: -190vh;    */
                padding: 0;
                margin: auto;
                left: 0;
                right: 0;
            }

            #component-swiper-progress > div {
                min-height: 46px !important;
                height: auto !important;
            }

            #component-swiper-progress > div {
                padding: 0px;
            }
        }

        div.swiper-slide.swiper-slide-active {
            width: calc(50% + 89px);
        }

        #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12 {
            margin-top: 48px;
        }

        #dashboard-analytics > div > div > div > div > a.btn.btn-primary.btn-cart.waves-effect.waves-float.waves-light {
            width: 100%;
        }
    </style>


    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">

        <div class="row match-height">

            <div class="col-lg-3 col-md-12 col-sm-12">
                <a href="{{route('office-fees')}}">
                    <div class="card card-congratulations" style="background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <a href="{{route('office-fees')}}" class="btn btn-primary btn-cart">
                                <i data-feather="book-open"></i>
                                <span class="add-to-cart">Pay School Fees </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12">
                <a href="">
                    <div class="card card-congratulations" style="background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <a href="" class="btn btn-primary btn-cart">
                                <i data-feather="book-open"></i>
                                <span class="add-to-cart">Contact Technical Support </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12">
                <a href="">
                    <div class="card card-congratulations" style="background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <a href="" class="btn btn-primary btn-cart">
                                <i data-feather="book-open"></i>
                                <span class="add-to-cart">Contact Finance Office </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12">
                <a href="">
                    <div class="card card-congratulations" style="background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <a href="" class="btn btn-primary btn-cart" data-bs-toggle="modal" data-bs-target="#chooseTutor">
                                <i data-feather="book-open"></i>
                                <span class="add-to-cart">Contact Tutor </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Greetings Card ends -->

        </div>
    </section>


    <div class="form-modal-ex">

        <!-- Modal -->
        <div class="modal fade text-start" id="chooseTutor" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Choose Tutor To Chat with</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('chat-tutor')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-1">
                                <select type="number" class="form-control bg-transparent" name="tutor">
                                    @foreach($tutors as $tutor)
                                        <option value="{{$tutor->id}}">
                                           {{$tutor->firstname}}  {{$tutor->lastname}}
                                        </option>
                                   @endforeach


                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Chat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
