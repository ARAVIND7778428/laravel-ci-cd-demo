<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     use RefreshDatabase;

    public function test_example(): void
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        $product = Product::create([
            'name' => 'Sample Product',
            'price' => 9.99
        ]);

        $this->assertDatabaseHas('products', ['name' => 'Sample Product']);

    }
}
