@extends('layouts.home')
@section('content')
    <style>
        #freechatpopup{
            display:none !important;
        }
    </style>
    <livewire:chat />


  @push('scripts')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/app-chat.min.js')}}"></script>
    <!-- END: Page JS-->
@endpush

@endsection
