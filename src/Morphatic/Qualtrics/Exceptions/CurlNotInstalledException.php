<?php
/**
 * CurlNotInstalledException.php
 */

namespace Morphatic\Qualtrics\Exceptions;

/**
 * CurlNotInstalledException class
 *
 * This exception is thrown when the curl module has not been 
 * installed and/or enabled within php.
 */
class CurlNotInstalledException extends \UnexpectedValueException {}