@extends('master')

@section('content')

@include ('partials.header-main')

	<div id="app-cont">
<!-- 		<section class="app-in-message">
			<div class="container">
			<h1 class="title">Thank you for choosing us!</h1>
			<p>Just a few more things and you're ready to start your YouTube career!</p>
			</div>
		</section> -->

		<section class="app-in-steps">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="step-lbl">
							<div class="num"><h1 class="title">1</h1></div>
							<div class="desc"><h2>Basic Information</h2><p>Add a little more about yourself!</p></div>
							<div class="done"><i class="fa fa-check-circle fa-3x"></i></div>	
						</div>		

					</div>
					<div class="col-lg-4">
						<div class="step-lbl current-step">
							<div class="num"><h1 class="title">2</h1></div>
							<div class="desc" style="margin-left: 50px;"><h2>Agreement</h2><p>This will be our handshake</p></div>						
						</div>
						<div class="current-bg"></div>
					</div>
					<div class="col-lg-4">
						<div class="step-lbl">
							<div class="num"><h1 class="title">3</h1></div>
							<div class="desc" style="margin-left: 50px;"><h2>Confirmation</h2><p>Almost done!</p></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="app-in-steps-cont">
			<div class="container">
				<div class="super-title"><h1>Agreement</h1></div>
				<div class="agree-doc">
					<iframe src="https://docs.google.com/a/any.tv/document/d/1OJnaDR-WNo3qr4CqkvNtQnmvAfNAo66r5U3oyqHUg4k/pub" frameborder="0" width="100%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

				<div class="sub-btn">
				<div class="form-group">
				<a href="/application/step2" class="btn btn-default btn-lg btn-sbmt">I Agree <i class="fa fa-check-square-o"></i></a>
				</div>	
				<a href="/application/step1">I Decline</a>
				</div>
				</div>

			</div>
		</section>




	</div>


@include('partials.footer')

@endsection