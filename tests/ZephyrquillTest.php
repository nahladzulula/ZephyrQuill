<?php
/**
 * Tests for ZephyrQuill
 */

use PHPUnit\Framework\TestCase;
use Zephyrquill\Zephyrquill;

class ZephyrquillTest extends TestCase {
    private Zephyrquill $instance;

    protected function setUp(): void {
        $this->instance = new Zephyrquill(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zephyrquill::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
