<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 6:27 PM
 * To change this template use File | Settings | File Templates.
 */
include_once __DIR__ . '/autoload.php';
if($_GET['request'] && $_GET['request'] != '/')
{
	$_GET['page'] = $_GET['request'];
}
else{
	$_GET['page'] = '/index.php';
}

function choosePage()
{
	switch($_GET['page']){
		
		default:
			$currentPage = str_replace('?', '', substr($_GET['page'], 1));
			$pageMap = array(
				'error.php'=>'PageError',
				'sectionphoto.php'=>'PageSectionPhoto',
				'index.php'=>'PageIndex'
			);
		
			$pageContents = isset($pageMap[$currentPage]) ? $pageMap[$currentPage] : 'PageError';
			/** @noinspection PhpIncludeInspection */
			include_once(str_replace('Page', __DIR__ . '/pages/controllers/', $pageContents) . '.php');
			$pageContents .= 'Controller';
			$pageContents = new $pageContents;
			/** @noinspection PhpUndefinedMethodInspection */
			$pageContents->Start();
	}
}
choosePage();