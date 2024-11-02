@extends('home.includes.master')
@section('title', 'Aims & Objectives')
@section('content')

<!--================================
=            Page Title            =
=================================-->

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="{{ asset('home/images/Login/front-desk-sign-in.jpg') }}"
							alt="desk-image"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('home/images/app-logo.png') }}" alt="UPASHSA" height="150" width="150"></a>
						</div>
						<div class="title-text">
							<h3>Sign in to To Your Account</h3>
						</div>
						<form action="#">
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Username" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Password" required>
							<!-- Submit Button -->
							<button class="btn btn-main-sm">sign in</button>
						</form>
						<div class="new-acount">
							<a href="#">Forget your password?</a>
							<p>Don't Have an account? <a href="{{ route('signUp') }}"> SIGN UP</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!--====  End of Page Title  ====-->





@endsection
