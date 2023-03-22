
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Casa da Web - O Ambiente do Desenvolvimento" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ asset('inicial/assets/images/favicon.ico') }}">

	<title>Casa da Web</title>

	<link rel="stylesheet" href="{{ asset('inicial/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('inicial/assets/css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ asset('inicial/assets/css/neon.css') }}">

	<script src="{{ asset('inicial/assets/js/jquery-1.11.3.min.js') }}"></script>

	<!--[if lt IE 9]><script src="{{ asset('inicial/assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

<?php
//VERIFICA SE É UM DISPOSITIVO MÓVEL
function isMobileDevice() {
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
, $_SERVER["HTTP_USER_AGENT"]);
}
?>

<div class="wrap">

<!-- CABEÇALHO DA PÁGINA -->
<div class="site-header-container container">

        <div class="row">

            <div class="col-md-12">

                <header class="site-header">

                    <section class="site-logo">

                        <a href="#">
                            <img src="{{ asset('inicial/assets/images/logo@2x.png') }}" width="240" />
                        </a>

                    </section>

                    <nav class="site-nav">

                        <ul class="main-menu hidden-xs" id="main-menu">
                            <li>
                                <a href="{{ route('pagina_inicial') }}">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Conhecimento</span>
                                </a>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Link</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Link</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Link</span>
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span>Sub Link 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Sub Link 2</span>
                                                </a>

                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <span>Sub Link de sub link 1</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>Sub Link de sub link 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Sub 3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Link</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Link</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cases</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/mauricio-pacheco" target="_blank">
                                    <span>GitHub</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Contato</span>
                                </a>
                            </li>
                         </ul>


                        <div class="visible-xs">

                            <a href="#" class="menu-trigger">
                                <i class="entypo-menu"></i>
                            </a>

                        </div>
                    </nav>

                </header>

            </div>

        </div>

</div>

<!-- LOGIN USUÁRIO -->

<?php
 if (Auth::check()) {
?>
<div class="container">

    <div class="row">
        <?php
    if (Auth::check()) { ?>
        <div class="col-sm-6">
            Seja bem vindo
            <b>
                {{ Auth::user()->name }}
            </b>
            - <a href="#" alt="Visualizar Perfil" title="Visualizar Perfil">Perfil</a>
        </div>

        <div class="col-sm-6" align="right">
            <form method="POST" action="{{ route('logout') }}" id="formulario_login">
                @csrf <a href="#" onclick="document.getElementById('formulario_login').submit();"
                    alt="Sair do Sistema" title="Sair do Sistema">Sair do Sistema</a </form>
        </div>
        <?php } ?>
    </div>

    <div style="height: 8px"></div>

</div>
<?php } else { ?>
    <div class="container">

        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="col-sm-4">
                    <input type="text" name="email" id="email" class="form-control" :value="old('email')" type="email" name="email" placeholder="Usuário" autofocus autocomplete="username" required />
                    <div style="height: 3px"></div>
                </div>

                <div class="col-sm-4">
                    <input type="password" name="password" id="password" class="form-control" :value="old('password')" type="password" name="password" placeholder="Senha" autofocus autocomplete="current-password" required />
                    <div style="height: 3px"></div>
                </div>

                <div class="col-sm-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            Esqueceu a Senha ?&nbsp;
                        </a>
                    @endif

                    <button href="#" id="abrir_filtro" type="submit" class="btn btn-blue" alt="ENTRAR" title="ENTRAR" >ENTRAR</button>&nbsp;&nbsp;<button onclick="location.href='{{ route('cadastro_clientes') }}';" id="cadastrar_cliente" type="button" class="btn btn-blue" alt="CADASTRAR" title="CADASTRAR" >CADASTRAR</button>

                </div>

                <div class="clear"></div>

            </form>

        </div>

        <div style="height: 6px"></div>

        <div><x-input-error :messages="$errors->get('email')" class="mt-2" /></div>
        <div><x-input-error :messages="$errors->get('password')" class="mt-2" /></div>

    </div>
<?php } ?>

