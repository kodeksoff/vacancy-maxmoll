<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Config extends ModelCached
{
    use HasFactory;

    public static function getValue(string $key)
    {
        return Cache::tags('configs')->remember('config_' . $key, 360 * 60, function () use ($key) {
            return Config::where('key', $key)->firstOrFail()->value;
        });
    }
}
