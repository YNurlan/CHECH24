<?php
declare(strict_types=1);
namespace Azubi\Math;

use PHPUnit\Framework\TestCase;
use Azubi\Math\MathInterface;
use Azubi\Math\Math;

final class MathTest extends TestCase
{
    private ?MathInterface $sut = null;

    protected function setUp(): void
    {
        $this->sut = new Math();
    }

    protected function tearDown(): void
    {
        $this->sut = null;
    }

    public function testAdd(): void
    {
        $this->assertSame(4.0, $this->sut->add(2.0, 2.0));
        $this->assertSame(2.0, $this->sut->add(1.0, 1.0));
        $this->assertSame(3.0, $this->sut->add(1.5, 1.5));
    }

    public function testSubtract(): void
    {
        $this->assertSame(3.0, $this->sut->subtract(9.0, 6.0));
        $this->assertSame(5.0, $this->sut->subtract(15.0, 10.0));
        $this->assertSame(-3.0, $this->sut->subtract(6.0, 9.0));
    }

    public function testMultiply(): void
    {
        $this->assertSame(6.0, $this->sut->multiply(2.0, 3.0));
        $this->assertSame(0.0, $this->sut->multiply(0.0, 5.0));
        $this->assertSame(-10.0, $this->sut->multiply(-2.0, 5.0));
    }

    public function testDivide(): void
    {
        $this->assertSame(2.0, $this->sut->divide(4.0, 2.0));
        $this->assertSame(1.5, $this->sut->divide(3.0, 2.0));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->sut->divide(5.0, 0.0);
    }
}