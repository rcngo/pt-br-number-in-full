<?php

namespace rcngo\PtBrNumberInWords\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class CpfCnpj
 * @package rcngo\CpfCnpj\Facade
 */
class PtBrNumberInWords extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'NumberInWords';
    }
}
