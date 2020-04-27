// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		document.getElementById('navbar').style.height = '4rem';
		//document.getElementById('logo').style.maxWidth = '100px';
	} else {
		document.getElementById('navbar').style.height = '6rem';
		//document.getElementById('logo').style.maxWidth = '150px';
	}
}
