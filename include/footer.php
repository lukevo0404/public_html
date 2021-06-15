<footer class="footer text-center">
           
			<div class="container">
				<div class="clearfix">
      <div class=" footer_about">
        <div class="footer-logo wow  fadeIn" data-wow-duration="200" data-wow-delay="200ms">
					<a href=""><img src="img/logo.png" class="img-responsive"></a>
					
				</div>
      </div>
      <div class="sn_ft ss">
        <ul class="list-unstyled">
			
			<li><a href="#about">About</a></li>
			<li><a href="#token_model">Tummy's Token Model</a></li>
			<li><a href="#roadmap">Roadmap</a></li>
			<li><a href="">Whitepaper</a></li>
			<li><a href="">Buy now</a></li>
        </ul>
      </div>

      <!--<div class="sn_ft">

				<div class="footer-menu bottom_menu wow  fadeIn"   data-wow-duration="400" data-wow-delay="400ms">
				 <ul class="navbar-footer">
						
						<li><a href="">BscScan</a></li>
						<li><a href="">Coinmarketcap</a></li>
						<li><a href="">Coingecko</a></li>
					  <div style="clear:both"></div>
					</ul>
				</div>
      </div>
    </div>-->

      	<div class="footer-icons wow  fadeIn" data-wow-duration="200" data-wow-delay="600ms">
				  <a href="" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
				  <a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      		<a href="" target="_blank"><i class="fa fa-reddit" aria-hidden="true"></i></a>

				</div>
			</div>
			</div>
				<div class="footer-content">
			
				
				<div class="copy-right">
					Copyright © 2021. All Rights Reserved. </div>
				</div>
			
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<script>
var WIDTH;
var HEIGHT;
var canvas;
var con;
var g;
var pxs = [];
var rint = 60;

$(document).ready(function(){
	WIDTH = window.innerWidth;
	HEIGHT = window.innerHeight;
	$('#container').width(WIDTH).height(HEIGHT);
	canvas = document.getElementById('demo');
	$(canvas).attr('width', WIDTH).attr('height',HEIGHT);
	con = canvas.getContext('2d');
	for(var i = 0; i < 100; i++) {
		pxs[i] = new Circle();
		pxs[i].reset();
	}
	setInterval(draw,rint);
});

function draw() {
	con.clearRect(0,0,WIDTH,HEIGHT);
	for(var i = 0; i < pxs.length; i++) {
		pxs[i].fade();
		pxs[i].move();
		pxs[i].draw();
	}
}

function Circle() {
	this.s = {ttl:8000, xmax:3, ymax:2, rmax:200, rt:1, xdef:960, ydef:540, xdrift:2, ydrift: 2, random:true, blink:true};

	// fill vars
	var crFill = [
					['rgba(10,56,67,0)', 'rgba(10,56,67,1)'],
					['rgba(11,67,99,0)', 'rgba(11,67,99,1)'],
					['rgba(8,46,49,0)', 'rgba(8,46,49,1)'],
					['rgba(7,64,60,0)', 'rgba(7,64,60,1)']
				];

	// opacity var
	var opacityFill = "." + Math.floor(Math.random() * 5) + 1;

	this.reset = function() {
		this.x = (this.s.random ? WIDTH*Math.random() : this.s.xdef);
		this.y = (this.s.random ? HEIGHT*Math.random() : this.s.ydef);
		this.r = ((this.s.rmax-1)*Math.random()) + 1;
		this.dx = (Math.random()*this.s.xmax) * (Math.random() < 0.5 ? -1 : 1);
		this.dy = (Math.random()*this.s.ymax) * (Math.random() < 0.5 ? -1 : 1);
		this.hl = (this.s.ttl/rint)*(this.r/this.s.rmax);
		this.rt = Math.random()*this.hl;
		this.s.rt = Math.random()+1;
		this.stop = Math.random()*0.2+0.4;
		this.s.xdrift *= Math.random() * (Math.random() < 0.5 ? -1 : 1);
		this.s.ydrift *= Math.random() * (Math.random() < 0.5 ? -1 : 1);
		this.opacityFill = opacityFill;

		this.currentColor = Math.floor(Math.random()*crFill.length);
	};

	this.fade = function() {
		this.rt += this.s.rt;
	};

	this.draw = function() {
		if(this.s.blink && (this.rt <= 0 || this.rt >= this.hl)){
			this.s.rt = this.s.rt*-1;
		}
		else if(this.rt >= this.hl){
			this.reset();
		}
		con.beginPath();
		con.arc(this.x,this.y,this.r,0,Math.PI*2,true);
		con.globalAlpha = opacityFill;
		var newo = 1-(this.rt/this.hl);
		var cr = this.r*newo;
    
		gradient = con.createRadialGradient(this.x,this.y,0,this.x,this.y,(cr <= 0 ? 1 : cr));
		gradient.addColorStop(0.0, crFill[(this.currentColor)][1]);
		gradient.addColorStop(0.7, crFill[(this.currentColor)][1]);
		gradient.addColorStop(1.0, crFill[(this.currentColor)][0]);

		con.fillStyle = gradient;
		con.fill();

		con.closePath();
	};

	this.move = function() {
		this.x += (this.rt/this.hl)*this.dx;
		this.y += (this.rt/this.hl)*this.dy;
		if(this.x > WIDTH || this.x < 0){
			this.dx *= -1;
		} 
		if(this.y > HEIGHT || this.y < 0){
			this.dy *= -1;
		} 
	};

	this.getX = function() { return this.x; };
	this.getY = function() { return this.y; };
}
</script>
    <script src="js/water-theme-ripple.js"></script>
    <script src="js/water-theme.js"></script>
		<link rel="stylesheet" href="css/themecreative.css" />
         <!--Owl carousel script load-->
		<script src="js/owl.carousel.min.js"></script>
		
		
<script>   

$(document).ready(function() {
  var s = $(".header_area");
  var pos = s.position();
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    if (windowpos >= pos.top & windowpos >=30) {
      s.addClass("scroll_stick");
    } else {
      s.removeClass("scroll_stick");
    }
  });
  });
$('header li a').on('click', function (e) {
    var targetSec = $(this).text();
    $('html, body').animate({
        scrollTop: $('#' + targetSec).offset().top
    }, 2000);
});
$('.slider_contact .owl-carousel').owlCarousel({
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:true,
responsive:{
	0:{
		items:1
	},
	600:{
		items:1
	},
	1000:{
		items:1
	}
}
});

$('.roadmap_section .owl-carousel').owlCarousel({
loop:true,
margin:0,
autoplay:false,
autoplayTimeout:3000,
autoplayHoverPause:true,
nav:true,
responsive:{
  0:{
    items:1
  },
  600:{
    items:2
  },
  1000:{
    items:3
  }
}
});

$('.partner_main .owl-carousel').owlCarousel({
loop:true,
margin:0,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
nav:true,
responsive:{
  0:{
    items:2
  },
  600:{
    items:3
  },
  1000:{
    items:4
  }
}
});
$('.test_slider .owl-carousel').owlCarousel({
loop:true,
margin:0,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
nav:true,
responsive:{
  0:{
    items:2
  },
  600:{
    items:3
  },
  1000:{
    items:4
  }
}
});

</script> 
<!-- modern_canvas js -->
<script src="js/modern_canvas.js"></script>
<!--Wow Js File Load-->
<script src="js/wow.min.js"></script>
<!--Main js file load-->
<script src="js/main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

<script>
	$('.single_work, .single_partners, .test_slider .fee_bg_content').matchHeight();
</script>
		