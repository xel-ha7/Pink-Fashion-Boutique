/*
mediaboxAdvanced v2.0.7 - The ultimate extension of Slimbox and Mediabox; an all-media script
jQuery script from Cédric KEIFLIN - http://www.joomlack.fr - http://www.template-creator.com

Original Mootools script from
	(c) 2007-2011 John Einselen - http://iaian7.com
based on Slimbox v1.64 - The ultimate lightweight Lightbox clone
	(c) 2007-2008 Christophe Beyls - http://www.digitalia.be

license: MIT-style

authors:
- John Einselen
- Christophe Beyls
- Contributions from many others
- Cédric KEIFLIN

provides: [Mediabox.open, Mediabox.close, Mediabox.recenter, Mediabox.scanPage]

modification by ced1870 - Cédric KEIFLIN
version 2.2.1 - 10/12/20 :
- add controls size option
- do not hide arrows if we are in gallery mode. Just make them disabled

version 2.2.1 - 16/09/20 :
- add fadeout option

version 2.2.0 - 11/05/20 :
- add zoom feature
- remove from jQuery instance

version 2.1.9 - 14/01/19 :
- add fullscreen option on Vimeo

version 2.1.8 - 12/12/18 :
- fix issue with Vimeo

version 2.1.7 - 27/09/18 :
- add option for autoload

version 2.1.6 - 29/11/17 :
- fix issue with media called with http

version 2.1.5 - 26/07/17 :
- change attr('mediaboxck_done') to data('mediaboxck_done')

version 2.1.4 - 07/10/16 :
- fix an issue with vimeo

version 2.1.3 - 11/06/16 :
- fix an issue with diapo autoplay

version 2.1.2 - 31/05/16 :
- fix an issue with mediaType not changing between items

version 2.1.1 - 30/05/16 :
- add IE compatibility for gallery mode to fix image distortion

version 2.1.0 - 28/04/16 :
- add management for touch behavior, zoom with pinch
- force the mobile behavior on tablets also

version 2.0.7 - 23/01/16 :
- fix issue with mp4 on iPad

version 2.0.6 - 04/11/15 :
- add HTML5 player for video and audio for local files
- fix a resize issue on page load
- add loop option for the video

version 2.0.5 - 08/10/15 :
- remove title on links to avoid the system tooltip to be shown on mouseover
- add toolbar option
- add autoplay/diaporama features

version 2.0.4 - 17/07/15 :
- use html5 for dailymotion
- fix issue with keyboard navigation

version 2.0.3 - 02/06/15 :
- added support for mobile device with touch behavior

version 2.0.2 - 29/05/15 :
- improved the mobile and responsive behavior

version 2.0.1 - 07/04/15 :
- fix an issue with Dailymotion

version 2.0.0 - 23/03/15 :
- migrated to jQuery by ced1870
version 1.5.4a :
- fix an issue for IE11 margin left line 217+218
*/

var Mediabox;

