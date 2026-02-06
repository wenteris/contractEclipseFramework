<?php
/**
 * Tests for contractEclipse
 */

use PHPUnit\Framework\TestCase;
use Contracteclipse\Contracteclipse;

class ContracteclipseTest extends TestCase {
    private Contracteclipse $instance;

    protected function setUp(): void {
        $this->instance = new Contracteclipse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contracteclipse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
