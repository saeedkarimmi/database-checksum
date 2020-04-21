<?php

namespace saeedkarimmi\DatabaseChecksum\Tests;

use saeedkarimmi\DatabaseChecksum\Facades\DatabaseChecksum;
use saeedkarimmi\DatabaseChecksum\ServiceProvider;
use Orchestra\Testbench\TestCase;

class DatabaseChecksumTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'database-checksum' => DatabaseChecksum::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
