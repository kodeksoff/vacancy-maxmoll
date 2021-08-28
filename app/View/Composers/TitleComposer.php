<?php

namespace App\View\Composers;
use App\Models\Config;
use Illuminate\View\View;

class TitleComposer
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('title', $this->config::getValue('title'));
    }
}
