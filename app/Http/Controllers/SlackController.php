<?php

namespace App\Http\Controllers;

use App\Models\Message;

class SlackController extends Controller
{
    public function index()
    {
        $message = new Message();
        $message['message'] = "aaa ova nekje vkaa";
        $message->save();

       $messages = Message::all();
       return $messages;
    }

}
