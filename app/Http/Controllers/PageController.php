<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function config($value)
    {
        return Config::getValue($value);
    }
}
