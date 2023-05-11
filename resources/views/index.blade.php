@extends('header_footer')
@section('index-body')
<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
						<h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>


					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
						<h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>


					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		
		<div class="row no-gutters ftco-services">
		@foreach($res as $values)
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<!-- <div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-shipped"></span>
						</div> -->

				<div class="media-body">
					<img src="/image/{{$values->image}}" height="100px" width="200px" name="image" alt="image">
					<h5 class="heading">{{$values->name}}</h5>
					<h6>{{$values->price}}</h6>
					<div class="d-grid">
						<button class="btn btn-primary" name="order">order</button>
					</div>
				</div>

			</div>
			@endforeach
		</div>
	
	</div>
</section>
@endsection