<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alaa
 * Date: 9/28/13
 * Time: 7:09 PM
 * To change this template use File | Settings | File Templates.
 */
?>
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
	<div class="slideBanner" style="width: <?php echo (count($this->arrayBannerPhotoName)*971);?>px">
		<?php
			foreach($this->arrayBannerPhotoName as $photoName)
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
			<label for="searchImage">اسم الصورة: </label><input name="searchImage" id="searchImage">
		</form>
		<img class="searchImage left" src="/images/search(3).png">
		<div class="clear"></div>
	</div>
</div>
<div class="sections">
    <div class="blockHead">
        <span>أقسام معرض الصور:</span>
    </div>
    <div class="blockBody">
	    <?php
			foreach($this->arraySectionsPhotoName as $sectionPhotoName)
			{?>
	            <a href="/sectionphoto.php?sid=<?php echo strstr($sectionPhotoName, '-', true);?>">
					<div class="section">
						<img class="sectionImage" src="/images/imagesSections/<?php echo $sectionPhotoName;?>" alt="<?php echo strstr(str_replace('-', '', strstr($sectionPhotoName, '-')), '.', true);?>">
					</div>
				</a><?php
			}
	    ?>
	    <div class="clear"></div>
    </div>
</div>