<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function route_list() {
        return [
            ['landing'],
            ['login'],
            ['register'],
        ];
    }

    /**
     * @dataProvider route_list
     */
    public function test_routes($route) {
        $response = $this->get(route($route));
        $response->assertStatus(200);
    }
}
