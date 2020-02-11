<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
   public function index() {
       $data = Event::all();
       return view('public.event.index',compact('data'));
   }
}
