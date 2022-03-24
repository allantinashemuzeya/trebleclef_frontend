<?php

namespace App\Http\Controllers;

use App\Http\Services\Communication\Communication;

class CommunicationController extends Controller
{
    // Section Index
    public function index() {

        $data = ['communications' => $this->getCommunications(), 'pageTitle'=>'Communications'];

        return view('communications.index', $data);
    }


    // Section Communication
    public function communication($id) {
        $communication = (new Communication())->getSingleCommunication($id);
        return view('communications.communication-detail',['mode'=>'communication','communication' => $communication,'communications'=> $this->getCommunications()]);
    }

    // Section Studdent of the Week
    public function studentOfTheWeek() {
        $data = ['pageTitle'=>'Student Of the Week Awards', 'communications' => $this->processCommunication('StudentOfTheWeek')];

        return view('communications.index', $data);
    }

    // Section Events
    public function events() {

        $data = ['pageTitle'=>'Events', 'communications' => $this->processCommunication('Event')];

        return view('communications.index', $data);
    }

    // Section Helpers
    public function processCommunication($commType) {

        $list = [];
        $communications =  $this->getCommunications();

        foreach($communications as $communication){
            if( in_array($commType, $communication['type']) ){
                array_push($list, $communication);
            }
        }

        return $list;
    }

    // Section Get Communications
    public function getCommunications(){
        return (new Communication())->getAll();
    }

}
