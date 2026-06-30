<?php
/**
 * Tests for ProofBridge
 */

use PHPUnit\Framework\TestCase;
use Proofbridge\Proofbridge;

class ProofbridgeTest extends TestCase {
    private Proofbridge $instance;

    protected function setUp(): void {
        $this->instance = new Proofbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Proofbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
