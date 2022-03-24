@extends('layouts.home')
@section('content')



    <h1>School Calendar</h1>
    <div>
        <object data="{{$calendar}}" type="application/pdf" width="100%" height="1000px">
            alt : <a href="{{$calendar}}">No Annual Calendar Shared</a>
        </object>
    </div>

@endsection
