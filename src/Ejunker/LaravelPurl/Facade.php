<?php namespace Ejunker\LaravelPurl;

class Facade extends \Illuminate\Support\Facades\Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() {
        return 'purl';
    }

}
