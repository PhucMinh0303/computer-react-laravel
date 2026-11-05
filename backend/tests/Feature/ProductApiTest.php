<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductApiTest extends TestCase
{
    public function test_products_endpoint_returns_sections(): void
    {
        $this->getJson('/api/products')
            ->assertOk()
            ->assertJsonCount(6, 'data')
            ->assertJsonPath('data.0.key', 'iphone')
            ->assertJsonStructure([
                'data' => [['key', 'title', 'image', 'products' => [['id', 'name', 'price', 'image']]]],
            ]);
    }
}
