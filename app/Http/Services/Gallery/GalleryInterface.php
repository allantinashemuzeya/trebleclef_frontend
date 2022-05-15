<?php

namespace App\Http\Services\Gallery;

interface GalleryInterface
{
    public function get($id);

    public function getAll();

}
