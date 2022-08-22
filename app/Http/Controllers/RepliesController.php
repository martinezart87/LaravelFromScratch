<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Conversation;

class RepliesController extends Controller
{
    //
    public function store(Request $request, Conversation $conversation){
        // dd($request->all());
        
        // IF GATE Check authorization if true then next, else 403 
        // $this->authorize('replay', $conversation->find($request->conversation_id));

        // if policy - name must be the same like policy
        $this->authorize('update', $conversation->find($request->conversation_id));

        dd($request->all());

        // $reply->conversation->best_reply_id = $reply->id;
        // $reply->conversation->saver();
        return back();
    }
}
