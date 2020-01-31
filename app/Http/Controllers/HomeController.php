<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class HomeController extends Controller
{

    public function index() {

      //message model object:

      $messages = Message::all(); // grabs every row in the table



      return view('home', [
        'messages' => $messages // message object used in home.blade.php
      ]);

    }


}
