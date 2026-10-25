<?php
/**
 * Tests for TokenHollow
 */

use PHPUnit\Framework\TestCase;
use Tokenhollow\Tokenhollow;

class TokenhollowTest extends TestCase {
    private Tokenhollow $instance;

    protected function setUp(): void {
        $this->instance = new Tokenhollow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenhollow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
