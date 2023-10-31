<div class="row layout-top-spacing">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-activity-three">
            <div class="widget-content">
                <div class="row match-height">
                    @php $cardCounter = 0; @endphp
                    @foreach($studentLevels as $level)
                        @if($cardCounter % 4 === 0)
                </div>
                <br> 
                <div class="row match-height">
                    @endif
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="card component-card_2 h-50"
                             style="background-image: url('{{$level->background}}'); background-size: cover;height: 251px !important;">
                            <div class="card-body"
                                 style="bottom: 0;position: absolute;border-radius: 0;padding: 0;width: 100%!important;">
                                <a href="{{ route('subjects', $level->drupal_uuid) }}"
                                   class="btn btn-danger btn-block"
                                   style="width: 100%">{{$level->name}}</a>
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
