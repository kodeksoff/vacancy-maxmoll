<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Block extends ModelCached
{
    use HasFactory;

    protected $casts = [
        'data' => 'array'
    ];

    public static function getByKey($key)
    {
        return Cache::tags('blocks')->remember('block_' . $key, 360 * 60, function () use ($key) {
            return Block::where('key', $key)->firstOrFail()->data;
        });
    }
}
