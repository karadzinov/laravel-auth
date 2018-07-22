<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class SlackController extends Controller
{

    public function index()
    {
       $messages = Message::all();
       return $messages;
    }

    public function getMessages($user_id)
    {
        $messages = Message::where('user_id', '=', $user_id)->get();
        return $messages;
    }

}
