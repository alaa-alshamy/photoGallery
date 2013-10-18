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
	/**
	 * @var PageView
	 */
	public $view;
	public function Start()
	{
		$this->content();
		$this->createView();
		$this->OutPut();
	}
	
	public function content(){}
	
	public function End($url)
	{
		header('location : '. $url);
	}
	
	public function createView()
	{
		$view = str_replace('Controller', 'View', get_class($this));
		$this->view = new $view;
	}
	
	public function OutPut()
	{
		$this->view->Display();
	}
}