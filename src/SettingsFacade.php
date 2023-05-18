<?php

namespace zahidhassanshaikot\Settings;

use Illuminate\Support\Facades\Cache;
use zahidhassanshaikot\Settings\Models\Settings;

class SettingsFacade
{
    public function all()
    {
        $is_cache = config('settings.cache.enabled') ?? true;

        if ($is_cache) {
            return Cache::rememberForever('settings', function () {
                return Settings::get();
            });
        } else {
            return Settings::get();
        }
    }

    public function updateOrCreate($key = '', $value = '')
    {
        Settings::updateOrCreate([
            'key' => $key,
        ], [
            'value' => $value,
        ]);

        $this->removeSettingCache();

        return true;
    }

    public function get($key = '')
    {
        $settings = self::all()->where('key', $key)
            ->first();

        return $settings ? $settings->value : null;
    }

    public function delete($key = '')
    {
        Settings::where('key', $key)
            ->delete();

        $this->removeSettingCache();

        return true;
    }

    public static function removeSettingCache()
    {
        $is_cache = config('settings.cache.enabled') ?? true;

        if ($is_cache) {
            if (Cache::has('settings')) {
                Cache::forget('settings');
            } else {
                self::all();
            }
        }
    }
}
