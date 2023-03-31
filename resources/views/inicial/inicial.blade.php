@extends('layouts.principal')

@section('conteudo_pagina')
<section class="features-blocks">

	<div class="container">

		<div class="row vspace">

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-newspaper"></i>
						ARTIGOS
					</h3>

					<p>
						Confira nossos artigos exclusivos sobre os mais variados temas sobre Programação.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-book-open"></i>
						PUBLICAÇÕES
					</h3>

					<p>
						Publicações de conteúdos atualizados no momento.
					</p>
				</div>

			</div>

			<div class="col-sm-4">

				<div class="feature-block">
					<h3>
						<i class="entypo-publish"></i>
						SCRIPTS
					</h3>

					<p>
						Acervo de Scripts para auxiliar em seus projetos.
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
						<a href="#">Documentações</a>
					</h3>

					<p>Seguem alguns links de documentações de algumas tecnologias.</p>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="https://laravel.com/docs/10.x/readme" class="image" target="_blank">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-1.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="name">Laravel</a>
					</h4>

					<div class="categories">
						<a href="https://laravel.com/docs/10.x/readme" target="_blank">Documentação Atual</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" class="image" target="_blank">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-2.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="name">Bootstrap</a>
					</h4>

					<div class="categories">
						<a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" target="_blank">Documentação Atual</a>
					</div>
				</div>

			</div>

			<div class="col-sm-3">

				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="https://nodejs.org/en/docs" class="image" target="_blank">
						<img src="{{ asset('inicial/assets/images/portfolio-thumb-3.png') }}" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>

					<h4>
						<a href="#" class="name">Node JS</a>
					</h4>

					<div class="categories">
						<a href="https://nodejs.org/en/docs" target="_blank">Documentação Atual</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
@endsection
