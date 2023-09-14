@extends('layouts.v2.app-concept')
@section('content')

    <h1>This is Chat Welcome</h1>

    <iframe src="{{config('app.mattermost_url')}}" width="100%" height="550px"
            frameborder="0" scrolling="auto"></iframe>


@endsection
