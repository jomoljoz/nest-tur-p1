<?php
include "connection.php";
include_once("main_head.php");
//include_once("tour-package.php");
?>



<!--<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >

<!-- Mirrored from demo.hot-themes.com/joomla/paradise/index.php/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Dec 2018 06:23:20 GMT -->
<!-- Added by HTTrack --><!--<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<!--<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--[if lt IE 9]>
	<script src="/joomla/paradise/templates/sparky_framework/js/html5shiv.min.js"></script>
	<script src="/joomla/paradise/templates/sparky_framework/js/respond.min.js"></script>
<![endif]-->

<!--<link href="../templates/sparky_framework/images/icons/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="../templates/sparky_framework/images/icons/icon180x180.png" rel="apple-touch-icon" />
<link href="../templates/sparky_framework/images/icons/icon192x192.png" rel="icon" sizes="192x192" />

<base  />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Super User" />
	<meta name="generator" content="Joomla! - Open Source Content Management" />
	<title>Gallery</title>
	<link href="component/search/indexcbc7.html?Itemid=512&amp;format=opensearch" rel="search" title="Search Hot Paradise" type="application/opensearchdescription+xml" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700,900&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="../templates/sparky_framework/css/normalize.css" rel="stylesheet" type="text/css" />
	<link href="../media/jui/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../templates/sparky_framework/css/sparky-id83-180526075302.css" rel="stylesheet" type="text/css" />
	<link href="../modules/mod_hot_responsive_lightbox/tmpl/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">


#responsivelightboxgallery {
	text-align: center;
}

#responsivelightboxgallery ul {
	margin: 0;
	padding: 0;
}

#responsivelightboxgallery li {
	margin:10px 10px;
	display: inline-block;
	background: none;
	padding: 0;
}

#responsivelightboxgallery img {
	width:160px;
	height:107px;
	border:3px solid #e7f0f9;
	padding:0px;
	background: #eee;
	-webkit-box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 );
	box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 );
	-webkit-transition: -webkit-box-shadow .3s ease, border-color .3s ease;
	transition: box-shadow .3s ease, border-color .3s ease;
}

#responsivelightboxgallery img:hover,
#responsivelightboxgallery img:focus {
	border:3px solid #d44457;
	background: #fff;
	-webkit-box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 );
	box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 );
}

#imagelightbox-overlay {
	background-color: rgba( 0,0,0, .9 );
}

@media only screen and (max-width: 41.250em) {

	#responsivelightboxgallery {
		width: 100%;
	}
}


	</style>
	<script src="../media/jui/js/jquery.min0ba0.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script>
	<script src="../media/jui/js/jquery-noconflict0ba0.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script>
	<script src="../media/jui/js/jquery-migrate.min0ba0.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script>
	<script src="../media/system/js/caption0ba0.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script>
	<script src="../media/jui/js/bootstrap.min0ba0.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script>
	<script src="../templates/sparky_framework/js/sparky-id83-180526075302.js" type="text/javascript"></script>
	<script src="../modules/mod_hot_responsive_lightbox/js/imagelightbox.min.js" type="text/javascript"></script>
	<script src="../modules/mod_hot_responsive_lightbox/js/hot_responsive_lightbox.js" type="text/javascript"></script>-->
	<!--[if lt IE 9]><script src="/joomla/paradise/media/system/js/html5fallback.js?8ba14361d8bc7355c05fc192c4c37f9d" type="text/javascript"></script><![endif]-->
	<!--<script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
	</script>


<script type="text/javascript" src="../templates/sparky_framework/js/responsive-nav.min.js"></script></head>
<body class="sparky_inner gallery">
<div id="blocker"></div><div class="sparky_wrapper">
    <div  class="sparky_row1 sparky_full logorow one">
        <div class="sparky_container">
        <div class="sparky_cell mp_logo sparkle3">
	<div class="sparky_feature">
		<a href="http://demo.hot-themes.com/joomla/paradise" class="sparky_logo_link">
					    <div class="sparky_logo"><span>PA</span><span>RA</span><span>DI</span><span>SE</span></div>
		    <div class="sparky_slogan"></div>
		    	    </a>
	</div>
