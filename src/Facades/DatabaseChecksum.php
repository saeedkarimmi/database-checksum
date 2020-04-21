<?php

namespace saeedkarimmi\DatabaseChecksum\Facades;

use Illuminate\Support\Facades\Facade;

class DatabaseChecksum extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'database-checksum';
    }
}
