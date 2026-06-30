<?php
/**
 * Tests for ForgeShard
 */

use PHPUnit\Framework\TestCase;
use Forgeshard\Forgeshard;

class ForgeshardTest extends TestCase {
    private Forgeshard $instance;

    protected function setUp(): void {
        $this->instance = new Forgeshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgeshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
