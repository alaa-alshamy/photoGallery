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
	public $pageTitle;
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
	
	public function checkRequest()
	{
		if(strpos($_SERVER['REQUEST_URI'], '/adm/') !== false && (!isset($_COOKIE['admPhoGall']) || $_COOKIE['admPhoGall']))
		{
			$this->End('');
		}
	}
	public function content(){}
	
	public function End($url)
	{
		header('location : '. $url);
		exit();
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
	
	public function setPageTitle($pageTitle)
	{
		$this->pageTitle = $pageTitle;
	}
}