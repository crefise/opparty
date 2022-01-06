<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    public function getMyEvents () {
        return auth()->user()->events;
    }

    public  function show () {
        return Event::all();
    }
}