</div><div class="sparky_cell mp_topmenu sparkle7">
	<div class="sparky_menu">
	
<nav class="container_topmenu">

	
	<ul class="menu navv mnu_topmenu">
<li class="item-195"><a href="../index-2.html" >Home</a></li><li class="item-346"><a href="about-us.html" >About Us</a></li><li class="item-512 current active"><a href="gallery.html" >Gallery</a></li><li class="item-344 deeper parent"><a href="#" >Features</a><ul><li class="item-352 deeper parent"><a href="#" >Extensions</a><ul><li class="item-353"><a href="features/extensions/hot-swipe-carousel.html" >Hot Swipe Carousel</a></li><li class="item-426"><a href="features/extensions/hot-responsive-lightbox.html" >Hot Responsive Lightbox</a></li><li class="item-354"><a href="features/extensions/hot-slicebox.html" >Hot Slicebox</a></li><li class="item-355"><a href="features/extensions/hot-maps.html" >Hot Maps</a></li><li class="item-534"><a href="features/extensions/hot-counters.html" >Hot Counters</a></li></ul></li><li class="item-348"><a href="features/infinite-color-schemes.html" >Color Schemes</a></li><li class="item-221 deeper parent"><a href="#" >Color Variants</a><ul><li class="item-142"><a href="../indexa998.html?style=1" >Color Variant 1 (Red)</a></li><li class="item-143"><a href="../index655a.html?style=2" >Color Variant 2 (Green)</a></li><li class="item-144"><a href="../index28f0.html?style=3" >Color Variant 3 (Blue)</a></li><li class="item-567"><a href="../index2262.html?style=4" >Color Variant 4 (Orange)</a></li></ul></li><li class="item-347"><a href="features/drop-down-menu.html" >Drop-down Menu</a></li><li class="item-148"><a href="features/installation-and-usage.html" >Installation and Usage</a></li><li class="item-349"><a href="features/module-positions.html" >Module Positions</a></li><li class="item-350"><a href="features/no-conflicts.html" >No Conflicts</a></li><li class="item-351"><a href="features/seo-friendly.html" >SEO Friendly</a></li><li class="item-562"><a href="features/search-site.html" >Search Site</a></li><li class="item-356"><a href="features/typography.html" >Typography</a></li></ul></li><li class="item-465"><a href="blog.html" >Blog</a></li><li class="item-464"><a href="contact-us.html" >Contact Us</a></li>	</ul>

	</nav>
	</div>
</div>-->		<div class="sparky_cell mp_search sparkle2">
							<div class="moduletable">
						<div class="search">
	<!--<form action="http://demo.hot-themes.com/joomla/paradise/index.php/gallery" method="post" class="form-inline">
		<label for="mod-search-searchword387" class="element-invisible">Search ...</label> <input name="searchword" id="mod-search-searchword387" maxlength="200"  class="inputbox search-query input-medium" type="search" placeholder="Search ..." /> <input type="image" alt="Submit" class="button" src="../templates/sparky_framework/images/searchButton.gif" onclick="this.form.searchword.focus();"/>		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="512" />
	</form>-->
</div>
		</div>
	
				</div>
                        </div>
    </div>
    <div  class="sparky_row5 sparky_full contentrow">
        <div class="sparky_container">
                        <main class="sparky_cell content_sparky sparkle9">
                    <div id="system-message-container">
	</div>

                                        <div class="item-page" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />
	
		
			<div class="page-header">
					<h2 itemprop="name">
				Tour Packages In Munnar			</h2>
									</div>
					
	
	
				
			
	
					<div itemprop="articleBody">
		<p><strong>Hot Responsive Lightbox</strong> is an extended version of our old Hot Lightbox module. According to the principles in modern web design, the new version of this module is <strong>responsive</strong>. This means that layout of the thumbnails doesn't have a fixed with anymore. You can still determine the size of the thumbnails, but the number of thumbnails per row now depends of the available screen space. The lightbox slideshow (pop-up) of this module is responsive as well and it won't show anything out of the screen boundaries. The width of the big image is now no more than the overall screen space. Furthermore, the lightbox slideshow is <strong>touch friendly</strong>, so user can browse between the photos by swiping on the screen.</p> 	</div>

						
							</div>

                                        <aside class="belowcontent">
                    			<div class="moduletable">
						<script>
