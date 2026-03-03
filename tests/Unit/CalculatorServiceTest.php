<?php

namespace Tests\Unit;

use App\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    private CalculatorService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new CalculatorService();
    }

    public function test_it_can_add_numbers(): void
    {
        $result = $this->service->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function test_it_can_multiply_numbers(): void
    {
        $result = $this->service->multiply(4, 5);
        $this->assertEquals(20, $result);
    }
}
