/**
 * File navigation-scroll.js.
 *
 * Handles changing the navigation background on window scroll.
 */
document.getElementsByClassName("site")[0].addEventListener(
	"scroll",
	function() {
		// if (window.scrollY > (window.innerHeight / 10)) {
		// 	document.getElementsByClassName("site-header")[0].classList.add("site-header-scrolled-down");
		// 	document.getElementsByClassName("site-header")[0].classList.remove("site-header-scrolled-up");
		// 	document.getElementsByClassName("header-logo")[0].src = "http://naomid5.sg-host.com/wp-content/uploads/2020/07/BWNC-FINAL-LOGO-white-W-TEXT-01.png";
		// } else {
		// 	document.getElementsByClassName("site-header")[0].classList.add("site-header-scrolled-up");
		// 	document.getElementsByClassName("site-header")[0].classList.remove("site-header-scrolled-down");
		// 	document.getElementsByClassName("header-logo")[0].src = "http://naomid5.sg-host.com/wp-content/uploads/2020/07/BWNC-FINAL-LOGO-black-W-TEXT-01.png";
		// }
	},
	false
);
