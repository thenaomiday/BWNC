/**
 * File navigation-scroll.js.
 *
 * Handles changing the navigation background on window scroll.
 */
window.addEventListener(
	"scroll",
	function() {
		if (window.scrollY > (window.innerHeight / 10)) {
			document.getElementsByClassName("site-header")[0].classList.add("site-header-scrolled-down");
			document.getElementsByClassName("site-header")[0].classList.remove("site-header-scrolled-up");
		} else {
			document.getElementsByClassName("site-header")[0].classList.add("site-header-scrolled-up");
			document.getElementsByClassName("site-header")[0].classList.remove("site-header-scrolled-down");
		}
	},
	false
);
