<?php

declare(strict_types=1);

namespace Jolicht\PowerdnsModel\Tests\Service;

use Jolicht\PowerdnsModel\Service\RandomSalt;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Jolicht\PowerdnsModel\Service\RandomSalt
 */
class RandomSaltTest extends TestCase
{
    public function testInvoke(): void
    {
        $randomSalt = new RandomSalt();
        $salt = $randomSalt(8);
        $this->assertIsString($salt);
        $this->assertSame(16, \strlen($salt));
    }
}
