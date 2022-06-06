<?php
namespace App\Service;

use App\Models\Event;
use App\Models\User;

class RatingService {
    static int $PROFILE_CO = 100;
    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getTransformedRatingForProfile() {
        return $this->user->rating()->rating * self::$PROFILE_CO;
    }
}
