<?php

/**
 * Sabre_HTTP includes file
 *
 * Including this file will automatically include all files from the Sabre_HTTP
 * package.
 *
 * This often allows faster loadtimes, as autoload-speed is often quite slow.
 *
 * @package Sabre
 * @subpackage HTTP
 * @copyright Copyright (C) 2007-2014 fruux GmbH (https://fruux.com/).
 * @author Evert Pot (http://evertpot.com/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */

// Begin includes
include __DIR__ . '/AbstractAuth.php';
include __DIR__ . '/AWSAuth.php';
include __DIR__ . '/BasicAuth.php';
include __DIR__ . '/DigestAuth.php';
include __DIR__ . '/Request.php';
include __DIR__ . '/Response.php';
include __DIR__ . '/Util.php';
include __DIR__ . '/Version.php';
// End includes
