<?php
/**
 * Tests for DappPulse
 */

use PHPUnit\Framework\TestCase;
use Dapppulse\Dapppulse;

class DapppulseTest extends TestCase {
    private Dapppulse $instance;

    protected function setUp(): void {
        $this->instance = new Dapppulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dapppulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
