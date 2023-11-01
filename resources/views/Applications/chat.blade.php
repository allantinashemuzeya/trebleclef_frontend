@extends('layouts.v2.app-concept')
@section('content')

    <iframe src="{{env('APP_URL').'/chatify'}}" width="100%" height="550px"
            frameborder="0" scrolling="auto"></iframe>

@endsection