<?php if(isMobileDevice()) { ?>
<div><hr></div>
<?php } else { ?>

<!-- SLIDER PÁGINA -->
<section class="slider-container" style="background-image: url({{ asset('inicial/assets/images/slide-img-1-bg.png') }});">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="slides">

					<!-- Slide 1 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>Neon - Bootstrap 3</small>
								Dashboard &amp; Front-end
							</h2>

							<p class="slide-content">
								Neon &ndash; is flat admin template for multi-purpose usage built<br /> with the latest version of Bootstrap &ndash; 3.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('inicial/assets/images/slide-img-1.png') }}" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slide 2 -->
					<div class="slide" data-bg="{{ asset('inicial/assets/images/slide-img-1-bg.png') }}">

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('inicial/assets/images/slide-img-1.png') }}" class="img-responsive" />
							</a>
						</div>

						<div class="slide-content text-right">
							<h2>
								<small>Neon - Bootstrap 3</small>
								Powerful Admin Template
							</h2>

							<p class="slide-content">
								Designed for Bootstrap Framework, the theme works <br />
								perfectly on any device, you can use it on<br />
								 your smartphone, tablet or your laptop.
							</p>

						</div>

					</div>

					<!-- Slide 3 -->
					<div class="slide">

						<div class="slide-content">
							<h2>
								<small>Neon - Bootstrap 3</small>
								Responsive &amp; Retina
							</h2>

							<p class="slide-content">
								Device type is not a problem if you use Neon theme for your application UI.<br />
								It's packed with latest Bootstrap framework and it's compatible for Large Screens, Tablets and Smartphones.
							</p>
						</div>

						<div class="slide-image">

							<a href="#">
								<img src="{{ asset('inicial/assets/images/slide-img-1.png') }}" class="img-responsive" />
							</a>
						</div>

					</div>

					<!-- Slider navigation -->
					<div class="slides-nextprev-nav">
						<a href="#" class="prev">
							<i class="entypo-left-open-mini"></i>
						</a>
						<a href="#" class="next">
							<i class="entypo-right-open-mini"></i>
						</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>

<?php } ?>

<!-- LOGIN USUÁRIO -->
@yield('conteudo_pagina')

<!-- SLIDER TEXTO PÁGINA -->
<section class="testimonials-container">

	<div class="container">

		<div class="col-md-12">

			<div class="testimonials carousel slide" data-interval="8000">

				<div class="carousel-inner">

					<div class="item active">

						<blockquote>
							<p style="color: #fff">
								"É genial festejar o sucesso, mas é mais importante aprender com as lições do fracasso."
							</p>
							<small>
								<cite>Bill Gates - Fundador da Microsoft</cite>
							</small>
						</blockquote>

					</div>

					<div class="item">

						<blockquote>
							<p style="color: #fff">
								"Ao dar às pessoas o poder de partilhar, estamos tornando o mundo mais transparente."
							</p>
							<small>
								<cite>Mark Zuckerberg - Fundador do FaceBook</cite>
							</small>
						</blockquote>

					</div>

					<div class="item">

                        <blockquote>
							<p style="color: #fff">
								“Um dos meus dias mais produtivos foi quando eu joguei fora 1000 linhas de código.”
							</p>
							<small>
								<cite>Ken Thompson - Cientista da Computação</cite>
							</small>
						</blockquote>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- LOGOS PÁGINA -->
<section class="clients-logos-container">

	<div class="container">

		<div class="row">

			<div class="client-logos carousel slide" data-ride="carousel" data-interval="5000">

				<div class="carousel-inner">

					<div class="item active">

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_2.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_1.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_3.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_4.png') }}" />
						</a>

					</div>

					<div class="item">

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_8.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_5.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_7.png') }}" />
						</a>

						<a href="#">
							<img src="{{ asset('inicial/assets/images/tec_6.png') }}" />
						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- RODAPÉ -->
<section class="footer-widgets">

	<div class="container">

		<div class="row">

			<div class="col-sm-3" style="width: 8%">

				<a href="#">
					<img src="{{ asset('inicial/assets/images/fantasma_pequeno.png') }}" />
				</a>

            </div>

            <div class="col-sm-3" style="width: 42%">

					Existem várias maneiras de compartilhar conhecimento no ambiente de trabalho e construir uma cultura de aprendizagem.

			</div>

			<div class="col-sm-3" style="width: 25%">

				<h5>Localização</h5>

				<p>
					Frederico Westphalen <br />
					Rio Grande do Sul <br />
					Brasil
				</p>

			</div>

			<div class="col-sm-3" style="width: 25%">

				<h5>Contatos</h5>

				<p>
					E-mail <br />
					comercial@casadaweb.net <br />

				</p>

			</div>

		</div>

	</div>

</section>

<!-- RODAPÉ FINAL -->
<footer class="site-footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-6">
				Copyright &copy; Maurício Pacheco - All Rights Reserved.
			</div>

			<div class="col-sm-6">

				<ul class="social-networks text-right">
					<li>
						<a href="https://github.com/mauricio-pacheco" target="_blank" alt="Siga no GitHub" title="Siga no GitHub">
							<i class="entypo-github"></i>
						</a>
					</li>
				</ul>

			</div>

		</div>

	</div>

</footer>

<!-- SCRIPTS -->

@vite('resources/js/app.js')

    <!-- JavaScripts Botões -->
    <script src="{{ asset('inicial/assets/js/gsap/TweenMax.min.js') }}"></script>
    <script src="{{ asset('inicial/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('inicial/assets/js/joinable.js') }}"></script>
    <script src="{{ asset('inicial/assets/js/resizeable.js') }}"></script>
    <script src="{{ asset('inicial/assets/js/neon-slider.js') }}"></script>

    <!-- JavaScripts -->
    <script src="{{ asset('inicial/assets/js/neon-custom.js') }}"></script>

</div>
</body>
</html>
