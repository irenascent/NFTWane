<?php
/**
 * Tests for NFTWane
 */

use PHPUnit\Framework\TestCase;
use Nftwane\Nftwane;

class NftwaneTest extends TestCase {
    private Nftwane $instance;

    protected function setUp(): void {
        $this->instance = new Nftwane(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftwane::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
