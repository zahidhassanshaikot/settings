<?php

namespace zahidhassanshaikot\Settings;

use zahidhassanshaikot\Settings\Models\Settings;

class SettingsFacade
{
    public function updateOrCreate($key = '', $value = '')
    {
        Settings::updateOrCreate([
            'key' => $key,
        ], [
            'value' => $value,
        ]);

        return true;
    }

    public function get($key = '')
    {
        $settings = Settings::where('key', $key)
            ->first();

        return $settings ? $settings->value : null;
    }

    public function delete($key = '')
    {
        $settings = Settings::where('key', $key)
            ->delete();

        return true;
    }

    public function all()
    {
        $settings = Settings::get();

        return $settings;
    }
}
