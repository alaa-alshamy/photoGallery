<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 7:14 PM
 * To change this template use File | Settings | File Templates.
 */
abstract class PageController
{
	public $arrayImagesType = array(
									'.jpg',
									'.jpeg',
									'.gif',
									'.png',
								);

	public function Start()
	{
		$this->content();
		$this->OutPut();
	}
	
	public function content(){}
	
	public function End($url)
	{
		header('location : '. $url);
	}
	
	public function OutPut()
	{
		$this->Display();
	}

	public function Display()
	{
		header("Content-Type:text/html; charset=utf-8");
		include_once __DIR__ . '/../pages/templates/layout.tbl.php';
	}
}