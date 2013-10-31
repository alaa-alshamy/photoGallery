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
		$(".slideNext").hover(
			function() {
				//mouse over
				$(this).css('background-image', 'url("images/sliderNext(1).png")')
			}, function() {
				//mouse out
				$(this).css('background-image', 'url("images/sliderNext.png")')
			});
		$(".slidePrevious").hover(
			function() {
				//mouse over
				$(this).css('background-image', 'url("images/sliderPrevious(1).png")')
			}, function() {
				//mouse out
				$(this).css('background-image', 'url("images/sliderPrevious.png")')
			});
	});//end ready
</script>
<div class="banner">
	<div class="slideBanner" style="width: <?php echo (count($var->arrayBannerPhotoName)*971);?>px">
		<?php
			foreach($var->arrayBannerPhotoName as $photoName)
			{
				?><img src="/images/imagesBanner/<?php echo $photoName;?>" alt="<?php echo strstr($photoName, '.', true);?>"><?php
			}
		?>
	</div>
	<div class="slidePrevious" style="display: none;">السابقة</div>
	<div class="slideNext">التالية</div>
</div>
<div class="indexSearch">
	<div class="blockHead">
		<span>إبحث عن صورة:</span>
	</div>
	<div class="blockBody">
		<form class="right" style="padding: 40px 40px;">
			<label for="picName">اسم الصورة: </label><input name="picName" id="picName">
		</form>
		<img class="left" src="/images/search(3).png">
		<div class="clear"></div>
	</div>
</div>
<div class="sections">
    <div class="blockHead">
        <span>أقسام معرض الصور:</span>
    </div>
    <div class="blockBody">
		<table>
			<tr>
				<td>
					<div class="section">
						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">
						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="section">
						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">
						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
				<td>
					<div class="section">

						<a><img src="/images/imagesSections/search(4).png"></a>
					</div>
				</td>
			</tr>
		</table>
    </div>
</div>