<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function create (Request $request) {
      $message = new Message(); // message model
      //$message->title = $_POST['title']; regular PHP
      $message->title = $request->title;
      $message->content = $request->content;

      $message->save(); //saving object back to database

      return redirect('/');

    }

    public function view($id){

      $message=Message::findOrFail($id);

      return view('message', [
        'message'=> $message //message object used in message.blade.php
      ]);
    }
}
