<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use http\Env\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    public function test (User $user, Event $event)
    {
        return true;
    }


}
