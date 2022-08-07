<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class PageController extends Controller
{
    // muriwo_we_data

    public function index()
    {
        return view('start');
    }

    // Scott_Code

    public function finish(){

        return view('finish');

    }

    // Eel_Code

    public function cancel(){

        return view('cancel');
    }

    // Hove_Code

    public function final(){

        return view('final');

    }

    
}
