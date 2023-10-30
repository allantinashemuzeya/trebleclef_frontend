<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <a download="{{$calendar}}" href="{{$calendar}}" id="download_button" class="btn w-100 btn-primary mt-2 waves-effect waves-float waves-light">Download Calendar</a>
    <div>
        <object id="calendar" data="{{$calendar}}" type="application/pdf" width="100%" height="1000px" style="display: block">
            alt : <a href="{{$calendar}}">No Annual Calendar Shared</a>
        </object>
    </div>

</div>
