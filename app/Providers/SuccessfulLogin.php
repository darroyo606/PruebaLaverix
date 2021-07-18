<?php

namespace App\Providers;

use App\Providers\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SuccessfulLogin
{
    private $request;
    private $carbon
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->request=$request
        $this->carbon =$carbon
        //
    }
   
    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event):void
    {
        //
        $event->user->update([
            'last_login' => $this->carbon,
            'last_login' => $this->request->ip(),
        ]);

    }
}