(function($) {

	// browser detection
	if ($.browser == undefined) {
		var userAgent = navigator.userAgent.toLowerCase();
		$.browser = {
		   version: (userAgent.match( /.+(?:rv|it|ra|ie|me)[/: ]([d.]+)/ ) || [])[1],
		   chrome: /chrome/.test( userAgent ),
		   safari: /webkit/.test( userAgent ) && !/chrome/.test( userAgent ),
		   opera: /opera/.test( userAgent ),
		   msie: /msie/.test( userAgent ) && !/opera/.test( userAgent ),
		   ios: /(iPod|iPhone|iPad)/.test( userAgent ),
		   mozilla: /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent )
		};
	}
	// Global variables, accessible to Mediabox only
	var options, mediaArray, activeMedia, prevMedia, nextMedia, top, mTop, left, mLeft, winWidth, winHeight, fx, preload, preloadPrev = new Image(), preloadNext = new Image(),
	// DOM elements
	overlay, center, media, bottom, captionSplit, title, caption, number, prevLink, nextLink, pauseLink, playLink, zoomBarMinus, zoomBarPlus, zoomBarValue, zoomBar,
	// added by ced1870
	mediaInitW, mediaInitH, toolbar, pieLoader, pieLoaderBar, t, loader, rad, setT,
	// Mediabox specific vars
	URL, WH, WHL, elrel, mediaWidth, mediaHeight, mediaType = "none", mediaSplit, mediaId = "mediaBox", margin, marginBottom;

	/*	Initialization	*/

	jQuery(document).ready(function(){
		// Create and append the Mediabox HTML code at the bottom of the document
		overlay = $('<div id="mbOverlay" />').css("display", "none").click(close);
		center = $('<div id="mbCenter" />').css("display", "none");
		toolbar = $('<div id="mbToolbar" />').css("display", "none");
		$(document.body).append(
			overlay, center
		);

		center.append($('<div id="mbContainer" />'));
		container = $('#mbContainer');
		container.append($('<div id="mbMedia" />'));
		media = $('#mbMedia');
		center.append(bottom = $('<div id="mbBottom">'));
		closeLink = $('<a id="mbCloseLink" href="#" />').click(close);
		nextLink = $('<a id="mbNextLink" href="#" />').click(next);
		prevLink = $('<a id="mbPrevLink" href="#" />').click(previous);
		playLink = $('<a id="mbPlayLink" href="#" />').click(play);
		pauseLink = $('<a id="mbPauseLink" href="#" />').click(pause);
		zoomBar = $('<span id="mbZoomBar"></span>');
		title = $('<div id="mbTitle" />');
		number = $('<div id="mbNumber" />');
		caption = $('<div id="mbCaption" />');
		pieLoader = $('<div id="mbPieLoader" />');
		pieLoaderBar = $('<div id="mbPieLoaderBar" />');
		pieLoader.append(pieLoaderBar);

		// compatibility for IE in the gallery mode
		var isIE = /*@cc_on!@*/false || !!document.documentMode;
		if (isIE) launchMediaboxckIeCompat();
	});

	function launchMediaboxckIeCompat() {
		var figures = $('figure.mediaboxck');

		for (i=0; i<figures.length; i++) {
		$(figures[i]).addClass('mediaboxckie');
		var image = $(figures[i]).find('img');
		image.wrap('<div class="iefake"></div>');
			var fake = figures[i].children[0];
			image.css('opacity', '0');
			$(fake).css('backgroundImage', "url('" + image.attr('src') + "')");
		}
	}

	/*	API		*/

	Mediabox = {
		close: function(){
			close();	// Thanks to Yosha on the google group for fixing the close function API!
		},

		recenter: function(){	// Thanks to Garo Hussenjian (Xapnet Productions http://www.xapnet.com) for suggesting this addition
			if (center) {
				// fix by ced1870
				left = '50%';
				center.css({left: left, marginLeft: -(mediaWidth/2)-margin});
			}
		},

		open: function(_mediaArray, startMedia, _options) {
			options = {
//			Text options (translate as needed)
				// example of html characters : &#9724; &#10073;&#10073; &#10074;&#10074; &#9658; &#9899; &#9194; &#9193; <big>&laquo;</big>','<big>&raquo;</big>','<big>&times;</big>', '<big>&#9658;</big>'
				// buttonText: ['<big>&#9194;</big>','<big>&#9193;</big>','<big>&times;</big>', '<big>&#9658;</big>', '<big>&#10073;&#10073;</big>'],		// Array defines "previous", "next", and "close" button content (HTML code should be written as entity codes or properly escaped)
				buttonText: ['<big>&laquo;</big>','<big>&raquo;</big>','<big>&times;</big>', '<big>&#9658;</big>', '<big>&#10073;&#10073;</big>'],		// Array defines "previous", "next", and "close" button content (HTML code should be written as entity codes or properly escaped)
//				buttonText: ['<big>«</big>','<big>»</big>','<big>×</big>'],
//				buttonText: ['<b>P</b>rev','<b>N</b>ext','<b>C</b>lose'],
				counterText: '({x} of {y})',	// Counter text, {x} = current item number, {y} = total gallery length
				linkText: '<a href="{x}" target="_new">{x}</a><br/>open in a new tab</div>',	// Text shown on iOS devices for non-image links
				flashText: '<b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.',	// Text shown if Flash is not installed.
//			General overlay options
				center: false,					// Set to false for use with custom CSS layouts
				loop: false,					// Navigate from last to first elements in a gallery
				keyboard: true,					// Enables keyboard control; escape key, left arrow, and right arrow
				keyboardAlpha: false,			// Adds 'x', 'c', 'p', and 'n' when keyboard control is also set to true
				keyboardStop: false,			// Stops all default keyboard actions while overlay is open (such as up/down arrows)
												// Does not apply to iFrame content, does not affect mouse scrolling
				overlayOpacity: 0.8,			// 1 is opaque, 0 is completely transparent (change the color in the CSS file)
				resizeOpening: true,			// Determines if box opens small and grows (true) or starts at larger size (false)
				resizeDuration: 240,			// Duration of each of the box resize animations (in milliseconds)
				initialWidth: 320,				// Initial width of the box (in pixels)
				initialHeight: 180,				// Initial height of the box (in pixels)
				defaultWidth: 640,				// Default width of the box (in pixels) for undefined media (MP4, FLV, etc.)
				defaultHeight: 360,				// Default height of the box (in pixels) for undefined media (MP4, FLV, etc.)
				showCaption: true,				// Display the title and caption, true / false
				showCounter: true,				// If true, a counter will only be shown if there is more than 1 image to display
				countBack: false,				// Inverts the displayed number (so instead of the first element being labeled 1/10, it's 10/10)
				clickBlock: true,				// Adds an event on right-click to block saving of images from the context menu in most browsers (this can't prevent other ways of downloading, but works as a casual deterent)
								// due to less than ideal code ordering, clickBlock on links must be removed manually around line 250
//			iOS device options
//				iOSenable: false,				// When set to false, disables overlay entirely (links open in new tab)
												// IMAGES and INLINE content will display normally,
												// while ALL OTHER content will display a direct link (this is required so as to not break mixed-media galleries)
				iOShtml: true,					// If set to true, HTML content is displayed normally as well (useful if your HTML content is minimal and UI oriented instead of external sites)
//			Mobile behavior
				isMobileEnable: true,			// activate a specific interface for touch device
//				mobileDetection: 'resolution',	// resolution, tablet, phone
				isMobile: false,					// detects whether or not the device is a mobile like tablet or phone
				mobileResolution: '640',			// set the resolution from which to switch to the mobile view
//			Image options
				imgBackground: false,		// Embed images as CSS background (true) or <img> tag (false)
											// CSS background is naturally non-clickable, preventing downloads
											// IMG tag allows automatic scaling for smaller screens
											// (all images have no-click code applied, albeit not Opera compatible. To remove, comment lines 212 and 822)
				imgPadding: 100,			// Clearance necessary for images larger than the window size (only used when imgBackground is false)
											// Change this number only if the CSS style is significantly divergent from the original, and requires different sizes
//			Inline options
				overflow: 'auto',			// If set, overides CSS settings for inline content only, set to "false" to leave CSS settings intact.
				inlineClone: false,			// Clones the inline element instead of moving it from the page to the overlay
//			Global media options
				html5: 'true',				// HTML5 settings for YouTube and Vimeo, false = off, true = on
				scriptaccess: 'true',		// Allow script access to flash files
				fullscreen: 'true',			// Use fullscreen
				fullscreenNum: '1',			// 1 = true
				autoplay: 'true',			// Plays the video as soon as it's opened
				autoplayNum: '1',			// 1 = true
				autoplayYes: 'yes',			// yes = true
				volume: '100',				// 0-100, used for NonverBlaster and Quicktime players
				medialoop: 'true',			// Loop video playback, true / false, used for NonverBlaster and Quicktime players
				bgcolor: '#000000',			// Background color, used for flash and QT media
				wmode: 'transparent',			// Background setting for Adobe Flash ('opaque' and 'transparent' are most common)
				addmediadownloadbutton: '0',	// Adds the download buttons under the media
//			NonverBlaster
				playerpath: 'plugins/system/mediabox_ck/mediabox_ck/assets/NonverBlaster.swf',	// Path to NonverBlaster.swf
				showTimecode: 'false',		// turn timecode display off or on (true, false)
				controlColor: '0xFFFFFF',	// set the control color
				controlBackColor: '0x0000000',	// set the bakcground color (video only)
//				playerBackColor: '0x0000FF',	// set the player background color (leave blank to allow CSS styles to show through for audio)
				playerBackColor: '',	// set the player background color (leave blank to allow CSS styles to show through)
				wmodeNB: 'transparent',			// Background setting for Adobe Flash (set to 'transparent' for a blank background, 'opaque' in other situations)
//				autoAdvance: 'false',		// placeholder setting only - not currently implemented (intending to add auto gallery list navigation on play-end)
//			Quicktime options
				controller: 'true',			// Show controller, true / false
//			Flickr options
				flInfo: 'true',				// Show title and info at video start
//			Revver options
				revverID: '187866',			// Revver affiliate ID, required for ad revinue sharing
				revverFullscreen: 'true',	// Fullscreen option
				revverBack: '000000',		// Background color
				revverFront: 'ffffff',		// Foreground color
				revverGrad: '000000',		// Gradation color
//			Ustream options
				usViewers: 'true',			// Show online viewer count (true, false)
//			Youtube options
				ytBorder: '0',				// Outline				(1=true, 0=false)
				ytColor1: '000000',			// Outline color
				ytColor2: '333333',			// Base interface color (highlight colors stay consistent)
				ytRel: '0',					// Show related videos	(1=true, 0=false)
				ytInfo: '1',				// Show video info		(1=true, 0=false)
				ytSearch: '0',				// Show search field	(1=true, 0=false)
//			Viddyou options
				vuPlayer: 'basic',			// Use 'full' or 'basic' players
//			Vimeo options
				vmTitle: '1',				// Show video title
				vmByline: '1',				// Show byline
				vmPortrait: '1',			// Show author portrait
				vmColor: 'ffffff',			// Custom controller colors, hex value minus the # sign, defult is 5ca0b5
//			Mediabox CK	special options
				attribType: 'rel',			// Attribute selector to filter the links ('rel' or 'className')
				showToolbar: '1',			// Show the toolbar to navigate and launch the diaporama
				diapoTime: 1000,			// Time in ms between each image when the diaporama is launched
				diapoAutoplay: 'false',		// Launch immediately the autoplay when the gallery opens
				showZoom: '0',				// Show the toolbar to use the zoom on images
				toolbarSize: 'normal'		// Set the size of the controls in the toolbar
			};

			options = $.extend({}, options, _options);

			if (typeof _mediaArray == "string") {	// Used for single mediaArray only, with URL and Title as first two arguments
				_mediaArray = [[_mediaArray,startMedia,_options]];
				startMedia = 0;
			}

			mediaArray = _mediaArray;
			options.loop = options.loop && (mediaArray.length > 1);

			if (options.showToolbar == '1' && mediaArray.length > 1) {
				toolbar.append(closeLink, nextLink, pauseLink, playLink, prevLink, zoomBar, pieLoader);
				bottom.append(title, caption, number);
			} else {
				bottom.append(closeLink, nextLink, prevLink, zoomBar, title, number, caption);
			}

			prevLink.html( options.buttonText[0]);
			nextLink.html( options.buttonText[1]);
			closeLink.html( options.buttonText[2]);
			playLink.html( options.buttonText[3]);
			pauseLink.html( options.buttonText[4]).hide();
			if (options.showZoom == '1' && ! $('#mbZoomMinus').length) {
				zoomBarMinus = $('<a id="mbZoomMinus" href="#" ><big>-</big></a>').click(zoomMinus);
				zoomBarPlus = $('<a id="mbZoomPlus" href="javascript:void(0)" />').click(zoomPlus);
				zoomBarPlus.html('<big>+</big>');
				zoomBarValue = $('<a id="mbZoomValue" href="#"><big>100 %</big></a>').click(zoomInit);
				zoomBar.append(zoomBarMinus, zoomBarValue, zoomBarPlus);
			}
			if (options.toolbarSize == 'big') {
				bottom.addClass('mbBottomBig');
			}
			media.addClass('paused');

			size();
			setup(true);
			top = $(window).scrollTop() + ($(window).height()/2);
			// fix by ced1870
			left = '50%';

			mediaLeftMargin = ( media.css('margin-left') == 'auto' ) ? 0 : media.css('margin-left');
			margin = parseInt(center.css('padding-left'))+parseInt(mediaLeftMargin)+parseInt(media.css('padding-left')); // modif ced1870
			marginBottom = parseInt(bottom.css('margin-left'))+parseInt(bottom.css('padding-left'))+parseInt(bottom.css('margin-right'))+parseInt(bottom.css('padding-right'));
			// suppression margin sur centrage avec marginlef
			center.css({top: top, left: left, width: options.initialWidth, height: options.initialHeight, marginTop: -(options.initialHeight/2), marginLeft: -(options.initialWidth/2), display: ""});
			if (mediaArray.length > 1) toolbar.css({top: $(window).scrollTop(), left: left, display: ""});

			$('#mbOverlay').css('opacity', 0).fadeTo( 360, options.overlayOpacity);

			if (options.showToolbar == '1' && mediaArray.length > 1) {
				loadToolbar();
			}

			if (options.diapoAutoplay == '1') {
				play();
			}

			return changeMedia(startMedia);
		}
	};

//	$.fn.mediabox = function(_options, linkMapper, linksFilter) {


	/*	Internal functions	*/

	function position() {
		overlay.css({top: window.getScrollTop(), left: window.getScrollLeft()});
	}

	function size() {
		winWidth = $(window).width();
		winHeight = $(window).height();

		/* check if we need to switch to the mobile view */
//		if (options.isMobileEnable) {
//			if (winWidth <=  parseInt(options.mobileResolution)) {
//				center.addClass('mediaboxckmobile');
//				toolbar.addClass('mediaboxckmobile');
//			} else {
//				center.removeClass('mediaboxckmobile');
//				toolbar.removeClass('mediaboxckmobile');
//			}
//		}

		var dim = getCenterDimensions();
		center.css({width: dim['width'], height: dim['height'] , top: dim['top'], marginTop: dim['marginTop'], marginLeft: dim['marginLeft']});

		centerImage();
		resizeVideos();
	}
	
	function getCenterDimensions() {
		winWidth = $(window).width();
		winHeight = $(window).height();
		if (mediaInitH == undefined) mediaInitH = options.defaultHeight;
		// if (mediaHeight == undefined) mediaHeight = options.defaultHeight;
		// if (mediaWidth == undefined) mediaWidth = options.defaultWidth;

		if (
			mediaInitH >= winHeight-options.imgPadding && (mediaHeight / winHeight) >= (mediaWidth / winWidth)
			&& ! center.hasClass('mediaboxckmobile') 
		) {
			top = $(window).scrollTop() + ($(window).height()/2);
			tmpHeight = winHeight-options.imgPadding;
			tmpWidth = parseInt((tmpHeight/mediaInitH)*mediaInitW, 10);
			media.css({width: tmpWidth, height: tmpHeight});
			bottom.css({width: tmpWidth-marginBottom+"px"});
			caption.css({width: tmpWidth-marginBottom+"px"});
			tmpWidth = media.outerWidth();
			tmpHeight = media.outerHeight()+bottom.outerHeight();
		} else if (
			(mediaInitW >= winWidth-options.imgPadding && (mediaInitH / winHeight) < (mediaInitW / winWidth))
			&& ! center.hasClass('mediaboxckmobile')
		) {
			top = $(window).scrollTop() + ($(window).height()/2);
			tmpWidth = winWidth-options.imgPadding;
			tmpHeight = parseInt((tmpWidth/mediaInitW)*mediaInitH, 10);
			media.css({width: tmpWidth, height: tmpHeight});
			bottom.css({width: tmpWidth-marginBottom+"px"});
			caption.css({width: tmpWidth-marginBottom+"px"});
			tmpWidth = media.outerWidth();
			tmpHeight = media.outerHeight()+bottom.outerHeight();
		}else if(
			mediaInitW < winWidth-options.imgPadding
			&& ! center.hasClass('mediaboxckmobile')
			)
		{
			top = $(window).scrollTop() + ($(window).height()/2);
			tmpWidth = mediaInitW;
			tmpHeight = mediaInitH;
			media.css({width: tmpWidth, height: tmpHeight});
			bottom.css({width: tmpWidth-marginBottom+"px"});
			caption.css({width: tmpWidth-marginBottom+"px"});
			tmpWidth = media.outerWidth();
			tmpHeight = media.outerHeight()+bottom.outerHeight();
		}

		var dim = new Array();
		centerw = media.outerWidth();
		centerh = media.outerHeight()+bottom.outerHeight();

		dim['width'] = centerw;
		dim['height'] = centerh;
		dim['top'] = $(window).scrollTop() + ($(window).height()/2);
		dim['marginTop'] = -(centerh/2);
		dim['marginLeft'] = -(centerw/2);

		return dim;
	}
	
	function resizeVideos() {
		// force the videos to fit the visible area
		if (center.hasClass('mediaboxckmobile')) {
			media.find('object,iframe, video, audio').height('calc(100% - ' + parseInt(bottom.height()) + 'px)');
		} else {
			media.find('object, iframe, video, audio').height(media.height());
		}
	}

	function centerImage() {
		var mediaImg = media.find('img');
		if (center.hasClass('mediaboxckmobile')) {
			// to center the image in the screen
			mediaImg.css({top: '0%', marginTop: ($(window).height() - mediaImg.height())/2, left: '0%', marginLeft: ($(window).width() - mediaImg.width())/2});
		} else {
			mediaImg.css({top: '0%', marginTop: '0'});
		}
	}

	function setup(open) {
		// Hides on-page objects and embeds while the overlay is open, nessesary to counteract Firefox stupidity
		// if (Browser.firefox) {
			// ["object", window.ie ? "select" : "embed"].forEach(function(tag) {
				// Array.forEach($$(tag), function(el) {
					// if (open) el._mediabox = el.style.visibility;
					// el.style.visibility = open ? "hidden" : el._mediabox;
				// });
			// });
		// }

		overlay.css('display', (open ? "" : "none") );

		// var fn = open ? "addEvent" : "removeEvent";
		// TODO : browser à migrer
		// if (Browser.Platform.ios || Browser.ie6) window[fn]("scroll", position);	// scroll position is updated only after movement has stopped

		$(window).off("keydown", keyDown);
		if (options.keyboard) $(window).bind('keydown',keyDown);

		if (options.isMobileEnable && options.isMobile) {
			center.addClass('mediaboxckmobile');
			toolbar.addClass('mediaboxckmobile');
		}
	}

	function keyDown(event) {
		if (options.keyboardAlpha) {
			switch(event.code) {
				case 27:	// Esc
				case 88:	// 'x'
				case 67:	// 'c'
					close();
					break;
				case 37:	// Left arrow
				case 80:	// 'p'
					previous();
					break;
				case 39:	// Right arrow
				case 78:	// 'n'
					next();
			}
		} else {
			switch(event.keyCode) {
				case 27:	// Esc
					close();
					break;
				case 37:	// Left arrow
					previous();
					break;
				case 39:	// Right arrow
					next();
			}
		}
		if (options.keyboardStop) { return false; }
	}

	function previous() {
		resetAutoplay();
		return changeMedia(prevMedia);
	}

	function next() {
		resetAutoplay();
		return changeMedia(nextMedia);
	}

	rad = 0;
	var radSum = 0.005;
	function play() {
		if(media.hasClass('paused')) {
			media.removeClass('paused');
			pauseLink.show();
			playLink.hide();
		}

		autoplay();

		return false;
	}

	function autoplay() {
		if (media.hasClass('paused')) return;
		clearInterval(loader);
		loader = setInterval(
			function(){
				if(rad<1 && !media.hasClass('paused')){
					rad = (rad+radSum);
					if (rad > 1) rad = 1;
					pieLoaderBar.css({'width':(rad*100)+'%'});
				} else if (rad<=1 && media.hasClass('paused')){
					rad = rad;
				} else {
					clearInterval(loader);
					if(!media.hasClass('paused')) {
						resetAutoplay();
						next();
					}
				}
			}
		, options.diapoTime*radSum);
	}

	function resetAutoplay() {
		clearInterval(loader);
		rad = 0;
		pieLoaderBar.css('width', '0');
	}

	function pause() {
		clearInterval(loader);
		pieLoaderBar.stop(true, true);
		// clearInterval(t);
		media.addClass('paused');
		pauseLink.hide();
		playLink.show();

		return false;
	}

	function zoomPlus() {
		$('#mbMedia').addClass('mbZooming');
		var zoomValue = getZoomValue();
		zoomValue = (zoomValue + 10) / 100;

		var mediaImg = media.find('img');
		mediaImg.css('transform', 'scale(' + (zoomValue) + ')');
		setZoomValue(zoomValue * 100);

		return false;
	}

	function zoomMinus() {
		$('#mbMedia').addClass('mbZooming');
		var zoomValue = getZoomValue();
		if (zoomValue <= 10 ) return false;

		zoomValue = (zoomValue - 10) / 100;

		var mediaImg = media.find('img');
		mediaImg.css('transform', 'scale(' + (zoomValue) + ')');
		setZoomValue(zoomValue * 100);

		return false;
	}

	function zoomInit() {
		$('#mbMedia').removeClass('mbZooming');
		var zoomValue = 1;

		var mediaImg = media.find('img');
		mediaImg.css('transform', 'scale(1)');
		setZoomValue(zoomValue * 100);

		return false;
	}

	function getZoomValue() {
		return parseInt($('#mbZoomValue big').text());
	}

	function setZoomValue(val) {
		$('#mbZoomValue big').text(parseInt(val) + '%');
	}

	function getNaturalImageSize(img) {
		// Get on screen image
		var screenImage = $(img);

		// Create new offscreen image to test
		var theImage = new Image();
		theImage.src = screenImage.attr("src");

		// Get accurate measurements from that.
		var imageWidth = theImage.width;
		var imageHeight = theImage.height;
	}

	function loadToolbar() {
		// inject the toolbar in the page
		$(document.body).append(
			toolbar
		);

		toolbar.delay(200).css('opacity', 0).fadeTo( 360, 1);
	}

	function createMedia(url, params, mediaURL) {
		var html = '';

		// if media path is given, use html5
		if(! mediaURL) mediaURL = '';

		if (mediaURL) {
			// get the file name without extension
			var mediaExt = mediaURL.split('.').pop();
			// var mediaExt = mediaURL[1];
			mediaURL = mediaURL.replace('.' + mediaExt, '');
			var medialoop = options.medialoop ? 'loop' : '';
			var mediaautoplay = options.autoplay ? 'autoplay' : '';

			var isAudio = mediaExt == 'mp3' || mediaExt == 'ogg' || mediaExt == 'aac' || mediaExt == 'wav';
			var isVideo = mediaExt == 'mp4' || mediaExt == 'webm' || mediaExt == 'ogv';

			// load the html5 tags for audio
			if (isAudio) {
				html += '<audio '+medialoop+' '+mediaautoplay+' controls="controls" style="width:100%">'
				+'<source src="'+mediaURL+'.mp3" type="audio/mp3" />'
				+'<source src="'+mediaURL+'.ogg" type="audio/ogg" />'
				+'<source src="'+mediaURL+'.aac" type="audio/aac" />'
				+'<source src="'+mediaURL+'.wav" type="audio/wav" />';
			} else {
				html += '<video '+medialoop+' '+mediaautoplay+' controls="controls" poster="'+mediaURL+'.jpg" width="'+params['width']+'" height="'+params['height']+'">'
				+'<source src="'+mediaURL+'.mp4" type="video/mp4" />'
				+'<source src="'+mediaURL+'.webm" type="video/webm" />'
				+'<source src="'+mediaURL+'.ogv" type="video/ogg" />';
			}
		}
			/*html += '<object data="'+url+'" width="'+params['width']+'" height="'+params['height']+'" type="application/x-shockwave-flash">'
			+'<param name="movie" value="'+url+'" />'
			+'<param name="allowFullScreen" value="true" />'
			+'<param name="wmode" value="transparent" />';

			for (var param in params['params']) {
				html += '<param name="'+param+'" value="'+params['params'][param]+'" />';
			}
			//+'<param name="flashVars" value="config={'playlist':[ 'linktoposter.jpg',{'url':'linktomovie.mp4','autoPlay':false}]}" />'
			// html += '<img alt="My Movie" src="linktoposter.jpg" width="'+params['width']+'" height="'+params['height']+'" title="No video playback capabilities, please download the video below." />'
			html += '</object>';*/
			// html += '<!-- Fallback Text -->'
			// +'Your browser does not appear to support a browser. Please download the video below.'
		if (mediaURL) {
			if (isAudio) {
				html += '</audio>';
			} else {
				html += '</video>';
			}
		}
		
		if (options.addmediadownloadbutton == '1') {
			if (isAudio) {
				html += '<p>'
				+'<strong>Download audio file:</strong> <a href="'+mediaURL+'.mp3">MP3 format</a> | <a href=" '+mediaURL+'.ogg">Ogg format</a> | <a href=" '+mediaURL+'.aac">Aac format</a>'
				+'</p>';
			} else {
				html += '<p>'
				+'<strong>Download video:</strong> <a href="'+mediaURL+'.mp4">MP4 format</a> | <a href=" '+mediaURL+'.ogv">Ogg format</a> | <a href=" '+mediaURL+'.webm">WebM format</a>'
				+'</p>';
			}
		}
		return $(html);
	}

	function changeMedia(mediaIndex) {
		if (mediaIndex >= 0) {
//			if (Browser.Platform.ios && !options.iOSenable) {
//				window.open(mediaArray[mediaIndex][0], "_blank");
//				close();
//				return false;
//			}
			media.html('');
			zoomBar.hide();
			zoomInit();
			activeMedia = mediaIndex;
			prevMedia = ((activeMedia || !options.loop) ? activeMedia : mediaArray.length) - 1;
			nextMedia = activeMedia + 1;
			if (nextMedia == mediaArray.length) nextMedia = options.loop ? 0 : -1;
			stop();
			center.addClass("mbLoading");
			if (preload && mediaType == "inline" && !options.inlineClone) preload.adopt(media.getChildren());	// prevents loss of adopted data
			// initialize the mediaType to avoid bad interactions
			mediaType = '';
	/*	mediaboxAdvanced link formatting and media support	*/

			if (!mediaArray[mediaIndex][2]) mediaArray[mediaIndex][2] = '';	// Thanks to Leo Feyer for offering this fix
			WH = mediaArray[mediaIndex][2].split(' ');
			WHL = WH.length;

			if (options.fullWidth == '1') {
				mediaWidth = '';
				mediaHeight = '';
				center.addClass('mediaboxckfullwidth');
			} else 
			if (WHL>1) {
//				mediaWidth = (WH[WHL-2].match("%")) ? (window.getWidth()*((WH[WHL-2].replace("%", ""))*0.01))+"px" : WH[WHL-2]+"px";
				mediaWidth = (WH[WHL-2].match("%")) ? ($(window).width()*((WH[WHL-2].replace("%", ""))*0.01)) : WH[WHL-2];
//				mediaHeight = (WH[WHL-1].match("%")) ? (window.getHeight()*((WH[WHL-1].replace("%", ""))*0.01))+"px" : WH[WHL-1]+"px";
				mediaHeight = (WH[WHL-1].match("%")) ? ($(window).height()*((WH[WHL-1].replace("%", ""))*0.01)) : WH[WHL-1];
			} else {
				if (options.defaultWidth.match("%")) {
					mediaWidth = ($(window).width() * (parseInt(options.defaultWidth) / 100) - 10);
				} else {
				mediaWidth = "";
				}
				if (options.defaultHeight.match("%")) {
					mediaHeight = ($(window).height() * (parseInt(options.defaultHeight) / 100) - 10);
				} else {
				mediaHeight = "";
				}
			}
			URL = mediaArray[mediaIndex][0];
//			URL = encodeURI(URL).replace("(","%28").replace(")","%29");
//			URL = encodeURI(URL).replace("(","%28").replace(")","%29").replace("%20"," ");

			captionSplit = (mediaArray[activeMedia][1] != undefined) ? mediaArray[activeMedia][1].split('::') : '';

// Quietube and yFrog support
			if (URL.match(/quietube\.com/i)) {
				mediaSplit = URL.split('v.php/');
				URL = mediaSplit[1];
			} else if (URL.match(/\/\/yfrog/i)) {
				mediaType = (URL.substring(URL.length-1));
				if (mediaType.match(/b|g|j|p|t/i)) mediaType = 'image';
				if (mediaType == 's') mediaType = 'flash';
				if (mediaType.match(/f|z/i)) mediaType = 'video';
				URL = URL+":iphone";
			}

	/*	Specific Media Types	*/ 
 
// GIF, JPG, PNG
			if (URL.match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i) || mediaType == 'image') {
				center.removeClass('mediaboxckfullwidth');
				mediaType = 'img';
				URL = URL.replace(/twitpic\.com/i, "twitpic.com/show/full");
				preload = new Image();
				preload.onload = startEffect;
				preload.src = URL;
				zoomBar.show();
// FLV, MP4
			} else if (URL.match(/\.flv|\.mp4/i) || mediaType == 'video') {
				mediaType = 'video';
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || options.defaultHeight;
				preload = createMedia(''+options.playerpath+'?mediaURL='+URL+'&allowSmoothing=true&autoPlay='+options.autoplay+'&buffer=6&showTimecode='+options.showTimecode+'&loop='+options.medialoop+'&controlColor='+options.controlColor+'&controlBackColor='+options.controlBackColor+'&playerBackColor='+options.playerBackColor+'&defaultVolume='+options.volume+'&scaleIfFullScreen=true&showScalingButton=true&crop=false', {
					id: 'mbVideo',
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmodeNB, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					}, URL);
				startEffect();
// MP3, AAC
			} else if (URL.match(/\.mp3|\.aac|tweetmic\.com|tmic\.fm/i) || mediaType == 'audio') {
				mediaType = 'audio';
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || "17";
				if (URL.match(/tweetmic\.com|tmic\.fm/i)) {
					URL = URL.split('/');
					URL[4] = URL[4] || URL[3];
					URL = "//media4.fjarnet.net/tweet/tweetmicapp-"+URL[4]+'.mp3';
				}
				preload = createMedia(''+options.playerpath+'?mediaURL='+URL+'&allowSmoothing=true&autoPlay='+options.autoplay+'&buffer=6&showTimecode='+options.showTimecode+'&loop='+options.medialoop+'&controlColor='+options.controlColor+'&controlBackColor='+options.controlBackColor+'&defaultVolume='+options.volume+'&scaleIfFullScreen=true&showScalingButton=true&crop=false', {
					id: 'mbAudio',
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					}, URL);
				startEffect();
// SWF
			} else if (URL.match(/\.swf/i) || mediaType == 'flash') {
				mediaType = 'obj';
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || options.defaultHeight;
				preload = createMedia(URL, {
					id: 'mbFlash',
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
				// removed by ced1870, .mov no more useful
// MOV, M4V, M4A, MP4, AIFF, etc.
			/*} else if (URL.match(/\.mov|\.m4v|\.m4a|\.aiff|\.avi|\.caf|\.dv|\.mid|\.m3u|\.mp2||\.qtz/i) || mediaType == 'qt') {
				mediaType = 'qt';
				mediaWidth = mediaWidth || options.defaultWidth;
//				mediaHeight = (parseInt(mediaHeight, 10)+16)+"px" || options.defaultHeight;
				mediaHeight = (parseInt(mediaHeight, 10)+16) || options.defaultHeight;
				preload = new Quickie(URL, {
					id: 'MediaboxQT',
					width: mediaWidth,
					height: mediaHeight,
					attributes: {controller: options.controller, autoplay: options.autoplay, volume: options.volume, loop: options.medialoop, bgcolor: options.bgcolor}
					});
				startEffect();
				*/
// Blip.tv
			}
				/*	Social Media Sites	*/
			else if (URL.match(/blip\.tv/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "640";
				mediaHeight = mediaHeight || "390";
				preload = createMedia(URL, {
					src: URL,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Break.com
			} else if (URL.match(/break\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "464";
				mediaHeight = mediaHeight || "376";
				mediaId = URL.match(/\d{6}/g);
				preload = createMedia('//embed.break.com/'+mediaId, {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// DailyMotion
			} else if (URL.match(/dailymotion\.com/i)) {
				// mediaType = 'obj';
				// mediaWidth = mediaWidth || "480";
				// mediaHeight = mediaHeight || "381";
				// preload = createMedia(URL, {
					// id: mediaId,
					// width: mediaWidth,
					// height: mediaHeight,
					// params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					// });
				// startEffect();
				mediaSplit_video = URL.split('video/');
				mediaSplit_swf = URL.split('swf/');
				if (options.html5 && (mediaSplit_video.length > 1 || mediaSplit_swf.length > 1)) {
					mediaType = 'url';
					mediaWidth = mediaWidth || "640";
					mediaHeight = mediaHeight || "381";
					// mediaId = "mediaId_"+new Date().getTime();	// Safari may not update iframe content with a static id.
					mediaId = mediaSplit_video[1] || mediaSplit_swf[1];
					preload = $('<iframe />', {
						'src': '//www.dailymotion.com/embed/video/'+ mediaId,
						'id': mediaId,
						'width': mediaWidth,
						'height': mediaHeight,
						'frameborder': 0
						});
					startEffect();
				} else {
					mediaType = 'obj';
					mediaId = mediaSplit_swf[1];
					mediaWidth = mediaWidth || "480";
					mediaHeight = mediaHeight || "381";
					preload = createMedia('//www.dailymotion.com/swf/'+mediaId, {
						id: mediaId,
						width: mediaWidth,
						height: mediaHeight,
						params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
						});
					startEffect();
				}
// Facebook
			} else if (URL.match(/facebook\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "320";
				mediaHeight = mediaHeight || "240";
				mediaSplit = URL.split('v=');
				mediaSplit = mediaSplit[1].split('&');
				mediaId = mediaSplit[0];
				preload = createMedia('//www.facebook.com/v/'+mediaId, {
					movie: '//www.facebook.com/v/'+mediaId,
					classid: 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Flickr
			} else if (URL.match(/flickr\.com(?!.+\/show\/)/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "500";
				mediaHeight = mediaHeight || "375";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[5];
				preload = createMedia('//www.flickr.com/apps/video/stewart.swf', {
					id: mediaId,
					classid: 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
					width: mediaWidth,
					height: mediaHeight,
					params: {flashvars: 'photo_id='+mediaId+'&amp;show_info_box='+options.flInfo, wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// GameTrailers Video
			} else if (URL.match(/gametrailers\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "480";
				mediaHeight = mediaHeight || "392";
				mediaId = URL.match(/\d{5}/g);
				preload = createMedia('//www.gametrailers.com/remote_wrap.php?mid='+mediaId, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Google Video
			} else if (URL.match(/google\.com\/videoplay/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "400";
				mediaHeight = mediaHeight || "326";
				mediaSplit = URL.split('=');
				mediaId = mediaSplit[1];
				preload = createMedia('//video.google.com/googleplayer.swf?docId='+mediaId+'&autoplay='+options.autoplayNum, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Megavideo - Thanks to Robert Jandreu for suggesting this code!
			} else if (URL.match(/megavideo\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "640";
				mediaHeight = mediaHeight || "360";
				mediaSplit = URL.split('=');
				mediaId = mediaSplit[1];
				preload = createMedia('//wwwstatic.megavideo.com/mv_player.swf?v='+mediaId, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Metacafe
			} else if (URL.match(/metacafe\.com\/watch/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "400";
				mediaHeight = mediaHeight || "345";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[4];
				preload = createMedia('//www.metacafe.com/fplayer/'+mediaId+'/.swf?playerVars=autoPlay='+options.autoplayYes, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Myspace
			} else if (URL.match(/vids\.myspace\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "425";
				mediaHeight = mediaHeight || "360";
				preload = createMedia(URL, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Revver
			} else if (URL.match(/revver\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "480";
				mediaHeight = mediaHeight || "392";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[4];
				preload = createMedia('//flash.revver.com/player/1.0/player.swf?mediaId='+mediaId+'&affiliateId='+options.revverID+'&allowFullScreen='+options.revverFullscreen+'&autoStart='+options.autoplay+'&backColor=#'+options.revverBack+'&frontColor=#'+options.revverFront+'&gradColor=#'+options.revverGrad+'&shareUrl=revver', {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Rutube
			} else if (URL.match(/rutube\.ru/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "470";
				mediaHeight = mediaHeight || "353";
				mediaSplit = URL.split('=');
				mediaId = mediaSplit[1];
				preload = createMedia('//video.rutube.ru/'+mediaId, {
					movie: '//video.rutube.ru/'+mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Tudou
			} else if (URL.match(/tudou\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "400";
				mediaHeight = mediaHeight || "340";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[5];
				preload = createMedia('//www.tudou.com/v/'+mediaId, {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Twitcam
			} else if (URL.match(/twitcam\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "320";
				mediaHeight = mediaHeight || "265";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[3];
				preload = createMedia('//static.livestream.com/chromelessPlayer/wrappers/TwitcamPlayer.swf?hash='+mediaId, {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Twitvid
			} else if (URL.match(/twitvid\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "600";
				mediaHeight = mediaHeight || "338";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[3];
				preload = createMedia('//www.twitvid.com/player/'+mediaId, {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Ustream.tv
			} else if (URL.match(/ustream\.tv/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "400";
				mediaHeight = mediaHeight || "326";
				preload = createMedia(URL+'&amp;viewcount='+options.usViewers+'&amp;autoplay='+options.autoplay, {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// YouKu
			} else if (URL.match(/youku\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "480";
				mediaHeight = mediaHeight || "400";
				mediaSplit = URL.split('id_');
				mediaId = mediaSplit[1];
				preload = createMedia('//player.youku.com/player.php/sid/'+mediaId+'=/v.swf', {
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// YouTube Video (now includes HTML5 option)
			} else if (URL.match(/youtube\.com\/watch/i)) {
				mediaSplit = URL.split('v=');
				if (options.html5) {
					mediaType = 'url';
					mediaWidth = mediaWidth || options.defaultWidth;
					mediaHeight = mediaHeight || options.defaultHeight;
					mediaId = "mediaId_"+new Date().getTime();	// Safari may not update iframe content with a static id.
					preload = $('<iframe />', {
						'src': '//www.youtube.com/embed/'+mediaSplit[1],
						'id': mediaId,
						'width': mediaWidth,
						'height': mediaHeight,
						'allowfullscreen': options.fullscreen,
						'frameborder': 0
						});
					startEffect();
				} else {
					mediaType = 'obj';
					mediaId = mediaSplit[1];
					mediaWidth = mediaWidth || "480";
					mediaHeight = mediaHeight || "385";
					preload = createMedia('//www.youtube.com/v/'+mediaId+'&autoplay='+options.autoplayNum+'&fs='+options.fullscreenNum+'&border='+options.ytBorder+'&color1=0x'+options.ytColor1+'&color2=0x'+options.ytColor2+'&rel='+options.ytRel+'&showinfo='+options.ytInfo+'&showsearch='+options.ytSearch, {
						id: mediaId,
						width: mediaWidth,
						height: mediaHeight,
						params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
						});
					startEffect();
				}
// YouTube Playlist
			} else if (URL.match(/youtube\.com\/view/i)) {
				mediaType = 'obj';
				mediaSplit = URL.split('p=');
				mediaId = mediaSplit[1];
				mediaWidth = mediaWidth || "480";
				mediaHeight = mediaHeight || "385";
				preload = createMedia('//www.youtube.com/p/'+mediaId+'&autoplay='+options.autoplayNum+'&fs='+options.fullscreenNum+'&border='+options.ytBorder+'&color1=0x'+options.ytColor1+'&color2=0x'+options.ytColor2+'&rel='+options.ytRel+'&showinfo='+options.ytInfo+'&showsearch='+options.ytSearch, {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Veoh
			} else if (URL.match(/veoh\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "410";
				mediaHeight = mediaHeight || "341";
				URL = URL.replace('%3D','/');
				mediaSplit = URL.split('watch/');
				mediaId = mediaSplit[1];
				preload = createMedia('//www.veoh.com/static/swf/webplayer/WebPlayer.swf?version=AFrontend.5.5.2.1001&permalinkId='+mediaId+'&player=videodetailsembedded&videoAutoPlay='+options.AutoplayNum+'&id=anonymous', {
					id: mediaId,
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen}
					});
				startEffect();
// Viddler
			} else if (URL.match(/viddler\.com/i)) {
				mediaType = 'obj';
				mediaWidth = mediaWidth || "437";
				mediaHeight = mediaHeight || "370";
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[4];
				preload = createMedia(URL, {
					id: 'viddler_'+mediaId,
					movie: URL,
					classid: 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
					width: mediaWidth,
					height: mediaHeight,
					params: {wmode: options.wmode, bgcolor: options.bgcolor, allowscriptaccess: options.scriptaccess, allowfullscreen: options.fullscreen, id: 'viddler_'+mediaId, movie: URL}
					});
				startEffect();
// Vimeo (now includes HTML5 option)
			} else if (URL.match(/vimeo\.com/i)) {
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || options.defaultHeight;
				mediaSplit = URL.split('/');
				mediaId = mediaSplit[3];

				var mediasrc = URL.indexOf('player.vimeo.com/video') != -1 ? URL : '//player.vimeo.com/video/'+mediaSplit[3]+'?portrait='+options.vmPortrait;
				mediaType = 'url';
				mediaId = "mediaId_"+new Date().getTime();	// Safari may not update iframe content with a static id.
				preload = $('<iframe />', {
					'src': mediasrc,
					'id': mediaId,
					'width': mediaWidth,
					'height': mediaHeight,
					'allowfullscreen': options.fullscreen,
					'frameborder': 0
					});
				startEffect();
// INLINE
			} else if (URL.match(/\#mb_/i)) {
				mediaType = 'inline';
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || options.defaultHeight;
				URLsplit = URL.split('#');
//				preload = new Element("div", {id: "mbMediaInline"}).adopt($('#'+URLsplit[1]).getChildren().clone([true,true]));
				preload = $('#'+URLsplit[1]);
				startEffect();
// HTML (applies to ALL links not recognised as a specific media type)
			} else if (URL.match(/googleusercontent/i)) {
				mediaType = 'img';
				preload = new Image();
				preload.onload = startEffect;
				preload.src = URL;
// HTML (applies to ALL links not recognised as a specific media type)
			} else {
				mediaType = 'url';
				mediaWidth = mediaWidth || options.defaultWidth;
				mediaHeight = mediaHeight || options.defaultHeight;
				mediaId = "mediaId_"+new Date().getTime();	// Safari may not update iframe content with a static id.
				preload = $('<iframe />', {
					'src': URL,
					'id': mediaId,
					'width': mediaWidth,
					'height': mediaHeight,
					'allowfullscreen': options.fullscreen,
					'frameborder': 0
					});
				startEffect();
			}
		}

		return false;
	}

	function startEffect() {

//		if (Browser.Platform.ios && (mediaType == "obj" || mediaType == "qt" || mediaType == "html")) alert("this isn't gonna work");
//		if (Browser.Platform.ios && (mediaType == "obj" || mediaType == "qt" || mediaType == "html")) mediaType = "ios";
		// added by ced1870
		media.css('opacity', 0);

		mediaInitW = mediaInitH = ''; // needed to avoid size problem between multiple medias in the same page
		media.off("click", next); // remove click event
		if (mediaType == "img") media.on("click", next); // if image then add the click event to go to the next image
		if (mediaType == "img"){
			mediaWidth = preload.width;
			mediaHeight = preload.height;

			// store the original media size
			mediaInitW = mediaWidth;
			mediaInitH = mediaHeight;

			if (options.imgBackground) {
				media.css({backgroundImage: "url("+URL+")", display: ""});
			} else {	// Thanks to Dusan Medlin for fixing large 16x9 image errors in a 4x3 browser
				if (mediaHeight >= winHeight-options.imgPadding && (mediaHeight / winHeight) >= (mediaWidth / winWidth)) {
					mediaHeight = winHeight-options.imgPadding;
					mediaWidth = parseInt((mediaHeight/preload.height)*mediaWidth, 10);
					// mediaWidth = preload.width = parseInt((mediaHeight/preload.height)*mediaWidth, 10);
					// preload.height = mediaHeight;
				} else if (mediaWidth >= winWidth-options.imgPadding && (mediaHeight / winHeight) < (mediaWidth / winWidth)) {
					mediaWidth = winWidth-options.imgPadding;
					mediaHeight = parseInt((mediaWidth/preload.width)*mediaHeight, 10);
					// mediaHeight = preload.height = parseInt((mediaWidth/preload.width)*mediaHeight, 10);
					// preload.width = mediaWidth;
				}

				// TODO : migrer
				// if (Browser.ie) preload = $('#'+preload);
				if (options.clickBlock) $(preload).on('mousedown', function(e){ e.stopPropagation(); }).on('contextmenu', function(e){ e.stopPropagation(); });
				media.css({backgroundImage: "none", display: ""});
				media.append(preload);
			}
//			mediaWidth += "px";
//			mediaHeight += "px";
		} else if (mediaType == "inline") {
//			if (options.overflow) media.css({overflow: options.overflow});
			media.css({backgroundImage: "none", display: ""});
//			media.append(preload);
//			media.grab(preload.get('html'));
			(options.inlineClone)?media.grab(preload.get('html')):media.adopt(preload.getChildren());
		} else if (mediaType == "qt") {
			media.css({backgroundImage: "none", display: ""});
			media.append(preload);
//			preload;
		} /*else if (mediaType == "ios" || $.browser['ios']) {
			media.css({backgroundImage: "none", display: ""});
			media.html(options.linkText.replace(/\{x\}/gi, URL));
			mediaWidth = options.DefaultWidth;
			mediaHeight = options.DefaultHeight;
		}*/ else if (mediaType == "url" || mediaType == "video" || mediaType == "audio") {
			media.css({backgroundImage: "none", display: ""});
			media.append(preload);
//			if (Browser.safari) options.resizeOpening = false;	// Prevents occasional blank video display errors in Safari, thanks to Kris Gale for the solution
		} else if (mediaType == "obj") {
			if (! $.flash.hasVersion(8)) {
				media.css({backgroundImage: "none", display: ""});
				media.html('<div id="mbError"><b>Error</b><br/>Adobe Flash is either not installed or not up to date, please visit <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Get Flash" target="_new">Adobe.com</a> to download the free player.</div>');
				mediaWidth = options.DefaultWidth;
				mediaHeight = options.DefaultHeight;
			} else {
				media.css({backgroundImage: "none", display: ""});
				media.append(preload);
//				if (Browser.safari) options.resizeOpening = false;	// Prevents occasional blank video display errors in Safari, thanks to Kris Gale for the solution
			}
		} else {
			media.css({backgroundImage: "none", display: ""});
			media.html(options.flashText);
			mediaWidth = options.defaultWidth;
			mediaHeight = options.defaultHeight;
		}

		// store the original media size
		mediaInitW = mediaInitW || mediaWidth;
		mediaInitH = mediaInitH || mediaHeight;

		if (mediaType != "img") {
			if (mediaHeight >= winHeight-options.imgPadding && (mediaHeight / winHeight) >= (mediaWidth / winWidth)) {
				mediaHeight = winHeight-options.imgPadding;
				mediaWidth = parseInt((mediaHeight/preload.height)*mediaWidth, 10);
				// mediaWidth = preload.width = parseInt((mediaHeight/preload.height)*mediaWidth, 10);
				// preload.height = mediaHeight;
			} else if (mediaWidth >= winWidth-options.imgPadding && (mediaHeight / winHeight) < (mediaWidth / winWidth)) {
				mediaWidth = winWidth-options.imgPadding;
				mediaHeight = parseInt((mediaWidth/preload.width)*mediaHeight, 10);
				// mediaHeight = preload.height = parseInt((mediaWidth/preload.width)*mediaHeight, 10);
				// preload.width = mediaWidth;
			}
		}

		// size();
		$(window).bind('resize',size);

		title.empty().html( (options.showCaption) ? captionSplit[0] : "");
		caption.empty().html( (options.showCaption && (captionSplit.length > 1)) ? captionSplit[1] : "");
		number.empty().html( (options.showCounter && (mediaArray.length > 1)) ? options.counterText.replace(/\{x\}/, (options.countBack)?mediaArray.length-activeMedia:activeMedia+1).replace(/\{y\}/, mediaArray.length) : "");

//		if (options.countBack) {
//			number.html((options.showCounter && (mediaArray.length > 1)) ? options.counterText.replace(/{x}/, activeMedia + 1).replace(/{y}/, mediaArray.length) : "");
//		} else {
//			number.html((options.showCounter && (mediaArray.length > 1)) ? options.counterText.replace(/{x}/, mediaArray.length - activeMedia).replace(/{y}/, mediaArray.length) : "");
//		}

		if ((prevMedia >= 0) && (mediaArray[prevMedia][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i))) preloadPrev.src = mediaArray[prevMedia][0].replace(/twitpic\.com/i, "twitpic.com/show/full");
		if ((nextMedia >= 0) && (mediaArray[nextMedia][0].match(/\.gif|\.jpg|\.jpeg|\.png|twitpic\.com/i))) preloadNext.src = mediaArray[nextMedia][0].replace(/twitpic\.com/i, "twitpic.com/show/full");
//		if (prevMedia >= 0) prevLink.css('display','');
//		if (nextMedia >= 0) nextLink.css('display','');
		if (prevMedia < 0 && nextMedia < 0) {
			// do nothing, the controls arrow are still hidden
		} else {
			prevLink.css('display','');
			nextLink.css('display','');
			if (prevMedia < 0) { prevLink.attr('data-state','0'); } else { prevLink.attr('data-state','1'); }
			if (nextMedia < 0) { nextLink.attr('data-state','0'); } else { nextLink.attr('data-state','1'); }
		}
		if (nextMedia >= 0 && media.hasClass('paused')) playLink.css('display','');
		if (nextMedia >= 0 && !media.hasClass('paused')) pauseLink.css('display','');

		media.css({width: mediaWidth+"px", height: mediaHeight+"px"});
		bottom.css({width: mediaWidth-marginBottom+"px"});
		caption.css({width: mediaWidth-marginBottom+"px"});

		mediaWidth = media.outerWidth();
		mediaHeight = media.outerHeight()+bottom.outerHeight();

		if (mediaHeight >= top+top) { mTop = -top; } else { mTop = -(mediaHeight/2); }
		if (mediaWidth >= left+left) { mLeft = -left; } else { mLeft = -(mediaWidth/2); }

		var dim = getCenterDimensions();

		if (options.resizeOpening ) { 
			center.animate({width: dim['width'], height: dim['height'] , top: dim['top'], marginTop: dim['marginTop'], marginLeft: dim['marginLeft']}, options.resizeDuration, mediaAnimate);
			// center.animate({width: mediaWidth, height: mediaHeight, marginTop: mTop, marginLeft: mLeft}, options.resizeDuration, mediaAnimate);
		} else { 
			center.css({width: mediaWidth, height: mediaHeight, marginTop: mTop, marginLeft: mLeft}); mediaAnimate(); 
		}

		centerImage();
		resizeVideos();

		// set the touch behavior only for images
		if (mediaType == "img") {
			var el = document.getElementById("mbMedia");
			// media.addEventListener("dblclick", centerImage, false);
			el.addEventListener("touchstart", touchStart, false);
			el.addEventListener("touchmove", touchMove, false);
			el.addEventListener("touchend", touchEnd, false);
			el.addEventListener("touchcancel", touchCancel, false);
			
		}
	}

	function mediaAnimate() {
		media.animate({opacity: 1}, 360, captionAnimate);
	}

	function captionAnimate() {
		autoplay();
		center.removeClass('mbLoading');
		bottom.animate({opacity: 1}, 240);
	}

	function stop() {
		if (preload) {
			if (mediaType == "inline" && !options.inlineClone) preload.adopt(media.getChildren());	// prevents loss of adopted data
			preload.onload = function(){}; // $empty replacement
		}
		prevLink.css("display", "none");
		nextLink.css("display", "none");
		playLink.css("display", "none");
		pauseLink.css("display", "none");
	}

	function close() {
		media.addClass('paused');
		resetAutoplay();
		if (activeMedia >= 0) {
			if (mediaType == "inline" && !options.inlineClone) preload.adopt(media.getChildren());	// prevents loss of adopted data
			preload.onload = function(){}; // $empty replacement
			media.empty();
			for (var f in fx) fx[f].cancel();
			center.css("display", "none");
			toolbar.css("display", "none");
			$('#mbOverlay').fadeTo( 360, 0, function() {$(this).css('display', 'none');});
			// fx.overlay.chain(setup).start(0);
		}
		return false;
	}

	// method to get the touch device interaction
	// TOUCH-EVENTS SINGLE-FINGER SWIPE-SENSING JAVASCRIPT
	// Courtesy of PADILICIOUS.COM and MACOSXAUTOMATION.COM
	// win8 : MSPointerDown // TODO : check if it works
	var posStart = new Array();
	var posCur = new Array();
	var fingerCount = 0;
	posStart['x0'] = 0;
	posStart['y0'] = 0;
	posCur['x0'] = 0;
	posCur['y0'] = 0;
	var minLength = 72; // the shortest distance the user may swipe
	var swipeLength = 0;
	var swipeAngle = null;
	var swipeDirection = null;
	var initialPosX = null;
	var initialPosY = null;
	var imageMarginLeft = 0;
	var imageMarginTop = 0;
	var imageWidth = 0;
	var imageHeight = 0;
	var zoomRatio = 1;
	var cursorCenterX = 0;
	var cursorCenterY = 0;
	var imgmL = 0;
	var imgmT = 0;
	var touchClick = 0;

	// The 4 Touch Event Handlers

	// NOTE: the touchStart handler should also receive the ID of the triggering element
	// make sure its ID is passed in the event call placed in the element declaration, like:

	function touchStart(event) {
		// disable the standard ability to select the touched object
		event.preventDefault();
		fingerCount = event.touches.length;
		touchClick++;

		if (fingerCount == 1) {
			setTimeout(function() {
				if (touchClick == 1) {

				} else if (touchClick == 2) {
					unzoomImage();
					touchClick = 0;
				}
				touchClick = 0;
			}, 300);
		} else {
			touchClick = 0;
		}
		// store the initial image dimensions
		imageWidth = media.find('img').width();
		imageHeight = media.find('img').height();

		if ( fingerCount == 1 ) {
			// get the coordinates of the touch
			posStart['x0'] = event.touches[0].pageX;
			posStart['y0'] = event.touches[0].pageY;
			// store the image margins
			imageMarginLeft = media.find('img').css('marginLeft');
			imageMarginTop = media.find('img').css('marginTop');
		} else if ( fingerCount == 2 ) {
			// pinch with 2 fingers to zoom
			// get the coordinates of the touch
			posStart['x0'] = event.touches[0].pageX;
			posStart['x1'] = event.touches[1].pageX;
			posStart['y0'] = event.touches[0].pageY;
			posStart['y1'] = event.touches[1].pageY;
			cursorCenterX = Math.abs(posStart['x1'] + posStart['x0']) / 2;
			cursorCenterY = Math.abs(posStart['y1'] + posStart['y0']) / 2;
		} else {
			// more than one finger touched so cancel
			touchCancel(event);
		}
	}

	function touchMove(event) {
		event.preventDefault();
		if ( event.touches.length == 1 ) {
			posCur['x0'] = event.touches[0].pageX;
			posCur['y0'] = event.touches[0].pageY;
			if (media.find('img').hasClass('zoomingck')) {
				moveImageck();
			}
		} else if ( event.touches.length == 2 ) {
			posCur['x0'] = event.touches[0].pageX;
			posCur['x1'] = event.touches[1].pageX;
			posCur['y0'] = event.touches[0].pageY;
			posCur['y1'] = event.touches[1].pageY;
			calculateZoom();
			zoomImageck();
		} else {
			touchCancel(event);
		}
	}
	
	function touchEnd(event) {
		event.preventDefault();
		// check to see if more than one finger was used and that there is an ending coordinate
		if ( fingerCount == 1 && posCur['x0'] != 0 ) {
			// use the Distance Formula to determine the length of the swipe
			swipeLength = Math.round(Math.sqrt(Math.pow(posCur['x0'] - posStart['x0'],2) + Math.pow(posCur['y0'] - posStart['y0'],2)));
			// if the user swiped more than the minimum length, perform the appropriate action
			if ( swipeLength >= minLength && !media.find('img').hasClass('zoomingck')) {
				calculateAngle();
				determineSwipeDirection();
				processingRoutine();
				touchCancel(event); // reset the variables
			} else {
				touchCancel(event);
			}
		} else {
			touchCancel(event);
		}
	}

	function touchCancel(event) {
		// reset the variables back to default values
		fingerCount = 0;
		posStart['x0'] = 0;
		posStart['y0'] = 0;
		posCur['x0'] = 0;
		posCur['y0'] = 0;
		swipeLength = 0;
		swipeAngle = null;
		swipeDirection = null;
		initialPosX = null;
		initialPosY = null;
		initialPinchDistance = 0;
		endPinchDistance = 0;
		zoomRatio = 1;
		imageWidth = 0;
		imageHeight = 0;
		cursorCenterX = 0;
		cursorCenterY = 0;
		imgmL = 0;
		imgmT = 0;
		touchClick = touchClick > 2 ? 0 : touchClick;
	}

	function calculateAngle() {
		var X = posStart['x0']-posCur['x0'];
		var Y = posCur['y0']-posStart['y0'];
		var Z = Math.round(Math.sqrt(Math.pow(X,2)+Math.pow(Y,2))); //the distance - rounded - in pixels
		var r = Math.atan2(Y,X); //angle in radians (Cartesian system)
		swipeAngle = Math.round(r*180/Math.PI); //angle in degrees
		if ( swipeAngle < 0 ) { swipeAngle =  360 - Math.abs(swipeAngle); }
	}

	function calculateZoom() {
		var startDistX = Math.abs(posStart['x1'] - posStart['x0']);
		var startDistY = Math.abs(posStart['y1'] - posStart['y0']);
		var startDist = Math.round(Math.sqrt(Math.pow(startDistX,2)+Math.pow(startDistY,2)));

		var curDistX = Math.abs(posCur['x1'] - posCur['x0']);
		var curDistY = Math.abs(posCur['y1'] - posCur['y0']);
		var curDist = Math.round(Math.sqrt(Math.pow(curDistX,2)+Math.pow(curDistY,2)));

		zoomRatio = curDist / startDist;
	}

	function determineSwipeDirection() {
		if ( (swipeAngle <= 45) && (swipeAngle >= 0) ) {
			swipeDirection = 'left';
		} else if ( (swipeAngle <= 360) && (swipeAngle >= 315) ) {
			swipeDirection = 'left';
		} else if ( (swipeAngle >= 135) && (swipeAngle <= 225) ) {
			swipeDirection = 'right';
		} else if ( (swipeAngle > 45) && (swipeAngle < 135) ) {
			swipeDirection = 'down';
		} else {
			swipeDirection = 'up';
		}
	}
	
	function processingRoutine() {
		if ( swipeDirection == 'left' ) {
			next();
		} else if ( swipeDirection == 'right' ) {
			previous();
		} else if ( swipeDirection == 'up' ) {

		} else if ( swipeDirection == 'down' ) {

		}
	}

	function zoomImageck() {
		var image = media.find('img');

		if (! image.attr('data-width')) image.attr('data-width', imageWidth);

		if ( ( 
			image.width() > image.attr('data-width') 
			|| (image.width() <= image.attr('data-width') && zoomRatio > 1)
			)
			&& (image.width() / mediaWidth < 10 || zoomRatio < 1)
			) {
			
			var zoomSpeed = 1/2;
			// slow zoom and fast unzoom
			if (zoomRatio > 1) zoomRatio = (zoomRatio -1) * zoomSpeed + 1;

			cursorCenterX = $(window).width() / 2; //force the cursor position to be on center to avoid glitches
			cursorCenterY = $(window).height() / 2; //force the cursor position to be on center to avoid glitches

			var a = cursorCenterX - parseInt(imageMarginLeft);
			var b = cursorCenterY - parseInt(imageMarginTop);
			var newmL = a * zoomRatio - cursorCenterX;
			var newmT = b * zoomRatio - cursorCenterY;

			image.addClass('zoomingck').css({
				'max-width': 'none',
				'max-height': 'none'
			});

			image.css({
				'width': imageWidth*zoomRatio,
				'margin-left': -newmL + 'px',
				'margin-top': -newmT + 'px'
			});
		} else if (image.width() <= image.attr('data-width')) {
			unzoomImage();
		}
	}
	
	function unzoomImage() {
		var image = media.find('img');
		image.width(image.attr('data-width'))
			.css('max-width', '100%')
			.css('max-height', '100%')
			.css('margin-left', '0')
			.removeClass('zoomingck');
		centerImage();
	}

	function moveImageck() {
	
		var image = media.find('img');
		imgmL = imgmL || image.css('margin-left');
		imgmT = imgmT || image.css('margin-top');
		initialPosX = initialPosX || event.touches[0].pageX;
		initialPosY = initialPosY || event.touches[0].pageY;
		var offsetX = initialPosX - event.touches[0].pageX;
		var offsetY = initialPosY - event.touches[0].pageY;

		if ( image.width() > $(window).width() ) {
			if ( (parseInt(imageMarginLeft) - offsetX) < 0
				&& $(window).width() - (parseInt(imageMarginLeft) - offsetX) < (image.width()) ) {
					image.css('margin-left', parseInt(imgmL) - offsetX);
			} else if ($(window).width() - (parseInt(imageMarginLeft) - offsetX) > (image.width())) {
				// image.css('marginLeft', -image.width() + $(window).width());
			}
		}

		if ( image.height() > $(window).height() ) {
			if ( (parseInt(imageMarginTop) - offsetY) < 0
				&& $(window).height() - (parseInt(imageMarginTop) - offsetY) < (image.height()) ) {
					image.css('margin-top', parseInt(imgmT) - offsetY);
			} else if ($(window).height() - (parseInt(imageMarginTop) - offsetY) > (image.height())) {
				// image.css('marginTop', -image.height() + $(window).height());
			}
		}
	}



		var Mediaboxck = function (links, _options, linkMapper, linksFilter) {

			if (! links) return false;

			linkMapper = linkMapper || function(el) {
				elrel = $(el).attr(_options.attribType).split(/[\[\]]/);
				elrel = elrel[1];
				return [$(el).attr('href'), $(el).attr('data-title'), elrel];	// thanks to Dušan Medlín for figuring out the URL bug!
			};

			linksFilter = linksFilter || function() {
				return true;
			};

//			var links = this;
			links.map(function() {
				$(this).data('mediaboxck_done', '1').attr('data-title', $(this).attr('title')).removeAttr('title');
				// if ($(this).attr('data-autoload') == '1') $(this).trigger('click');
			});

/*  clickBlock code - remove the following three lines to enable right-clicking on links to images  */
			// links.contextmenu(function(e){
				// if (this.toString().match(/\.gif|\.jpg|\.jpeg|\.png/i)) e.preventDefault();
			// });

			// links.off("click").on("click", function(e) {
			links.on("click", function(e) {
				curlink = this;
				e.preventDefault();
				// Build the list of media that will be displayed
				var filteredArray = links.filter( function() { return linksFilter(curlink, this); });
				var filteredLinks = [];
				var filteredHrefs = [];

				filteredArray.each(function(index, item){
					if(filteredHrefs.indexOf(item.toString()) < 0) {
						filteredLinks.push(filteredArray[index]);
						filteredHrefs.push(filteredArray[index].toString());
					}
				});

				return Mediabox.open(filteredLinks.map(linkMapper), filteredHrefs.indexOf(this.toString()), _options);
			});

			links.each(function() {
				if ($(this).attr('data-autoload') == '1') {
					$(this).trigger('click');
					// auto fadeout if the setting has been set
					var dataFadeout = parseInt($(this).attr('data-fadeout'));
					if (dataFadeout > 0) {
						setTimeout(function() {
							close();
						}, dataFadeout);
					}
				}
			});

			return links;
		}
		window.Mediaboxck = Mediaboxck;
})(jQuery);

// Mediabox.scanPage = function() {
//	if (Browser.Platform.ios && !(navigator.userAgent.match(/iPad/i))) return;	// this quits the process if the visitor is using a non-iPad iOS device (iPhone or iPod Touch)
	
	// var links = jQuery("a").filter(function(i) {
		// if ( jQuery(this).attr('rel') ) {
			// var patt = new RegExp(/^lightbox/i);
			// return patt.test(jQuery(this).attr('rel'));
		// }
	// });
	
	// links.mediabox({/* Put custom options here */}, null, function(curlink, el) {
		// var rel0 = curlink.rel.replace(/[\[\]|]/gi," ");
		// var relsize = rel0.split(" ");
		// return (curlink == el) || ((curlink.rel.length > 8) && el.rel.match(relsize[1]));
	// });
// };

// jQuery(document).ready(function(){
// Mediabox.scanPage();
// });


// jQuery SWFObject v1.1.1 MIT/GPL @jon_neal
// http://jquery.thewikies.com/swfobject
(function(f,h,i){function k(a,c){var b=(a[0]||0)-(c[0]||0);return b>0||!b&&a.length>0&&k(a.slice(1),c.slice(1))}function l(a){if(typeof a!=g)return a;var c=[],b="";for(var d in a){b=typeof a[d]==g?l(a[d]):[d,m?encodeURI(a[d]):a[d]].join("=");c.push(b)}return c.join("&")}function n(a){var c=[];for(var b in a)a[b]&&c.push([b,'="',a[b],'"'].join(""));return c.join(" ")}function o(a){var c=[];for(var b in a)c.push(['<param name="',b,'" value="',l(a[b]),'" />'].join(""));return c.join("")}var g="object",m=true;try{var j=i.description||function(){return(new i("ShockwaveFlash.ShockwaveFlash")).GetVariable("$version")}()}catch(p){j="Unavailable"}var e=j.match(/\d+/g)||[0];f[h]={available:e[0]>0,activeX:i&&!i.name,version:{original:j,array:e,string:e.join("."),major:parseInt(e[0],10)||0,minor:parseInt(e[1],10)||0,release:parseInt(e[2],10)||0},hasVersion:function(a){a=/string|number/.test(typeof a)?a.toString().split("."):/object/.test(typeof a)?[a.major,a.minor]:a||[0,0];return k(e,a)},encodeParams:true,expressInstall:"expressInstall.swf",expressInstallIsActive:false,create:function(a){if(!a.swf||this.expressInstallIsActive||!this.available&&!a.hasVersionFail)return false;if(!this.hasVersion(a.hasVersion||1)){this.expressInstallIsActive=true;if(typeof a.hasVersionFail=="function")if(!a.hasVersionFail.apply(a))return false;a={swf:a.expressInstall||this.expressInstall,height:137,width:214,flashvars:{MMredirectURL:location.href,MMplayerType:this.activeX?"ActiveX":"PlugIn",MMdoctitle:document.title.slice(0,47)+" - Flash Player Installation"}}}attrs={data:a.swf,type:"application/x-shockwave-flash",id:a.id||"flash_"+Math.floor(Math.random()*999999999),width:a.width||320,height:a.height||180,style:a.style||""};m=typeof a.useEncode!=="undefined"?a.useEncode:this.encodeParams;a.movie=a.swf;a.wmode=a.wmode||"opaque";delete a.fallback;delete a.hasVersion;delete a.hasVersionFail;delete a.height;delete a.id;delete a.swf;delete a.useEncode;delete a.width;var c=document.createElement("div");c.innerHTML=["<object ",n(attrs),">",o(a),"</object>"].join("");return c.firstChild}};f.fn[h]=function(a){var c=this.find(g).andSelf().filter(g);/string|object/.test(typeof a)&&this.each(function(){var b=f(this),d;a=typeof a==g?a:{swf:a};a.fallback=this;if(d=f[h].create(a)){b.children().remove();b.html(d)}});typeof a=="function"&&c.each(function(){var b=this;b.jsInteractionTimeoutMs=b.jsInteractionTimeoutMs||0;if(b.jsInteractionTimeoutMs<660)b.clientWidth||b.clientHeight?a.call(b):setTimeout(function(){f(b)[h](a)},b.jsInteractionTimeoutMs+66)});return c}})(jQuery,"flash",navigator.plugins["Shockwave Flash"]||window.ActiveXObject);