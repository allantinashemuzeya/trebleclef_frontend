<?php

namespace App\Http\Services\Subject;

interface subjectInterface {

    public function get($subjectId);
    public function getAll();
    public function processSubject($data);
}
