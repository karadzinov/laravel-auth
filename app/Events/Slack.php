<?php

namespace App\Events;
use App\Models\User;


class Slack
{

    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = User::class;
        $this->getUser();
    }

    public function getUser()
    {
        return $this->user;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */

}
