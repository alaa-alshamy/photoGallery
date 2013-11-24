<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anas
 * Date: 10/23/13
 * Time: 5:55 PM
 * To change this template use File | Settings | File Templates.
 */

class PageSectionPhotoController extends PageController
{
	public $arrayImagesName;
	public $sectionFound;
	public $nameSectionPhoto;

	public function content()
	{
		$this->getImagesNames();
		$this->setPageTitle(strstr(str_replace('-', '', strstr($this->nameSectionPhoto, '-')), '.', true) . ' :: ');
	}

	public function getImagesNames()
	{
		if($this->checkSectionFound())
		{
			if ($handle = opendir(__DIR__ . '/../../../www/images/imagesData'))
			{
				while (false !== ($entry = readdir($handle)))
				{
					if(preg_match('~\.\w~', $entry) && strstr($entry, '-', true) == $_GET['sid'])
					{
						$this->arrayImagesName[] = $entry;
					}
				}
				closedir($handle);
			}
		}
	}

	public function checkSectionFound()
	{
		if(isset($_GET['sid']) && $_GET['sid'])
		{
			if ($handle = opendir(__DIR__ . '/../../../www/images/imagesSections'))
			{
				while (false !== ($entry = readdir($handle)))
				{
					if(preg_match('~\.\w~', $entry) && strstr($entry, '-', true) == $_GET['sid'])
					{
						$this->nameSectionPhoto = $entry;
						return $this->sectionFound = true;
					}
				}
				closedir($handle);
			}
		}
		return $this->sectionFound = false;
	}
}