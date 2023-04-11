<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;


class RegistrationProcessController extends Controller
{
    //
    public function show(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $step = Auth::user()->registrationProcess->step;

        $data = [
            'current-step' => $step,
            'pageData' => (object) $this->getPageData(),
        ];

        return view('tca_online.main_application.auth.registration_process', $data);
    }

    public function getPageData(): array
    {
       $scripts = '<script src="/tca_online/main_application/assets/js/scrollspyNav.js"></script>
<script src="/tca_online/main_application/plugins/jquery-step/jquery.steps.min.js"></script>
<script src="/tca_online/main_application/plugins/jquery-step/custom-jquery.steps.js"></script>
';

       $styles = '<link href="/tca_online/main_application/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/tca_online/main_application/plugins/jquery-step/jquery.steps.css">
<style>
    #formValidate .wizard > .content {min-height: 25em;}
    #example-vertical.wizard > .content {min-height: 24.5em;}
</style>
';
        return [
            'title' => 'Registration Process',
            'headContent' => $styles,
            'bodyContent' => $scripts,
            'mainContainerAttributes'=> 'data-spy="scroll" data-target="#navSection" data-offset="100"'
        ];
    }

}
