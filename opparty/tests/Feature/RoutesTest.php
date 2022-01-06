<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_landing_page()
    {
        $response = $this->get(route('landing'));

        $response->assertStatus(200);
    }

    public function test_login_page()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_registration_page()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }
}
