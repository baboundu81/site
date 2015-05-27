$(document).ready( function () {
	var $vid = $('#bgvid');
	var $logo = $('#base-logo');
	var $img = $('#img-logo');

	$vid.bind('timeupdate', function () {
		if (this.currentTime > 15.5) {
			$vid.unbind('timeupdate');
			$img.trigger('logo');
		}
	});

	$img.bind('logo', function () {
		$img.css({
				opacity: 0.0,
				visibility: "visible"
			}).animate({opacity:1.0}, 1000);
	});
});
