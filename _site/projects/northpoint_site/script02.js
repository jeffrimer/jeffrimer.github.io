// JavaScript Document

window.onload = choosePic;

var myImages = new Array("images/image1.jpg", "images/image2.jpg", "images/image3.jpg", "images/image4.jpg", "images/image5.jpg");
var thisAd = 0;

function choosePic() {
	thisAd = Math.floor(Math.random() * myImages.length);
	document.getElementById("adBanner").src = myImages[thisAd];
	
	rotate();
}

function rotate() {
	thisAd++;
	if(thisAd == myImages.length) {
		thisAd = 0;
	}
	document.getElementById("adBanner").src = myImages[thisAd];
	
	setTimeout(rotate, 3*1000);
}