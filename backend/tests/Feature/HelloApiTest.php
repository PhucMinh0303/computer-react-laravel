<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloApiTest extends TestCase
{
    public function test_hello_endpoint_returns_a_greeting(): void
    {
        $this->getJson('/api/hello')
            ->assertOk()
            ->assertExactJson([
                'message' => 'Xin chào từ Laravel 12',
            ]);
    }
}
