<?php

namespace App\Http\Services\Foundations;

interface FoundationInterface
{
    public function get($communicationId);
    public function getAll();
}
