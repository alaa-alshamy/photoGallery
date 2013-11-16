<?php
/**
 * Created by JetBrains PhpStorm.
 * User: anas
 * Date: 10/23/13
 * Time: 5:12 PM
 * To change this template use File | Settings | File Templates.
 */
if($this->sectionFound){
	if(count($this->arrayImagesName)){?>
<script>
	$(document).ready(function(){
		/*$('.smallPhoto').click(function(evt){
			evt.preventDefault();
			var oldImage = $('.bigPhoto > img');
			var imgPath = $(this).children().attr('src');
			var newImage = $('<img src="' + imgPath + '">');
			newImage.hide();
			$('.bigPhoto').prepend(newImage);
			newImage.fadeIn(1000);
			oldImage.fadeOut(1000, function(){
				$(this).remove();
			});
		});*/
		$('.smallPhoto').click(function(evt) {
			//get path to new image
			var imgPath = $(this).children().attr('src');
			//get reference to old image#photo
			var oldImage = $('.bigPhoto > img');

			//create HTML for new image
			var newImage = $('<img src="' + imgPath +'">');
			//make new image invisible
			newImage.hide();
			//add to the #photo div
			$('.bigPhoto').prepend(newImage);
			//fade in new image
			newImage.fadeIn(1000);

			//fade out old image and remove from DOM
			oldImage.fadeOut(1000,function(){
				$(this).remove();
			});
		});
		$('.smallPhoto:first').click();
	});
</script>
<div class="smallPhotoBar">
	<table>
		<tr>
			<?php
				foreach($this->arrayImagesName as $imageName)
				{?>
					<td>
						<div class="smallPhoto">
							<img src="/images/imagesData/<?php echo $imageName;?>" alt="<?php echo strstr(str_replace('-', '', strstr($imageName, '-')), '.', true);?>">
						</div>
					</td>
				<?php }
			?>
		</tr>
	</table>
</div>
<div class="currentPhoto">
	<div class="bigPhoto"></div>
</div>
<?php
	}else{?>
		<div class="note">عفوا لا يوجد صور متاحة في هذا القسم.</div><?php
	}
}else{?>
	<div class="error">عفوا إما لم يتم تحديد قسم أو ان القسم المطلوب غير موجود.</div><?php
}