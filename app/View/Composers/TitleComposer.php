<?php

namespace App\View\Composers;
use App\Models\Config;
use Illuminate\View\View;

class TitleComposer
{
    protected $config;


    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function compose(View $view)
    {
        $view->with('title', $this->config::getValue('title')->value);
    }
}
