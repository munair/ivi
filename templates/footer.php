<section id="footer" class="section-footer">
	<!-- slider animation -->
	<ul class="keyframe-slider">
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="v-center">
	        <div class="col-md-3">
	                <h2>ABOUT IVI</h2>
	                <p><a href="ivi-in-brief/">IVI In Brief</a></p>
	                <p><a href="history/">History</a></p>
	                <p><a href="our-approach/">Our Approach</a></p>
	                <p><a href="how-we-work">How We Work</a></p>
	                <p><a href="where-we-work">Where We Work</a></p>
	                <p><a href="our-partners">Our Partners</a></p>
	                <h2>LEADERSHIP</h2>
	                <p><a href="executive-leadership-team/">Executive Leadership</a></p>
	                <p><a href="board-of-trustees/">Board of Trustees</a></p>
	                <p><a href="scientific-advisory-group/">Scientific Advisory Group</a></p>
	        </div>
	        <div class="col-md-3">
	                <h2>FOCUS AREAS</h2>
	                <p><a href="#">Discover</a></p>
	                <p><a href="#">Develop</a></p>
	                <p><a href="#">Deliver</a></p>
	                <p><a href="#">Sustain</a></p>
	                <div class="spacer"></div>
	                <p><a href="cholera/">Cholera</a></p>
	                <p><a href="enteric-fever/">Enteric Fever</a></p>
	                <p><a href="dengue/">Dengue</a></p>
	                <p><a href="mers/">MERS</a></p>
	                <p><a href="other/">Other Research Areas</a></p>
	        </div>
	        <div class="col-md-3">
	                <h2>VACCINE RESOURCES</h2>
	                <p><a href="vaccinology-course/">Vaccinology Course</a></p>
	                <p><a href="institutional-review-board/">Institutional Review Board</a></p>
	                <p><a href="links/">Links</a></p>
                	<h2>OUR IMPACT</h2>
	                <p><a href="non-scientific-publications/">Journal Publications</a></p>
	                <p><a href="annual-report-newsletters-2/">Annual Report &amp; Newsletters</a></p>
	                <p><a href="journal-publications/">IVI Publications</a></p>
	                <p><a href="multimedia/">Multimedia</a></p>
	        </div>
	        <div class="col-md-3">
                	<h2>SUPPORT US</h2>
	                <p><a href="support-ivi/">Support IVI</a></p>
	                <p><a href="our-donors">Our Donors</a></p>
	                <p><a href="korea-support-committee-for-the-ivi-ksc">Korea Support Committee</a></p>
        	</div>
	</div>
</section>

<script type="text/javascript">
        function pop(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/international-vaccine-institute/pop.mp3'); audio.play(); }
        function tick(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/international-vaccine-institute/tick.mp3'); audio.play(); }
        function sploob(){ var audio = new Audio('https://s3.ap-northeast-2.amazonaws.com/international-vaccine-institute/sploob.m4a'); audio.play(); }
</script>

<script>
	<!-- make reveal calls last -->
      	// use rotation in reveal configuration
	var logoReveal = { origin : 'left', distance : '25vw', duration : 2000, easing : 'ease-out' };
	var titleReveal = { origin : 'top', duration : 1000, easing : 'ease-out' };
	var aboutReveal = { origin : 'left', duration : 1500, easing : 'ease-out' };
	var discoverReveal = { origin : 'right', duration : 1000, easing : 'ease-out' };
	var developReveal = { origin : 'bottom', duration : 2000, easing : 'ease-out' };
	var deliverReveal = { origin : 'left', duration : 3000, easing : 'ease-out' };
	var sustainReveal = { origin : 'top', duration : 4000, easing : 'ease-out' };
	var rightReveal = { origin : 'right', duration : 1000, easing : 'ease-out' };
	var bottomReveal = { origin : 'bottom', duration : 1000, easing : 'ease-out' };
	var leftReveal = { origin : 'left', duration : 1000, easing : 'ease-out' };
	var topReveal = { origin : 'top', duration : 1000, easing : 'ease-out' };
	var upReveal = {  direction: 'up', power: '5%', duration : 1000, easing : 'ease-out' };
	var downReveal = {  direction: 'down', power: '5%', duration : 2000, easing : 'ease-out' };

      	sr.reveal('.logoReveal', logoReveal);
      	sr.reveal('.titleReveal', titleReveal);
      	sr.reveal('.aboutReveal', aboutReveal);
      	sr.reveal('.discoverReveal', discoverReveal);
      	sr.reveal('.developReveal', developReveal);
      	sr.reveal('.deliverReveal', deliverReveal);
      	sr.reveal('.sustainReveal', sustainReveal);
      	sr.reveal('.rightReveal', rightReveal);
      	sr.reveal('.bottomReveal', bottomReveal);
      	sr.reveal('.leftReveal', leftReveal);
      	sr.reveal('.topReveal', topReveal);
      	sr.reveal('.upReveal', upReveal);
      	sr.reveal('.downReveal', downReveal);
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.section-navigation').addClass('sticky');
    } else {
        $('.section-navigation').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.section-navigation').hasClass('open-nav')) {
        $('.section-navigation').removeClass('open-nav');
    } else {
        $('.section-navigation').addClass('open-nav');
    }
});

$('.section-navigation li a').click(function() {
    if ($('.section-navigation').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.section-navigation').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
</script>
