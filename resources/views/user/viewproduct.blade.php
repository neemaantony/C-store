

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
						<a href="/addcart/{{$values->id}}"><button class="btn btn-primary" name="order">add to cart</button></a>
					</div>
				</div>

			</div>
			@endforeach
		</div>
	
	</div>




