<?php

namespace App\Http\Controllers;

use App\Http\Services\Communication\Communication;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class CommunicationController extends Controller
{
    //
    public function index()
    {


        $data = ['communications' => $this->getCommunications(), 'pageTitle' => 'Communications','currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ];

        return view('communications.index', $data);
    }


    //Section Communication
    public function communication($id)
    {
        $communication = (new Communication())->getSingleCommunication($id);
        return view('communications.communication-detail', ['mode' => 'communication', 'communication' => $communication, 'communications' => $this->getCommunications(), 'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ]);
    }


    //Section Events
    public function events()
    {

        $data = ['pageTitle' => 'Events', 'communications' => $this->processCommunication('Event'),'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ];

        return view('communications.index', $data);
    }

    //Section Student of the week
    public function studentOfTheWeek()
    {

        $data = ['pageTitle' => 'Student of The Week Awards', 'communications' => $this->processCommunication('StudentOfTheWeek'),          'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ];

        return view('communications.index', $data);
    }

    // Section Foundations
    public function foundations()
    {
        $data = ['pageTitle' => 'Treble Clef Foundations', 'communications' => $this->processCommunication('Foundation'),          'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ];

        return view('communications.index', $data);

    }

    public function communicationByType($type)
    {
        $data = ['pageTitle' =>  $type, 'communications' => $this->processCommunication($type), 'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ];

        return view('communications.index', $data);


    }


    //Section Processes
    public function getCommunications()
    {
        return (new Communication())->getAll();
    }

    public function processCommunication($commType)
    {

        $list = [];
        $communications = $this->getCommunications();

        foreach ($communications as $communication) {
            if ($commType === $communication['type']) {
                $list[] = $communication;
            }
        }

        return $list;
    }

}
