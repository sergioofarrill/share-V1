  <div class="clear"></div>

<footer class="content-info container" role="contentinfo">
  <div class="row">
    <section id="contact">
	  <h2 class="white">CONTACT US</h2>
	  <div class="truelogo">
	    <div class="square1"></div>
	    <div class="square2"></div>
	    <div class="square3"></div>
	  </div>
	  <div class="col_3 contact_bg">
	     <div class="social-icons">
	     		<ul>
	     			<li><a href="http://facebook.com/MCSAATCHISHARE"> <img src="<?php get_bloginfo('home'); ?>assets/img/socialicons/facebook-32.png"></a></li>
	     		<!--<li><a href="http://www.youtube.com/MCSAATCHISHARE"> <img src="assets/img/socialicons/youtube-32.png"></a></li>--> 
            <li><a href="https://twitter.com/MCSAATCHISHARE"> <img src="<?php get_bloginfo('home'); ?>assets/img/socialicons/twitter-32.png"></a></li>
	     		<li><a href="https://plus.google.com/u/0/b/113754736926873558842/113754736926873558842/posts"> <img src="<?php get_bloginfo('home'); ?>assets/img/socialicons/googleplus-32.png"></a></li>
	     		</ul>
	     	</div>
	  <h3 class="company-title">M&C SAATCHI</h3>
  
    <div class="contact_info_mobile">
    <a class="address" href="http://maps.apple.com/?daddr=2032+Broadway,+Santa Monica,+CA+90404,&saddr=Current%20Location"><button type="button" >2032 Broadway, <br/>Santa Monica, CA <br/> ZIP 90404</button></a>
   <p>Phone: </p><a class="phone" href="tel:+13104016070"><button type="button" >+310 401 6070</button></a>
   <p>Fax: </p> <a class="phone" href="tel:+13102641910"><button type="button" >+310 264 1910</button></a>
    </div>
	 </div> 
 
  <a href="#" class="go-top"><img src="assets/img/share_arrow_top.png" /></a>
	</section>

	</div> <!-- Container -->
    </div>
  
</footer>

<!--Changing Background-->

<!--Changing Background-->

<!-- PARAMETERS

Loop {doLoop:true}

 -->
    
<script type="text/javascript">
  
      $(function() {
            var BV = new $.BigVideo({useFlashForFirefox:false});
            var vids = [
            'http://mcsaatchi-share.com/video/1st_piece.webm',
                'http://mcsaatchi-share.com/video/2b_piece.webm',
                'http://mcsaatchi-share.com/video/2nd_piece.webm',
                'http://mcsaatchi-share.com/video/9th_piece.webm',
                'http://mcsaatchi-share.com/video/11th_piece.webm',
              'http://mcsaatchi-share.com/video/1st_piece.mp4',
                'http://mcsaatchi-share.com/video/2b_piece.mp4',
                'http://mcsaatchi-share.com/video/2nd_piece.mp4',
                'http://mcsaatchi-share.com/video/9th_piece.mp4',
                'http://mcsaatchi-share.com/video/11th_piece.mp4'
                
                
            ];
            var altvid = [
                'http://mcsaatchi-share.com/video/1st_piece.ogv',
                'http://mcsaatchi-share.com/video/2b_piece.ogv',
                'http://mcsaatchi-share.com/video/2nd_piece.ogv',
                'http://mcsaatchi-share.com/video/9th_piece.ogv',
                'http://mcsaatchi-share.com/video/11th_piece.ogv'
                
                
            ];
            vids.sort(function() { return 0.5 - Math.random() }); // random order on load
      BV.init();
      if (Modernizr.touch) {
      BV.show('http://mcsaatchi-share.com/assets/img/SHARE-BG.jpg');
            } 
      else {
      BV.show(vids,{ambient:true, },{altSource:altvid});
      }
      });
    
</script>  


<!--PAGE TRANSITIONS-->
<!--Hide Body -->
<script type="text/javascript">
$(document).ready(function() {
$('body').css('display', 'none');
$('body').fadeIn(1500);
});
</script>
<!--Smooth Scrolling-->
<script type="text/javascript">
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
    || location.hostname == this.hostname) {

  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  if (target.length) {
    $('html,body').animate({
      scrollTop: target.offset().top
    }, 1000);
    return false;
  }
}
});
});
</script>

<!-- NIVO SLIDER-->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" ></script>
    <script src="http://mcsaatchi-share.com/assets/js/video-js/video.js"></script>
    <script src="http://mcsaatchi-share.com/assets/js/imagesloaded.js" ></script>
    <script src="http://mcsaatchi-share.com/assets/js/bigvideo.js" ></script>
    <script src="http://mcsaatchi-share.com/assets/js/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="http://mcsaatchi-share.com/assets/js/jquery.anythingslider.min.js" type="text/javascript"></script>
    <script src="http://mcsaatchi-share.com/assets/js/jquery.anythingslider.video.min.js" type="text/javascript"></script>
    <script src="http://mcsaatchi-share.com/assets/js/custom.js" ></script>

 <script type="text/javascript">
   $('#txtSlider').bxSlider({ 
    speed: '4000',
    pause: '10000',
    auto: 'true',
    autoDelay: '3000',
    controls: 'false'
    
    
   });
   
</script>
    
<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider({
effect:"random",
      slices:15,
      boxCols:8,
      boxRows:4,
      animSpeed:500,
      pauseTime:6000,
      startSlide:0,
      directionNav:true,
      controlNav:true,
      controlNavThumbs:false,
      pauseOnHover:true,
      manualAdvance:false
});
});
</script>

<!--SCROLL TO TOP-->
<script>
    $(document).ready(function() {
      // Show or hide the sticky footer button
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
      });
      
      // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
        
        $('html, body').animate({scrollTop: 0}, 300);
      })
    });
  </script>

<?php wp_footer(); ?>