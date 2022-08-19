<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    public $timestamps = false;

    public static function chargeConfig()
    {
        $settings = Cache::get('settings', []);
        if ($settings instanceof Collection) {
            collect($settings)
                ->each(fn ($setting) => app('config')->set(['settings.' . $setting->key => $setting->value]));
        }
        return $settings;
    }

    public static function refreshCache()
    {
        Cache::forget('settings');
        Cache::rememberForever('settings', fn() => static::query()->get()->toBase());

        return self::chargeConfig();
    }
}
