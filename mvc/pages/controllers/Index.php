<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 7:09 PM
 * To change this template use File | Settings | File Templates.
 */

class PageIndexController extends PageController
{
	public $arrayBannerPhotoName;
	public $arraySectionsPhotoName;
	public $arraySectionsId;
	
	public function content()
	{
		$this->getNameBannerPhoto();
		$this->getSections();
	}
	
	public function getSections()
	{
		if ($handle = opendir(__DIR__ . '/../../../www/images/imagesSections'))
		{
			while (false !== ($entry = readdir($handle)))
			{
				if($entry != '.' && $entry != '..')
				{
					$this->arraySectionsPhotoName[] = $entry;
					$this->arraySectionsId[] = strstr($entry, '-', true);
				}
			}
			closedir($handle);
		}
	}
	
	public function getNameBannerPhoto()
	{
		if ($handle = opendir(__DIR__ . '/../../../www/images/imagesBanner')) 
		{
			while (false !== ($entry = readdir($handle))) 
			{
				if($entry != '.' && $entry != '..')
				{
					$this->arrayBannerPhotoName[] = $entry;
				}
			}
			closedir($handle);
		}
	}
}