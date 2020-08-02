/**
 * File parallax-scroll.js.
 *
 * Handles hiding frame 2's parallaxed image before it can reappear lower. (strange bug)
 */
document.getElementsByClassName("site")[0].addEventListener(
	"scroll",
	function() {
		var frame2Location = document.getElementsByClassName('home-frame-2')[0].getBoundingClientRect();
		if (frame2Location.bottom < 0 || frame2Location.top > window.innerHeight) {
			/* if the bottom of frame 2 is out of the window, hide the image */
			document.getElementsByClassName("frame-2-parallax-layer-back")[0].style.visibility = 'hidden';
		} else {
			document.getElementsByClassName("frame-2-parallax-layer-back")[0].style.visibility = 'visible';
		}
	},
	false
);
