<?php namespace Media24si\ESWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class ESWrapper extends Facade {

	protected static function getFacadeAccessor() { return 'elastic'; }

}