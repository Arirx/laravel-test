<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Concerns\AssertsStatusCodes;
use Tests\TestCase;

class CalculateApiTest extends TestCase
{
    public function test_it_returns_correct_add_result(): void
    {
        $responce = $this->postJson('/api/calculate', [
            'operation' => 'add',
            'a' => 2,
            'b' => 3
        ]);

        $responce->assertStatus(200)->assertJson(['result' => 5]);
    }

    public function test_it_returns_correct_multiply_result(): void
    {
        $responce = $this->postJson('/api/calculate', [
            'operation' => 'multiply',
            'a' => 4,
            'b' => 5
        ]);

        $responce->assertStatus(200)->assertJson(['result' => 20]);
    }
}
