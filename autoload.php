<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 7:17 PM
 * To change this template use File | Settings | File Templates.
 */

spl_autoload_register(function ($class) {
	$path = __DIR__ . '/pages/classes/' . $class . '.php';
	if(file_exists($path))
	{
		/** @noinspection PhpIncludeInspection */
		require_once $path;
	}
});