<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Teste;

class TestEventsController extends Controller
{
    public function show(){
        return view('laracast.testevent');
    }

    public function store(){
        Teste::dispatch('toy');
        // event(new Teste('toy'));
    }
}
