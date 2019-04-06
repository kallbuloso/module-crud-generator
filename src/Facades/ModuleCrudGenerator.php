<?php

namespace kallbuloso\ModuleCrudGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class ModuleCrudGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'modulecrudgenerator';
    }
}
