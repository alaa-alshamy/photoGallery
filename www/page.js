$(document).ready(function(){
$('#Sidebar').hover(
	function() {
		$(this).stop().animate(
			{
				left: '-15px',
				backgroundColor: 'Transparent'
			},
			500,
			'easeInSine'
		); // end animate
	},
	function() {
		$(this).stop().animate(
			{
				left: '-65px',
				backgroundColor: 'rgb(0,0,0) '
			},
			1500,
			'easeOutBounce'
		); // end animate
	}
); // end hover
$("#1").hover(
	function() {
		//mouse over
		$(this).attr('src', "images/321.png")
	}, function() {
		//mouse out
		$(this).attr('src', "images/123.png")
	});
$("#2").hover(
	function() {
		//mouse over
		$(this).attr('src', "images/654.png")
	}, function() {
		//mouse out
		$(this).attr('src', "images/456.png")
	});
$("#3").hover(
	function() {
		//mouse over
		$(this).attr('src', "images/feedback(2).png")
	}, function() {
		//mouse out
		$(this).attr('src', "images/feedback(1).png")
	});
	$('#feedbackButton').hide();
	$('#feedbackLink').fancybox({
	});
});//end ready
