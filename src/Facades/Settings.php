<?php

namespace zahidhassanshaikot\Settings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zahidhassanshaikot\Settings\SettingsFacade
 */
class Settings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \zahidhassanshaikot\Settings\SettingsFacade::class;
    }
}
