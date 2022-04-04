<?php

namespace App\Http\Controllers;

use App\Http\Services\Communication\communication;

class CommunicationController extends Controller
{
    //
    public function index()
    {


        $data = ['communications' => $this->getCommunications(), 'pageTitle' => 'Communications'];
        ray($data)->green();

        return view('communications.index', $data);
    }


    //Section Communication
    public function communication($id)
    {
        $communication = (new communication())->getSingleCommunication($id);
        return view('communications.communication-detail', ['mode' => 'communication', 'communication' => $communication, 'communications' => $this->getCommunications()]);
    }


    //Section Events
    public function events()
    {

        $data = ['pageTitle' => 'Events', 'communications' => $this->processCommunication('Event')];

        return view('communications.index', $data);
    }

    // Section Foundations
    public function foundations()
    {
        $data = ['pageTitle' => 'Treble Clef Foundations', 'communications' => $this->processCommunication('Foundation')];

        ray($data)->green();
        return view('communications.index', $data);

    }



    //Section Processes
    public function getCommunications()
    {
        return (new communication())->getAll();
    }

    public function processCommunication($commType)
    {

        $list = [];
        $communications = $this->getCommunications();

        foreach ($communications as $communication) {
            if (in_array($commType, $communication['type'])) {
                array_push($list, $communication);
            }
        }

        return $list;
    }

}
