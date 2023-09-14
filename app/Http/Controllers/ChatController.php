<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ChatController extends Controller
{

    public function index() {

        return view('Applications.chat', self::getPageLevelData());
    }

    /**
     * Get Page Level Data
     *
     * @return array
     */
    private static function getPageLevelData(): array
    {
        $title = 'TCA Chat | Treble Clef Academy';
        return HelperMethods::getGenericNavMenu(title: $title);
    }
}