jQuery(document).ready(function() {
		//	ALL COMBINED
	var selectorF = 'a[data-imagelightbox="fgallery"]';
	var instanceF = jQuery( selectorF ).imageLightbox(
	{
		onStart:		function() { hotResponsiveLightbox.overlayOn(); hotResponsiveLightbox.closeButtonOn( instanceF ); hotResponsiveLightbox.arrowsOn( instanceF, selectorF ); },
		onEnd:			function() { hotResponsiveLightbox.overlayOff(); hotResponsiveLightbox.captionOff(); hotResponsiveLightbox.closeButtonOff(); hotResponsiveLightbox.arrowsOff(); hotResponsiveLightbox.activityIndicatorOff(); },
		onLoadStart: 	function() { hotResponsiveLightbox.captionOff(); hotResponsiveLightbox.activityIndicatorOn(); },
		onLoadEnd:	 	function() { hotResponsiveLightbox.captionOn(); hotResponsiveLightbox.activityIndicatorOff(); jQuery( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
	});
	
});
</script>
<div id="responsivelightboxgallery">
	<ul>
	<li><a href="../images/gallery/gallery_image01.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image01.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image02.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image02.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image03.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image03.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image04.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image04.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image05.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image05.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image06.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image06.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image07.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image07.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image08.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image08.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image09.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image09.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image10.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image10.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image11.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image11.jpg" alt="" /></a></li><li><a href="../images/gallery/gallery_image12.jpg" data-imagelightbox="fgallery"><img src="../images/gallery/thumbs/thumb_gallery_image12.jpg" alt="" /></a></li>	</ul>
</div>		</div>
	
                    </aside>
                                    </main>
            				<div class="sparky_cell mp_right sparkle3">
							<div class="moduletable">
							<h3>Services</h3>
						
<nav class="container_sidemenu">

	
	<ul class="menu standard mnu_sidemenu">
<li class="item-569"><a href="rooms-suites.html" >Rooms &amp; Suites</a></li><li class="item-570"><a href="restaurant.html" >Restaurant</a></li><li class="item-563"><a href="sport-activities.html" >Sport Activities</a></li><li class="item-564"><a href="delicious-food.html" >Delicious Food</a></li><li class="item-565"><a href="exotic-drinks.html" >Exotic Drinks</a></li><li class="item-566"><a href="beaches-pools.html" >Beaches &amp; Pools</a></li>	</ul>

	</nav>
		</div>
			<div class="moduletable">
							<h3>Promos</h3>
						<div class="newsflash">
					<h4 class="newsflash-title">
			<a href="gallery/38-promotions/179-discount-15-early-booking.html">
			Discount 15% Early Booking		</a>
		</h4>


	

	<p><img src="../images/promotions/early_booking.jpg" alt="Early Booking"/>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>


					<h4 class="newsflash-title">
			<a href="gallery/38-promotions/178-aqualandia-free-tickets.html">
			Aqualandia Free Tickets		</a>
		</h4>


	

	<p><img src="../images/promotions/aqua_park.jpg" alt="Aqua Park"/>Iste asperiores suscipit, consequatur debitis animi.</p>


	</div>
		</div>
	
				</div>
                        </div>
    </div>
	
<?php
	include_once("../footer.php");
?>	

    <!--<div  class="sparky_row8 sparky_full bottomrow">
        <div class="sparky_container">
        <div class="sparky_cell mp_bottommenu1 sparkle3">
	<div class="sparky_menu">
	<h3>Sport Activities</h3>
<nav class="container_bottommenu1">

	
	<ul class="menu standard mnu_bottommenu1">
<li class="item-513"><a href="beach-volley.html" >Beach Volley</a></li><li class="item-514"><a href="scuba-diving-school.html" >Scuba Diving School</a></li><li class="item-515"><a href="swimming-deep-diving.html" >Swimming &amp; Deep Diving</a></li><li class="item-516"><a href="tennis-courts-equippment.html" >Tennis Courts &amp; Equippment</a></li><li class="item-517"><a href="billiard-snooker-tables.html" >Billiard &amp; Snooker Tables</a></li><li class="item-518"><a href="darts-tournments.html" >Darts Tournments</a></li>	</ul>

	</nav>
	</div>
</div><div class="sparky_cell mp_bottommenu2 sparkle3">
	<div class="sparky_menu">
	<h3>Delicious Food</h3>
<nav class="container_bottommenu2">

	
	<ul class="menu copy_bottommenu1 standard mnu_bottommenu2">
<li class="item-519"><a href="main-restaurant.html" >Main Restaurant</a></li><li class="item-520"><a href="chinese-restaurant.html" >Chinese Restaurant</a></li><li class="item-521"><a href="pizzeria-italian-food.html" >Pizzeria &amp; Italian Food</a></li><li class="item-522"><a href="fast-food-drink-bars.html" >Fast Food &amp; Drink Bars</a></li><li class="item-523"><a href="a-la-cart-restaurants.html" >A La Cart Restaurants</a></li>	</ul>

	</nav>
	</div>
</div><div class="sparky_cell mp_bottommenu3 sparkle3">
	<div class="sparky_menu">
	<h3>Exotic Cocktails</h3>
<nav class="container_bottommenu3">

	
	<ul class="menu copy_bottommenu1 standard mnu_bottommenu3">
<li class="item-524"><a href="local-organic-winery.html" >Local Organic Winery</a></li><li class="item-525"><a href="variety-of-beers.html" >Variety of Beers</a></li><li class="item-526"><a href="99-exotic-coctails.html" >99 Exotic Coctails</a></li><li class="item-527"><a href="pool-beach-service.html" >Pool &amp; Beach Service</a></li><li class="item-528"><a href="night-bar.html" >Night Bar</a></li>	</ul>

	</nav>
	</div>
</div><div class="sparky_cell mp_bottommenu4 sparkle3">
	<div class="sparky_menu">
	<h3>Beaches & Pools</h3>
<nav class="container_bottommenu4">

	
	<ul class="menu copy_bottommenu1 standard mnu_bottommenu4">
<li class="item-529"><a href="organized-beach.html" >Organized Beach</a></li><li class="item-530"><a href="private-beaches.html" >Private Beaches</a></li><li class="item-531"><a href="aqualandia-park.html" >&quot;Aqualandia&quot; Park</a></li><li class="item-532"><a href="classic-pools.html" >Classic Pools</a></li><li class="item-533"><a href="pools-for-children.html" >Pools For Children</a></li>	</ul>

	</nav>
	</div>
</div>        </div>
    </div>
    <div  class="sparky_row9 sparky_full footerrow">
        <div class="sparky_container">
        				<div class="sparky_cell mp_footer sparkle3">
							<div class="moduletable">
						

<div class="custom"  >
	<div class="sparky_logo"><a href="../index-2.html"><span>PA</span><span>RA</span><span>DI</span><span>SE</span></a></div></div>
		</div>
	
				</div>
                <div class="sparky_cell mp_copyright sparkle9">
    <div class="sparky_feature">
    	<p class="copyright">Copyright &copy; 2018 Your Company. <a href="http://www.hotjoomlatemplates.com/">Joomla templates</a> powered by Sparky.</p>
    </div>
</div>        </div>
    </div>
</div>-->
<script type="text/javascript" src="../templates/sparky_framework/js/sparky-footer-id83-180526075302.js"></script>
</body>

<!-- Mirrored from demo.hot-themes.com/joomla/paradise/index.php/gallery by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Dec 2018 06:24:10 GMT -->
</html>