<?php

namespace App\Observers;

use App\Models\ModelCached;
use Illuminate\Support\Facades\Cache;

class CacheObserver
{
    /**
     * Handle the ModelCached "created" event.
     *
     * @param  \App\Models\ModelCached  $modelCached
     * @return void
     */
    public function created(ModelCached $modelCached)
    {
        $this->clearCache($modelCached->getTable());
    }

    /**
     * Handle the ModelCached "updated" event.
     *
     * @param  \App\Models\ModelCached  $modelCached
     * @return void
     */
    public function updated(ModelCached $modelCached)
    {
        $this->clearCache($modelCached->getTable());
    }

    /**
     * Handle the ModelCached "deleted" event.
     *
     * @param  \App\Models\ModelCached  $modelCached
     * @return void
     */
    public function deleted(ModelCached $modelCached)
    {
        $this->clearCache($modelCached->getTable());
    }

    /**
     * Handle the ModelCached "restored" event.
     *
     * @param  \App\Models\ModelCached  $modelCached
     * @return void
     */
    public function restored(ModelCached $modelCached)
    {
        $this->clearCache($modelCached->getTable());
    }

    /**
     * Handle the ModelCached "force deleted" event.
     *
     * @param  \App\Models\ModelCached  $modelCached
     * @return void
     */
    public function forceDeleted(ModelCached $modelCached)
    {
        $this->clearCache($modelCached->getTable());
    }

    private function clearCache($table){
        Cache::tags($table)->flush();
    }
}
