jQuery(document).ready(function ($) {
	
	if(window.globalSponsorGallery){
		var options = {
			$AutoPlay: true,$AutoPlaySteps: 1,$AutoPlayInterval: 0,$PauseOnHover: 4,$ArrowKeyNavigation: true,$SlideEasing: $JssorEasing$.$EaseLinear,$SlideDuration: 3000,
			$MinDragOffsetToSlide: 20,$SlideWidth: 200,$SlideHeight: 56,$SlideSpacing: 0,$DisplayPieces: 6,$ParkingPosition: 0,$UISearchMode: 1,$PlayOrientation: 1,$DragOrientation: 1
		};

		var jssor_slider = new $JssorSlider$(window.globalSponsorGallery, options);

		function ScaleSlider() {
			var bodyWidth = document.body.clientWidth;
			if (bodyWidth)
				jssor_slider.$SetScaleWidth(Math.min(bodyWidth, 980));
			else
				window.setTimeout(ScaleSlider, 30);
		}

		ScaleSlider();

		if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
			$(window).bind('resize', ScaleSlider);
		}
	}
});