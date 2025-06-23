<?php

namespace Tests\Feature;

use Tests\TestCase;

class PingTest extends TestCase
{
    /** @test */
    public function ping_endpoint_returns_successful_response(): void
    {
        $this->get('/api/ping')
            ->assertOk()
            ->assertJson(['ping' => 'pong']);
    }
}
