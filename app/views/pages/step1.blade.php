@extends('master')

@section('content')

@include ('partials.header-main')

	<div id="app-cont">
		<section class="app-in-message">
			<div class="container">
			<h1 class="title">Thank you for choosing us!</h1>
			<p>Just a few more things and you're ready to start your YouTube career!</p>
			</div>
		</section>

		<section class="app-in-steps">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="step-lbl current-step">
							<div class="num"><h1 class="title">1</h1></div>
							<div class="desc"><h2>Basic Information</h2><p>Add a little more about yourself!</p></div>
						</div>
						<div class="current-bg"></div>
					</div>
					<div class="col-lg-4">
						<div class="step-lbl">
							<div class="num"><h1 class="title">2</h1></div>
							<div class="desc" style="margin-left: 50px;"><h2>Agreement</h2><p>This will be our handshake</p></div>
						</div>
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
				<div class="super-title"><h1>Basic Information</h1></div>
				<div class="fields">
					<form>
						<div class="row">
							<div class="col-lg-4">
								<label>YouTube Channel</label>
								<input type="text" placeholder="/yourYouTubeChannel" class="form-control input input-lg">
							</div>
							<div class="col-lg-4">
								<label>First Name</label>
								<input type="text" placeholder="Your given name" class="form-control input input-lg">
							</div>
							<div class="col-lg-4">
								<label>Last Name</label>
								<input type="text" placeholder="Your surname" class="form-control input input-lg">
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<label>Email Address</label>
								<input type="text" placeholder="your@email.com" class="form-control input input-lg">
							</div>
							<div class="col-lg-4">
								<label>Skype</label>
								<input type="text" placeholder="Your Skype username" class="form-control input input-lg">
							</div>
							<div class="col-lg-4">
								<label>Paypal</label>
								<input type="text" placeholder="youremail@paypal.com" class="form-control input input-lg">
							</div>
						</div>

						<div class="row">
							<div class="col-lg-8">
								<label>Why partner with us?</label>
								<textarea placeholder="" class="form-control input input-lg"></textarea>
							</div>
							<div class="col-lg-4">
								<label>Notes</label>
								<textarea placeholder="" class="form-control input input-lg"></textarea>
							</div>
						</div>							

						<div class="sub-btn">
						<div class="form-group">
						<a href="/application/step2" class="btn btn-default btn-lg btn-sbmt">Continue <i class="fa fa-chevron-right"></i></a>
						</div>
						<a href="/">Cancel Application</a>
						</div>
					</form>
				</div>
			</div>
		</section>


	</div>


@include('partials.footer')

@endsection