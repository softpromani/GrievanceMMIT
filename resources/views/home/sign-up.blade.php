@extends('home.includes.master')
@section('title', 'Aims & Objectives')
@section('content')

<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="{{ asset('home/images/Login/sign-up.jpg') }}" alt="desk-image">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('home/images/app-logo.png') }}" alt="" height="150" width="150"></a>
						</div>
						<div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div>
						<form action="#">
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Your Name" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="Email Address" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Password" required>
							<!-- Submit Button -->
							<button class="btn btn-main-md">sign up</button>
						</form>
						<div class="new-acount">
							<p>By clicking “Sign Up” I agree to <a href="#">Terms of Conditions.</a></p>
							<p>Anready have an account? <a href="{{ route('signIn') }}">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->




@endsection
