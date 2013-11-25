@extends('master')

@section('content')
<div class="hero" id="hero">
	<div class="frdm-cta-lg">
		<div class="wrap">
			<h1>Freedom!</h1>
			<p>Be a <strong>YouTube partner</strong></p>
			<p class="mrgn-min">and be free.</p>
			<a href="/application/step1" class="btn btn-default btn-frdm-cta">Partner with us</a>
		</div>
	</div>

	<div class="scrll-dwn">
		<div class="arrow-d">
			<a id="main" href="#nav-wrap">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="90px" height="90px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
				<g>
					<path fill="#666766" d="M24.209,33.096l-0.014-0.015c0.002,0.002,0.005,0.003,0.007,0.005c-0.438-0.447-0.438-1.163,0.006-1.607
					L25,30.687L11.231,16.918c-0.445-0.445-1.163-0.446-1.61-0.005c-0.439,0.447-0.439,1.165,0.005,1.609l14.561,14.561
					c0.225,0.225,0.519,0.335,0.813,0.334c-0.288-0.002-0.575-0.112-0.798-0.331C24.205,33.089,24.206,33.093,24.209,33.096z"/>
					<polygon fill="#666766" points="9.613,16.918 9.621,16.913 9.626,16.905 	"/>
					<path fill="#A4A3A3" d="M40.379,16.913c-0.447-0.44-1.166-0.44-1.61,0.005L25,30.687l-0.792,0.792
					c-0.443,0.444-0.444,1.16-0.006,1.607c0.223,0.219,0.51,0.329,0.798,0.331c0.294,0.001,0.588-0.109,0.813-0.334l14.561-14.561
					C40.818,18.078,40.818,17.36,40.379,16.913z"/>
					<polygon fill="#A4A3A3" points="40.373,16.905 40.379,16.913 40.387,16.918 	"/>
					<polygon fill="#A4A3A3" points="24.209,33.096 24.202,33.086 24.195,33.081 	"/>
				</g>
			</svg>
		</a>
	</div>
	<div class="circle"></div>
</div>

<div class="vid-pat"></div>
<div class="video-wrap">
	<video autoplay="autoplay" loop="loop">
		<source src="videos/serafia.mp4" type="video/mp4">
		</video>
	</div>
</div>

<div class="page-wrap">

@include ('partials.header-land')

<section id="slide1">
	<div class="container">
		<h1 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
		<div class="three-col">
			<div class="row">
				<div class="col-lg-4">
					<div class="wrap">
						<div class="num-circle">
							<h2>9M+</h2>
						</div>
						<h3>Monthly Views</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="wrap">
						<div class="num-circle">
							<h2>10K+</h2>							
						</div>
						<h3>Partners</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="wrap">
						<div class="num-circle">
							<h2>50M+</h2>							
						</div>
						<h3>Subscribers</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="slide2">
	<div class="container">
		<h1 class="title">So how does it work?</h1>
		<div class="how">
			<img src="images/how-graphic.png">
		</div>
	</div>
</section>

<section id="slide3">
	<div class="container">
		<div class="row">

			<div class="col-lg-8">
				<div class="tstmnl">
					<div class="wrap">
						<h1>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</h1>
						<h2>K.A. Antonio / Curve Entertainment</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-4"><img src="images/kaantonio.png"></div>
	</div>
</section>

@include('partials.footer')

</div>

@endsection
