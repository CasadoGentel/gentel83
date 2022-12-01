<?php

namespace App\Http\Controllers;

use App\Models\Operateur;
use Illuminate\Http\Request;

class OperateurController extends Controller
{
    public function __invoke()
    {
        $operateur = Operateur::all();
    

    return view('configuration',
        [
            'configuration' => $operateur
        ]
        );
    }
}
