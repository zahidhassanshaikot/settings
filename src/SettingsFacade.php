<?php

namespace zahidhassanshaikot\Settings;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use zahidhassanshaikot\Settings\Models\Settings;

class SettingsFacade
{
    public static function all(): object
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

    public function updateOrCreate($key = '', $value = ''): bool
    {
        try {
            DB::beginTransaction();

            if (empty($key) | empty($value)) {
                DB::rollBack();

                return false;
            }

            Settings::updateOrCreate([
                'key' => $key,
            ], [
                'value' => $value,
            ]);

            $this->removeSettingCache();

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }
    }

    public function updateOrCreateMultiple(array $settings = []): bool
    {
        try {
            DB::beginTransaction();

            if (! is_array($settings) | empty($settings) | ! count($settings)) {
                return false;
            }

            foreach ($settings as $key => $value) {
                Settings::updateOrCreate([
                    'key' => $key,
                ], [
                    'value' => $value,
                ]);
            }

            $this->removeSettingCache();

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }
    }

    public function get($key = ''): string|object|bool|null
    {
        $settings = self::all()->where('key', $key)
            ->first();

        return $settings ? $settings->value : null;
    }

    public function delete($key = ''): bool
    {
        Settings::where('key', $key)
            ->delete();

        $this->removeSettingCache();

        return true;
    }

    public static function removeSettingCache(): void
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
