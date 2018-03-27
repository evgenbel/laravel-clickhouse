<?php

declare(strict_types=1);

namespace Evgenbel\LaravelClickHouse\Database;

use Evgenbel\ClickhouseBuilder\Query\Grammar;
use Evgenbel\LaravelClickHouse\Database\Query\Builder;

class Connection extends \Evgenbel\ClickhouseBuilder\Integrations\Laravel\Connection
{
    public function query()
    {
        return new Builder($this, new Grammar());
    }
}
