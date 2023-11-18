@extends('layouts.v2.app-concept')
@section('content')
    <span class="loader" id="coolLoader" style="display: none;"></span>
    <livewire:event-detail-component :event="$event"/>
    <!-- Include the Yoco SDK in your web page -->
@endsection
