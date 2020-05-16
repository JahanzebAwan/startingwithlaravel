<!DOCTYPE html>
<html>
<head>
	<title>Digital Marketing</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <style>
    body {
	font-family: "Helvetica LT Std Bold", sans-serif;

} 
/* font-size:3.75vw; */
.h1 {
	backface-visibility:hidden;
	color:rgb(39, 39, 39);
	font-size:6.75vw;
	font-weight: 700;
	letter-spacing: 5px;
	line-height:94.7663px;
	position: relative;
}
.h2 {
	backface-visibility:hidden;
	color:rgb(39, 39, 39);
	font-size:4.05vw;
	font-weight: 700;
	letter-spacing: 5px;
	line-height:94.7663px;
	position: relative;
}
p {
    font-size: 13px;
    letter-spacing: .6px;
    font-weight: 500;
    line-height: 1.8;
}
strong {
    font-weight: bold;
    font-size: 15px;
}
.btn-style1{
	background-color: rgb(255, 91, 70);
	color: white;
	border-bottom-color:rgb(255, 91, 70);
	border-bottom-left-radius:48px;
	border-bottom-right-radius:48px;
	border-bottom-style:solid;
	border-bottom-width:1px;
	border-image-outset:0px;
	border-top-left-radius:48px;
	border-top-right-radius:48px;
	font-size:12px;
	font-weight:400;
	line-height:20px;
	padding-bottom:10px;
	padding-left:25px;
	padding-right:25px;
	padding-top:10px;
	text-align:center;
	text-decoration-style:solid;
	text-size-adjust:100%;
	transition-delay:0s;
	transition-duration:0.65s;
	transition-property:all;
	transition-timing-function:cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.btn-style1:hover {
	background-color: white;
	border-top-color: black;
	border-bottom-color: black;
	border-left-color: black;
	border-right-color: black;
}
.btn-style2{
	opacity: 0.7;
	background-color: white;
	border-top-color: black;
	border-bottom-color: black;
	border-left-color: black;
	border-right-color: black;
	border-bottom-left-radius:48px;
	border-bottom-right-radius:48px;
	border-bottom-style:solid;
	border-bottom-width:1px;
	border-image-outset:0px;
	border-top-left-radius:48px;
	border-top-right-radius:48px;
	font-size:12px;
	font-weight:400;
	line-height:20px;
	padding-bottom:10px;
	padding-left:25px;
	padding-right:25px;
	padding-top:10px;
	text-align:center;
	text-decoration-style:solid;
	text-size-adjust:100%;
	transition-delay:0s;
	transition-duration:0.65s;
	transition-property:all;
	transition-timing-function:cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.btn-style2:hover {
	opacity: 1;
	background-color: rgb(255, 91, 70);
	background-color: rgb(255, 91, 70);
	border-top-color: rgb(255, 91, 70);
	border-bottom-color: rgb(255, 91, 70);
	border-left-color: rgb(255, 91, 70);
	border-right-color: rgb(255, 91, 70);
	color: white;
}
.right{
	text-align: right;
}
.animation{
	opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease-out;
}
.animation.fade-in{
	opacity: 1;
	transform: translateX(0);
}

.animation_1{
	opacity: 0;
    transform: translateY(50px);
    transition: all 1s ease-out;
}
.animation_1.fade-in{
	opacity: 1;
	transform: translateY(0);
}
.animation_2{
	opacity: 0;
    transform: translateZ(50px);
    transition: all 1s ease-out;
}
.animation_2.fade-in{
	opacity: 1;
	transform: translateZ(0);
}

.animation_3{
	opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease-out;
}
.animation_3.fade-in{
	opacity: 1;
	transform: translateX(0);
}


    </style>
</head>
<body>
	<div class="row">
		<div class="col-1">
			
		</div>


		<div class="col-10">
			<div class="row">
				<div class="col-12 pt-5">
					<h1 class="h1 down">Our work</h1>
				</div>
				<div class="row mt-5 pl-2 down1">
					<div class="col-3">
						<p><strong>eDesign</strong>&nbsp;is a digital agency passionate about storytelling, visual design, and technology. We collaborate with companies small to large around the world to help them engage their audiences and build brand awareness.&nbsp;</p>
					</div>
					<div class="col-3">
						<p>Our team can create amazing web experiences, beginning with deep market research, practical strategies, and professional execution.Our client results speak for themselves. </p>
					</div>
				</div>
				<div class="row pl-2">
					<button type="button" class="btn">
                        <a href="portfolio" class="btn btn-style1">Explore our projects</a>
                    </button>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-6 pt-5">
					<h1 class="h2 right animation animate">Weaver Popcorn</h1>
					<div class="row mt-5">
						<div class="col-12 right">
							<p class="animation animate">An interactive website design built for the king of popcorn. We worked on creating fantastic 3D animations and original motion graphics. The meticulous in-house research and data validation was of upmost importance for building a global website catering to different B2B and B2C audiences.</p>
						</div>
					</div>
					<div class="row pt-4 float-right">
						<button type="button" class="btn">
	                        <a href="portfolio" class="btn btn-style2">View case study</a>
	                    </button>
					</div>
				</div>
				<div class="col-6">
					Video
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-6">
					Video
				</div>
				<div class="col-6 pt-5">
					<h1 class="h2 animation_1 animate_1">Welch’s® Fruit Snacks</h1>
					<div class="row mt-5">
						<div class="col-12">
							<p class="animation_1 animate_1">A website design that feels fun, fresh and vibrant. Playful animations, big images, and bold colors showcase the brand. Welch’s® Fruit Snacks is a wholesome, yummy snack that puts fruit first. The website visuals show just that. Gorgeous fruit pieces are bouncing on the screen.</p>
						</div>
					</div>
					<div class="row pt-4 float-right">
						<button type="button" class="btn">
	                        <a href="portfolio" class="btn btn-style2">View case study</a>
	                    </button>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-6 pt-5">
					<h1 class="h2 right animation_2 animate_2">Brickfielder</h1>
					<div class="row mt-5">
						<div class="col-12 right">
							<p class="animation_2 animate_2">With no visuals of the product, no previous marketing materials or digital graphics, the development of this e-commerce website began from the ground up. We sketched the creative concept, shot custom visuals, designed 3D animations, and created a very successful online store.</p>
						</div>
					</div>
					<div class="row pt-4 float-right">
						<button type="button" class="btn">
	                        <a href="portfolio" class="btn btn-style2">View case study</a>
	                    </button>
					</div>
				</div>
				<div class="col-6">
					Video
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-6">
					Video
				</div>
				<div class="col-6 pt-5">
					<h1 class="h2 animation_3 animate_3">Frost King</h1>
					<div class="row mt-5">
						<div class="col-12">
							<p class="animation_3 animate_3">We created an engaging and educational mobile web-app that helps homeowners make every corner of their house more comfortable. The project also included the creation of the “Frost King House” as a desktop experience.</p>
						</div>
					</div>
					<div class="row pt-4 float-right">
						<button type="button" class="btn">
	                        <a href="portfolio" class="btn btn-style2">View case study</a>
	                    </button>
					</div>
				</div>
			</div>
		</div>
		



		<div class="col-1">
			
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	gsap.timeline().from(".down", {opacity: 0,delay: 0.2, duration: 0.8, y: 100}).from(".down1", {opacity: 0,delay: 0.5, duration: 1, y: 100});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		var controller = new ScrollMagic.Controller();

		var ourScene = new ScrollMagic.Scene({
			triggerElement: '.animate',
			triggerHook: 0.9
		}).setClassToggle('.animate', 'fade-in').addTo(controller);

		var controller1 = new ScrollMagic.Controller();

		var ourScene = new ScrollMagic.Scene({
			triggerElement: '.animate_1',
			triggerHook: 0.9
		}).setClassToggle('.animate_1', 'fade-in').addTo(controller1);

		var controller2 = new ScrollMagic.Controller();

		var ourScene = new ScrollMagic.Scene({
			triggerElement: '.animate_2',
			triggerHook: 0.9
		}).setClassToggle('.animate_2', 'fade-in').addTo(controller2);

		var controller3 = new ScrollMagic.Controller();

		var ourScene = new ScrollMagic.Scene({
			triggerElement: '.animate_3',
			triggerHook: 0.9
		}).setClassToggle('.animate_3', 'fade-in').addTo(controller3);
	
	});
</script>