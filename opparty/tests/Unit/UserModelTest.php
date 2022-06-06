<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserSignature()
    {
        $user_name = 'Jon';
        $user_email = 'jon@gmail.com';

        $user = new User(['name' => $user_name, 'email' => $user_email]);

        $signature = $user->signature;

        $expectSignature = $user_name . ' ' . $user_email;

        $this->assertEquals($expectSignature, $signature);
    }
}
