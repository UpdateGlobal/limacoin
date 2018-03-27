
<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script   src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script   src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script  src="https://maps.google.com/maps/api/js?key=AIzaSyCz6xX2nI6cMkePba_DHQcs0MkR7m2IuvE&callback=initMap"  ></script>
<!-- GOOGLE MAP -->
<script   src="js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->

<script   src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<script  src="js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script  src="js/tickerNews.min.js"></script><!-- MARQUEE SCROLL -->
<!-- MARQUEE FUNCTiON -->
<script type="text/javascript">
	$(function(){
		var timer = !1;
		_Ticker = $("#T1").newsTicker();
		_Ticker.on("mouseenter",function(){
			var __self = this;
			timer = setTimeout(function(){
				__self.pauseTicker();
			},200);
		});
		_Ticker.on("mouseleave",function(){
			clearTimeout(timer);
			if(!timer) return !1;
			this.startTicker();
		});
	});
</script>
<!-- REVOLUTION JS FILES -->

<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script type="text/javascript"  src="js/rev-script-4.js"></script>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-dot bg-primary"><i class="fa fa-bitcoin"></i></div>
            <div class="step" id="cssload-s1"></div>
            <div class="step" id="cssload-s2"></div>
            <div class="step" id="cssload-s3"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

