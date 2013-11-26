<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/29/13
 * Time: 4:45 PM
 * To change this template use File | Settings | File Templates.
 */
?>
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
	<link href="/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
	<script src="/jquery-1.7.2.min.js"></script>
	<script src="/fancybox/jquery.fancybox-1.3.4.min.js"></script>
	<script src="/jquery.easing.1.3.js"></script>
	<script src="/jquery.color.js"></script>
	<script type="text/javascript" src="/page.js" type="text/javascript"></script>
	<title><?php echo htmlspecialchars($this->pageTitle);?>معرض الصور</title>
</head>
<body>
	<div class="page">
		<div class="pageContent">
			<noscript>
				<p class="boxAlert">تنبيه: كثير من خدمات الموقع لن تعمل لديك! لأن الجافاسكربت لا تعمل في المتصفح الذي تستخدمه الآن. يرجى تفعيلها للحصول على كل خدمات الموقع.</p>
			</noscript>
			<?php include_once(str_replace('Page', __DIR__ .'/', str_replace('Controller', '', get_class($this))).'.tbl.php')?>
		</div>
	
	</div>
    <div id="Sidebar">
        <a><img src="images/123.png" id="1"></a>
        <a><img src="images/456.png" id="2"></a>
        <a id="feedbackLink" href="#feedbackForm"><img src="images/feedback(1).png" id="3"></a>
    </div>
    <div id="feedbackButton">
        <form action="" method="get" id="feedbackForm">
            الاسم:<br>
            <input type="text" name="name" placeholder="  الاسم" class="text"><br>
            البريد الإلكتروني:<br>
            <input type="text" name="mail" placeholder="  البريد الإلكتروني" class="text"><br>
            نص الرسالة:<br>
            <textarea placeholder="أكتب الرسالة"></textarea>
            <br>
            <input type="submit" value="إرسال" class="button">
        </form>
    </div>
</body>
</html>