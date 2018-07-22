<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class SlackController extends Controller
{

    public $guid;

    public function index()
    {
        $messages = Message::all();
        return response()->json($messages);
    }

    public function getMessages($user_id)
    {
        $messages = Message::where('user_id', '=', $user_id)->get();
        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $messages = Message::where('user_id', '=', $this->guid)->get();
        foreach($messages as $message)
        {
            $message->delete();
        }

        $message = new Message();
        $message->fill($request->all());

        $re = '/[guid]/m';
        $str = $request['message'];
        $subst = '';

        $result = preg_replace($re, $subst, $str);
        if($result) {
            $resultArr = explode(" ", $result);
            $user_id = $resultArr[0];
            $this->guid = $user_id;
        }


        $theMessage = str_replace("guid".$this->guid, '', $str);


        $message['message'] = ltrim($theMessage);
        $message['user_id'] = $this->guid;


        $message->save();

    }

}
