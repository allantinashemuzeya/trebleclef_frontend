<?php

namespace App\Http\Services\SchoolFees;

interface SchoolFeesInterface
{
    public function get($productId);

    public function getAll();

}
