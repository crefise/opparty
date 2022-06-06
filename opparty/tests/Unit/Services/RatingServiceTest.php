<?php
namespace Tests\Unit\Services;

use App\Models\Rating;
use App\Models\User;
use Tests\TestCase;
use App\Service\RatingService;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RatingServiceTest extends TestCase {
    use RefreshDatabase;

    public function setUp (): void {
        parent::setUp();

        logger('TEST TEEEST');
    }


    public function testSuperTest () {

        $user = $this->createUser();
        $rating = $this->createRatingForUser($user);

        $service = new RatingService($user);

        $this->assertEquals(
            $this->profileRatingFormule($rating->rating),
            $service->getTransformedRatingForProfile()
        );

    }

    public function createUser() {
        $user = new User([
            'name' => 'Test',
            'email' => 'Email',
            'password' => 'Password',
        ]);

        $user->save();

        return $user;
    }

    public function createRatingForUser(User $user) {
        $rating = new Rating([
            'user_id' => $user->id,
            'rating'  => 123
        ]);

        $rating->save();

        $user->update([
            'rating_id' => $rating->id
        ]);

        return $rating;
    }


    public function profileRatingFormule($default) {
        return $default * RatingService::$PROFILE_CO;
    }
}
