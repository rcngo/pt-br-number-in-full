<?php

namespace rcngo\PtBrNumberInFull\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class CpfCnpj
 * @package rcngo\CpfCnpj\Facade
 */
class PtBrNumberInFull extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'NumberInFull';
    }
}
