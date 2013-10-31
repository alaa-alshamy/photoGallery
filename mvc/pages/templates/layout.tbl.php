<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/29/13
 * Time: 4:45 PM
 * To change this template use File | Settings | File Templates.
 */
/** @var $var */?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?/////////////////////////////////////   head   ////////////////////////////////////?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta name="author" content="Engr. Alaa AlShamey">
	<meta name="description" content="تصاميم , صور , بانرات">
	<meta name="keywords" content="تصاميم , صور , بانرات">
	<link rel="stylesheet" type="text/css" href="/page.css" media="all">
	<script src="/jquery-1.7.2.min.js"></script>
	<script src="/jquery.easing.1.3.js"></script>
	<script src="/jquery.color.js"></script>
	<script type="text/javascript" src="/page.js" type="text/javascript"></script>
	<title><?=$var->pageTitle?></title>
</head>
<body>
<div class="page">
	<div class="pageContent">
		<noscript>
			<p class="boxAlert">تنبيه: كثير من خدمات الموقع لن تعمل لديك! لأن الجافاسكربت لا تعمل في المتصفح الذي تستخدمه الآن. يرجى تفعيلها للحصول على كل خدمات الموقع.</p>
		</noscript>
		<?php include_once(str_replace('Page', __DIR__ .'/', str_replace('Controller', '', get_class($var))).'.tbl.php')?>
	</div>

</div>
<div id="Sidebar">
	<img src="images/123.png" id="1">
	<img src="images/456.png" id="2">
	<img src="images/feedback(1).png" id="3">
</div>
</body>
</html>