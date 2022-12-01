<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $numOp = 138;
       // $client = Client::all();
        $client = Client::where('rel_operateur', '=' ,$numOp)->get();
        return view('client.index',
            [
                'client' => $client , compact('client')
            ]
        );

    }
}
