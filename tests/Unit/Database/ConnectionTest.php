<?php

declare(strict_types=1);

namespace Evgenbel\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Evgenbel\LaravelClickHouse\Database\Connection;
use Evgenbel\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
