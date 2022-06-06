<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EventController extends Controller
{
    public function index() {
        return view('events');
    }
}
