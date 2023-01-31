<?php

namespace App\Http\Services\Communication;

interface communicationInterface
{
    public function get($communicationId);
    public function getAll();

}
