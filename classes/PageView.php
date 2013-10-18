<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/29/13
 * Time: 4:43 PM
 * To change this template use File | Settings | File Templates.
 */

abstract class PageView 
{

	public function Display()
	{
		header("Content-Type:text/html; charset=utf-8");
		/** @noinspection PhpUnusedLocalVariableInspection */
		$var = $this;
		
		include_once __DIR__ . '/../pages/templates/layout.tbl.php';
	}
}