<?php 

namespace Skinfo\Fileupload\Facades;

use Illuminate\Support\Facades\Facade;

class Fileupload extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fu';
    }
}