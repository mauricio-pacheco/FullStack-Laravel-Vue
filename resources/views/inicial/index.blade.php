@extends('layouts.principal')

@section('conteudo_pagina')
<section class="features-blocks">

	<div class="container">

		<div class="row vspace"><!-- "vspace" class is added to distinct this row -->

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-cog"></i>
						Settings
					</h3>

					<p>
						Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-gauge"></i>
						Dashboard
					</h3>

					<p>
						On am we offices expense thought. Its hence ten smile age means. Seven chief sight far point any. Of so high into easy.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-lifebuoy"></i>
						24/7 Support
					</h3>

					<p>
						Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new.
					</p>
				</div>

			</div>

		</div>

		<!-- Separator -->
		<div class="row">
			<div class="col-md-12">
				<hr />
			</div>
		</div>

	</div>

</section>
<!-- PORTIFÓLIO PÁGINA -->
<section class="portfolio-widget">

	<div class="container">

		<div class="row">

			<div class="col-sm-3">

				<div class="portfolio-info">
					<h3>
						<a href="#">Portfolio</a>
					</h3>

					<p>Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence s...</p>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="#" class="image">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-1.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="like">
							<i class="entypo-heart"></i>
						</a>

						<a href="#" class="name">Neon</a>
					</h4>

					<div class="categories">
						<a href="#">Web Design / Development</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="#" class="image">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-1.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="like liked">
							<i class="entypo-heart"></i>
						</a>

						<a href="#" class="name">Motorola</a>
					</h4>

					<div class="categories">
						<a href="#">Photography</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="#" class="image">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-1.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="like">
							<i class="entypo-heart"></i>
						</a>

						<a href="#" class="name">Dribbble</a>
					</h4>

					<div class="categories">
						<a href="#">UI Design</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
@endsection
