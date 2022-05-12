<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){

        $clients =[
            'JEAN',
            'KABA',
            'DIALLO'
    ];
    return view('clients.index', [
        'data'=>$clients
    ]);
    }
}
