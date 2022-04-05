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
    <div>
        <object data="{{$calendar}}" type="application/pdf" width="100%" height="1000px">
            alt : <a href="{{$calendar}}">No Annual Calendar Shared</a>
        </object>
    </div>

@endsection
