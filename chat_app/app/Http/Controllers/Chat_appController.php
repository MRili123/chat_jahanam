<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chat_appController extends Controller
{
  function showindex()   {
   return view("chat_app.index");
 }
}
