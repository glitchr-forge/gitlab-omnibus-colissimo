<?php

namespace Omnibus\Colissimo\Tests;

use Omnibus\Colissimo\ColissimoGatewayFactory;
use PHPUnit\Framework\TestCase;

final class ColissimoGatewayTest extends TestCase
{
    public function testTheGatewayIsNamedAndBuilt(): void
    {
        $factory = new ColissimoGatewayFactory();

        self::assertSame('colissimo', $factory->getName());
        self::assertSame('colissimo', $factory->create()->getName());
    }
}
