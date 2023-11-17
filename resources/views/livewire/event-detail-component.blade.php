<div class="row layout-top-spacing">
    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">{{ $event->title }}</h5>
            </div>

            <div class="widget-content" style="max-height: 500px;border-radius: 150px;" data-toggle="modal" data-target="#joinRaffleModal">
                <div class="card">
                    @if(str_contains( $event->event_banner,'.mp4') ||
                        str_contains( $event->event_banner,'.mov')
                    )
                        <video controls autoplay muted class="img-fluid card-img-top"style="max-height:500px;max-width:100%; width:100%">
                            <source src="{{$event->event_banner}}" type="video/mp4"/>
                        </video>
                    @else
                        <img class="img-fluid card-img-top" src="{{$event->event_banner}}" alt="Blog Detail Pic" style="max-height:450px;max-width:100%; width:100%"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three" style="max-height: 500px;overflow-y: scroll; overflow-x: hidden;">
            <div class="widget-heading">
                <h5 class="">Other Events</h5>
            </div>

            <div class="widget-content">
                <div class="row match-height">
                    @php $cardCounter = 0; @endphp
                    @foreach($events as $event)
                        @if($cardCounter % 4 === 0)
                </div>
                <br>
                <div class="row match-height">
                    @endif
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card component-card_2 " style="background-image: url('{{$event->event_banner}}'); background-size: cover;height: 190px !important;">
                            <div class="card-body" style="bottom: 0;position: absolute;border-radius: 0;padding: 0;width: 100%!important;">
                                <a href="{{ route('lesson', $event->id) }}" class="btn btn-danger btn-block" style="width: 100%">{{$event->title}}</a>
                            </div>
                        </div>
                    </div>

                    @php $cardCounter++; @endphp
                    @endforeach
                </div>
            </div>
        </div>


    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">Overview</h5>
            </div>

            <div class="widget-content">
                <div class="row match-height" style="margin-left: 16px;">
                    {!! $event->event_description !!}
                </div>
            </div>
        </div>
    </div>
</div>