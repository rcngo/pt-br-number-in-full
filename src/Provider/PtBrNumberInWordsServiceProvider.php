<?php

namespace rcngo\PtBrNumberInWords\Provider;

use Illuminate\Support\ServiceProvider;
use rcngo\PtBrNumberInWords\PtBrNumberInWords;

/**
 * Class CpfCnpjServiceProvider
 * @package rcngo\CpfCnpj\Provider
 */
class PtBrNumberInWordsServiceProvider extends ServiceProvider
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
        $this->app->singleton('NumberInWords', function () {
            return $this->app->make(PtBrNumberInWords::class);
        });
    }
}
