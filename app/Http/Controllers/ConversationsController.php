<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationsController extends Controller
{
    public function index(){
        return view('conversations.index', [
            'conversations' => Conversation::all()
        ]);
    }

    public function show(Conversation $conversation){
        // $this->authorize('view', $conversation);

        return view('conversations.show', [
            'conversation' => $conversation
        ]);
    }

    public function store(){
        dd(request()->all());
    }
}
