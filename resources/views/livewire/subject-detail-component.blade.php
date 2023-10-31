<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three"> 
            <div class="widget-heading">
                <h5 class="">{{ $subject->name }}</h5>
            </div>
            
            <div class="widget-content" style="max-height: 500px;border-radius: 150px;" data-toggle="modal" data-target="#joinRaffleModal">
                <div class="card">
                    @if($subject->sub_intro)
                    <video controls autoplay muted class="img-fluid card-img-top"style="max-height:500px;max-width:100%; width:100%">
                        <source src="{{$subject['sub_intro']}}" type="video/mp4"/>
                    </video>
                    @else 
                    <img class="img-fluid card-img-top" src="{{$subject->banner}}" alt="Blog Detail Pic" style="max-height:450px;max-width:100%; width:100%"/>
                    @endif
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
                    {!! $subject->overview !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-heading">
                <h5 class="">Lessons</h5>
            </div>
            
            <div class="widget-content">
                <div class="row match-height">
                    @php $cardCounter = 0; @endphp
                    @foreach($lessons as $lesson)
                        @if($cardCounter % 4 === 0)
                </div>
                <br>
                <div class="row match-height">
                    @endif
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="card component-card_2 h-50" style="background-image: url('{{$lesson->banner}}'); background-size: cover;height: 190px !important;">
                            <div class="card-body" style="bottom: 0;position: absolute;border-radius: 0;padding: 0;width: 100%!important;">
                                <a href="{{ route('lesson', $lesson->id) }}" class="btn btn-danger btn-block" style="width: 100%">{{$lesson->name}}</a>
                            </div>
                        </div>
                    </div>
                    @php $cardCounter++; @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
