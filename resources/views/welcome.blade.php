@extends('layout.frame')
@section('title') First @stop
@section('content')
            <!-- Start women-product Area -->
			<section class="women-product-area section-gap" id="women">
				<div class="container">
					<div class="countdown-content pb-40">
						<div class="title text-center">
							<h1 class="mb-10">New realeased Products for Women</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row">
                        @for($i=0;$i<4;$i++)
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="https://image.tmdb.org/t/p/original/{{$popular[$i]->poster_path}}" alt="">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-heart"></span></a>
										<a href="#"><span class="lnr lnr-layers"></span></a>
										<a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="{{ url('/detail/'.$popular[$i]->id.'-'.str_replace(' ', '-',$popular[$i]->original_title)) }}"><span class="lnr lnr-frame-expand"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>{{$popular[$i]->original_title}}</h5>
						  		<h3>{{$popular[$i]->vote_average}}</h3>
						   </div>						  
                        </div>
                        @endfor																				
					</div>
				</div>	
			</section>
			<!-- End women-product Area -->
            @stop