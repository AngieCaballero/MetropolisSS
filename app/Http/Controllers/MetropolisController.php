<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MetropolisController extends Controller
{
    public function Index()
    {
        return view();
    }

    public function SClasses()
    {
        return view('SpanishClasses');
    }

    public function TTransport ()
    {
        $lugares = array();

        if(Storage::disk('local')->exists('lugares.json'))
        {
            $file = Storage::get('lugares.json');
            $lugares = json_decode($file);

        }

        return view('ToursTransport')->with('lugares', $lugares);
    }

    public function DetallesViajes ($nombre)
    {
        
    }
}
