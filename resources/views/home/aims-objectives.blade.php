@extends('home.includes.master')
@section('title', 'Aims & Objectives')
@section('content')

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <!-- Page Title -->
                <h1>Aims & Objectives</h1>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<!--====================================
=            Privacy Policy            =
=====================================-->
<section class="privacy section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<nav class="privacy-nav">
					<ul>
						<li><a class="nav-link scrollTo" href="#userLicense" class="scrollTo">Aims</a></li>
						<li><a class="nav-link scrollTo" href="#disclaimer" class="scrollTo">Objectives</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-9">
				<div class="block">
					<!-- User License -->
					<div id="userLicense" class="policy-item">
						<div class="title">
							<h3>Aims</h3>
						</div>
						<div class="policy-details">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
						</div>
					</div>
					<!-- Disclaimer -->
					<div id="disclaimer" class="policy-item">
						<div class="title">
							<h3>Objectives</h3>
						</div>
						<div class="policy-details">
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Privacy Policy  ====-->

@endsection
