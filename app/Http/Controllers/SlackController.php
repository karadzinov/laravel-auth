<?php

namespace App\Http\Controllers;

use App\Models\Message;

class SlackController extends Controller
{
    public $guid;
    public function index()
    {


        $re = '/[guid]/m';
        $str = 'guid4501013653736670339699537363900144024';
        $subst = '';

        $result = preg_replace($re, $subst, $str);
        if($result) {
            $this->guid = $result;
        }

        $message = new Message();
        $message['message'] = $str;
        $message['user_id'] = $this->guid;
        $message->save();


       $messages = Message::all();
       return $messages;
    }

}
