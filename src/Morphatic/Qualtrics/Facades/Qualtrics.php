<?php
/**
 * Qualtrics.php
 */

namespace Morphatic\Qualtrics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Qualtrics Facade class
 *
 * This class implements a facade that makes it easier to 
 * call Qualtrics API functions from within Laravel 4.
 */
class Qualtrics extends Facade {
	
	/**
	 * Returns the registered name of the package.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return 'qualtrics';
	}
	
}