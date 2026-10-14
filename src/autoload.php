<?php

use Carbure\lib\Config;

/**
 * autoload.php
 *
 * Carbure autoload file
 *
 * @author     Ludovic Toinel
 * @copyright  2026 Carbure App
 */

require_once preg_replace("/src/", "vendor/autoload.php", __DIR__);

Config::load(getenv('APP_ENV') ?: 'prod');
