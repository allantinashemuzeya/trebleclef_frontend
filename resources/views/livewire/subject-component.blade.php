<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-content">
                <div class="row match-height">
                    @if(empty($subjects))
                        <h5 style="left: 36%;position: relative;">{{$emptySubjectsMessage}}</h5>
                    @endif
                    @php $cardCounter = 0; @endphp
                    @foreach($subjects as $subject)
                        @if($cardCounter % 4 === 0)
                </div>
                <br>
                <div class="row match-height">
                    @endif
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="card component-card_2 h-50"
                             style="background-image: url('{{$subject->banner}}'); background-size: cover;height: 251px !important;">
                            <div class="card-body"
                                 style="bottom: 0;position: absolute;border-radius: 0;padding: 0;width: 100%!important;">
                                <a href="{{ route('subject', $subject->id) }}"
                                   class="btn btn-danger btn-block"
                                   style="width: 100%">{{$subject->name}}</a>
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
