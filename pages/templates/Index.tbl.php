<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 7:09 PM
 * To change this template use File | Settings | File Templates.
 */
/** @var $var */?>
<script>
	$(document).ready(function(){
		var countSlide = $('.slideBanner > img').length -1;
		var onProgress = false;
		var slideTime = 1500;
		var fadeDuration = 1500;

        function nextPreviousFadeInOut()
        {
	        if((($('.slideBanner > img').length -1) == countSlide))
	        {
		        $('.slidePrevious').fadeOut(fadeDuration);
		        $('.slideNext').fadeIn(fadeDuration);
	        }
	        else if(countSlide == 0)
	        {
		        $('.slideNext').fadeOut(fadeDuration);
		        $('.slidePrevious').fadeIn(fadeDuration);
	        }
	        else{
		        $('.slideNext').fadeIn(fadeDuration);
		        $('.slidePrevious').fadeIn(fadeDuration);
	        }
        }

		var animateBanner = setInterval(function(){
			if(countSlide)
			{
				countSlide--;
				onProgress = true;
				$('.slideBanner').animate({right : (parseInt($('.slideBanner').css('right')) - 971) + 'px'}, slideTime, 'easeOutBounce', function(){onProgress = false;});
				nextPreviousFadeInOut();
			}
			else{
				countSlide = $('.slideBanner > img').length -1;
				onProgress = true;
				$('.slideBanner').animate({right : 0}, 500, 'swing', function(){onProgress = false;});
				nextPreviousFadeInOut();
			}
		}, 5000);
		
		$('.slidePrevious').click(function(){
			clearInterval(animateBanner);
			if((($('.slideBanner > img').length -1) != countSlide) && !onProgress)
			{
				countSlide++;
				onProgress = true;
				$('.slideBanner').animate({right : (parseInt($('.slideBanner').css('right')) + 971) + 'px'}, slideTime, 'easeOutBounce', function(){onProgress = false;});
			}
			nextPreviousFadeInOut();
		});

		$('.slideNext').click(function(){
			clearInterval(animateBanner);
			if(countSlide && !onProgress)
			{
				countSlide--;
				onProgress = true;
				$('.slideBanner').animate({right : (parseInt($('.slideBanner').css('right')) - 971) + 'px'}, slideTime, 'easeOutBounce', function(){onProgress = false;});
			}
			nextPreviousFadeInOut();
		});
	});
</script>
<div class="banner">
	<div class="slideBanner" style="width: 5826px">
		<img src="../../images/Alaa_AlShamey.jpg" alt="Alaa Al Shamey">
		<img src="../../images/Alaa.jpg" alt="Alaa Al Shamey">
		<img src="../../images/Alaa_AlShamey.jpg" alt="Alaa Al Shamey">
		<img src="../../images/Alaa.jpg" alt="Alaa Al Shamey">
		<img src="../../images/Alaa_AlShamey.jpg" alt="Alaa Al Shamey">
		<img src="../../images/Alaa.jpg" alt="Alaa Al Shamey">
	</div>
	<div class="slidePrevious" style="display: none;">السابقة</div>
	<div class="slideNext">التالية</div>
</div>
<div class="indexSearch">
	<form>
		<label for="picName">اسم الصورة: </label><input name="picName" id="picName">
	</form>
    <img src="../../images/search.jpg">
</div>