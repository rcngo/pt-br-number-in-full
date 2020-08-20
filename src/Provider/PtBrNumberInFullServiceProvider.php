<?php

namespace rcngo\PtBrNumberInFull\Provider;

use Illuminate\Support\ServiceProvider;
use rcngo\PtBrNumberInFull\PtBrNumberInFull;

/**
 * Class CpfCnpjServiceProvider
 * @package rcngo\CpfCnpj\Provider
 */
class PtBrNumberInFullServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = false;

    /**
     *
     */
    public function register()
    {
        $this->app->singleton('NumberInFull', function () {
            return $this->app->make(PtBrNumberInFull::class);
        });
    }

    /**
     *
     */
    public function boot()
    {

    }
}
