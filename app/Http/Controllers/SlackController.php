<?php

namespace App\Http\Controllers;

use App\Models\Message;

class SlackController extends Controller
{
    public function index()
    {
       $messages = Message::all();
       return $messages;
    }

}
