<?php

namespace App\Listeners;

use App\Events\Teste;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActionTree
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Teste  $event
     * @return void
     */
    public function handle(Teste $event)
    {
        var_dump('action tree');

        //
    }
}
