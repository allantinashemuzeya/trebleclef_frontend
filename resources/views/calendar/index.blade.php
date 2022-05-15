@extends('layouts.home')
@section('content')

<style>
        @media (max-width: 568px) {
            object{
                background: white;
                color: transparent;
                padding: 10px;
                border-radius:10px;
                margin: 54px;
                position: relative;
                top: 90px;
            }
            object a {
                color: transparent;
            }
            object a:hover {
                color: transparent!important;
            }
            object a::before{
                content:'Download Calender';
                color:black!important;
                position: absolute;
            }
        }

</style>

    <h1>School Calendar</h1>

<a download="{{$calendar}}" href="{{$calendar}}" id="download_button" class="btn w-100 btn-primary mt-2 waves-effect waves-float waves-light">Download Calendar</a>
    <div>
        <object id="calendar" data="{{$calendar}}" type="application/pdf" width="100%" height="1000px" style="display: block">
            alt : <a href="{{$calendar}}">No Annual Calendar Shared</a>
        </object>
    </div>

    <script>

        function iOS() {
            return [
                    'iPad Simulator',
                    'iPhone Simulator',
                    'iPod Simulator',
                    'iPad',
                    'iPhone',
                    'iPod'
                ].includes(navigator.platform)
                // iPad on iOS 13 detection
                || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
        }

        if(iOS()){
            document.getElementById('calendar').style.display = 'none'
            document.getElementById('download_button').style.display = 'block'
        }

    </script>
@endsection
