<?php
session_start();

include_once "painel/system/core/Common.php";
include_once "painel/system/core/compat/password.php";
require_once(__DIR__ . '/config.php');


?>
<!DOCTYPE html>
<html lang="pt-BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<title>Cadastre-se &#8211; Envios Internacionais</title>

	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />


	<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min9bf7.css?ver=3.4.6' type='text/css' media='all' />

	<link rel='stylesheet' id='elementor-post-8-css' href='wp-content/uploads/elementor/css/post-82cd2.css?ver=1634833213' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/globala25e.css?ver=1634833214' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-415-css' href='wp-content/uploads/elementor/css/post-cadastro.css?ver=1637089794' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-394-css' href='wp-content/uploads/elementor/css/post-3947dda.css?ver=1636731662' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-53-css' href='wp-content/uploads/elementor/css/post-53971b.css?ver=1636730918' type='text/css' media='all' />
	<link rel='stylesheet' id='cc-google-font-raleway-css' href='http://fonts.googleapis.com/css?family=Raleway%3A400&amp;subset=latin-ext&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='cc-google-font-lato-css' href='http://fonts.googleapis.com/css?family=Lato%3A300%2C400&amp;subset=latin-ext&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='aheto_google_fonts-css' href='https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap' type='text/css' media='all' />
	<link rel='stylesheet' id='elegant-css' href='wp-content/plugins/aheto/assets/fonts/elegant.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='ionicons-css' href='wp-content/plugins/aheto/assets/fonts/ionicons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='themify-css' href='wp-content/plugins/aheto/assets/fonts/themify-icons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-main-css' href='wp-content/plugins/aheto/assets/frontend/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-skin-css' href='wp-content/uploads/aheto-styles/aheto-defaultbf95.css?timestamp=1634829465' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='jetpack_css-css' href='wp-content/plugins/jetpack/css/jetpack8d49.css?ver=10.2.1' type='text/css' media='all' />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type='text/javascript' src='wp-includes/js/cotacao.js'></script>
	<script src="https://www.eshopex.com/pe//assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		body .aheto-footer,
		body .aheto-footer p {
			color: #ffffff;
		}

		body .aheto-footer a {
			color: #ffffff;
		}
	</style>
	<style type="text/css"></style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


</head>

<body class="page-template page-template-aheto_canvas page page-id-415 theme-moovit woocommerce-no-js no-sidebar elementor-default elementor-kit-8 elementor-page elementor-page-415">
	<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader" class="aheto-header  ">
		<div class="container">

			<div data-elementor-type="page" data-elementor-id="394" class="elementor elementor-394" data-elementor-settings="[]">
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-290112da elementor-section-stretched elementor-section-full_width elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default" data-id="290112da" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-263e53f8" data-id="263e53f8" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-242b3ec0 elementor-widget elementor-widget-aheto_navbar" data-id="242b3ec0" data-element_type="widget" data-widget_type="aheto_navbar.default">
										<div class="elementor-widget-container">

											<div class="aheto_navbar_619403f804cd8  aheto-navbar aheto-navbar--wrap aheto-navbar--moovit-modern two-columns ">
												<div class="aheto-navbar--inner">

													<div class="aheto-navbar--left ">


														<div class="aheto-navbar--item">
															<span class="aheto-navbar--item-label">
																Ligue: </span><a href="tel:55-41-3269-1625" class="aheto-navbar--item-link">55-41-3269-1625</a>
														</div>


														<div class="aheto-navbar--item">
															<span class="aheto-navbar--item-label">
																Email: </span>
															<a href="mailto:contato@enviosinternacionais.com" class="aheto-navbar--item-link">contato@enviosinternacionais.com</a>
														</div>



													</div>
													<div class="aheto-navbar--right hide-mobile">


														<div class="aheto-navbar--item">





															<a class="aheto-navbar--item-link icon" href="https://www.instagram.com/"><i class="ion-social-instagram"></i></a>
														</div>


													</div>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-4e08db91 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4e08db91" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7178caf7" data-id="7178caf7" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-76198937 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="76198937" data-element_type="widget" data-widget_type="divider.default">
										<div class="elementor-widget-container">
											<div class="elementor-divider">
												<span class="elementor-divider-separator">
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-6c12db4c elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6c12db4c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2662dce4" data-id="2662dce4" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-630df084 elementor-widget elementor-widget-aheto_navigation" data-id="630df084" data-element_type="widget" data-widget_type="aheto_navigation.default">
										<div class="elementor-widget-container">
											<div class="aheto_navigation_619403f808838  main-header main-header--classic-2 main-header-js " data-mobile-menu="1199">
												<div class="main-header__main-line">
													<div class="aheto-logo main-header__logo">
														<a href="index.php">
															<img width="358" height="83" src="wp-content/uploads/2021/11/logo.png" class="aheto-logo__image" alt="" loading="lazy" srcset="https://enviosinternacionais.com/wp-content/uploads/2021/11/logo.png 358w, https://enviosinternacionais.com/wp-content/uploads/2021/11/logo-300x70.png 300w" sizes="(max-width: 358px) 100vw, 358px" /><img width="358" height="83" src="wp-content/uploads/2021/11/logo.png" class="aheto-logo__image aheto-logo__image-scroll" alt="" loading="lazy" srcset="https://enviosinternacionais.com/wp-content/uploads/2021/11/logo.png 358w, https://enviosinternacionais.com/wp-content/uploads/2021/11/logo-300x70.png 300w" sizes="(max-width: 358px) 100vw, 358px" /><img width="358" height="83" src="wp-content/uploads/2021/11/logo.png" class="aheto-logo__image mob-logo" alt="" loading="lazy" srcset="https://enviosinternacionais.com/wp-content/uploads/2021/11/logo.png 358w, https://enviosinternacionais.com/wp-content/uploads/2021/11/logo-300x70.png 300w" sizes="(max-width: 358px) 100vw, 358px" /><img width="358" height="83" src="wp-content/uploads/2021/11/logo.png" class="aheto-logo__image mob-logo aheto-logo__image-mob-scroll" alt="" loading="lazy" srcset="https://enviosinternacionais.com/wp-content/uploads/2021/11/logo.png 358w, https://enviosinternacionais.com/wp-content/uploads/2021/11/logo-300x70.png 300w" sizes="(max-width: 358px) 100vw, 358px" /> </a>
													</div>
													<div class="main-header__menu-box">

														<span class="mobile-menu-title">Menu</span>

														<nav class="menu-home-page-container">
															<ul id="menu-menu" class="main-menu main-menu--inline">
																<li id="menu-item-318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-318"><a href="index.php">Inicio</a></li>
																<li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323"><a href="sobre.php">Sobre</a></li>
                                <li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323"><a href="cadastro.php">Cadastre-se</a></li>
																<li id="menu-item-323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323"><a href="login.php">Login</a></li>
															</ul>
														</nav>
														<div class="main-header__widget-box-mobile">
															<a href='cotacao.php' class='aheto-btn aheto-btn--primary aheto-btn--small   ' target='_self' aria-label='Faça uma cotação'>Faça uma cotação</a>
														</div>
                           
													</div>
													<div class="main-header__widget-box">

														<div class="main-header__widget-box-desktop">
															<a href='cotacao.php' class='aheto-btn aheto-btn--primary aheto-btn--small   ' target='_self' aria-label='Faça uma cotação'>Faça uma cotação</a>
														</div>

														<button class="hamburger main-header__hamburger js-toggle-mobile-menu" type="button">
															<span class="hamburger-box">
																<span class="hamburger-inner"></span>
															</span>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

		</div>

	</header>
	<div class="container">
		<div data-elementor-type="page" data-elementor-id="415" class="elementor elementor-415" data-elementor-settings="[]">
			<div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-794109b2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="794109b2" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5f71641 animated-fast elementor-invisible" data-id="5f71641" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-758d9459 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="758d9459" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
									<div class="elementor-container elementor-column-gap-no">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-67367828" data-id="67367828" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-79164e1f elementor-widget elementor-widget-aheto_heading" data-id="79164e1f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="aheto_heading.default">
													<div class="elementor-widget-container">

														<div class="aheto-heading aheto-heading--moovit__simple t-center align-mob-default aheto_heading_619403f80ba8e ">

															<h1 class="aheto-heading__title">Cadastre-se <span class="moovit-dot dot-primary">abaixo</span></h1>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-5c05812a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5c05812a" data-element_type="section">
									<div class="elementor-container elementor-column-gap-no">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4abfebed" data-id="4abfebed" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-19ccf21e elementor-widget elementor-widget-aheto_heading" data-id="19ccf21e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="aheto_heading.default">
													<div class="elementor-widget-container">

														<div class="aheto-heading aheto-heading--moovit__simple t-center align-mob-default aheto_heading_619403f80c76d ">

															<h5 class="aheto-heading__title animated-fast ">Preencha seus dados e cadastre-se no sistema antes de fazer sua cotação.</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1e49348d animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1e49348d" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-791bd229" data-id="791bd229" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-701ac149 elementor-widget elementor-widget-aheto_heading" data-id="701ac149" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="aheto_heading.default">
									<div class="elementor-widget-container">

										<div class="aheto-heading aheto-heading--moovit__simple t-center align-mob-default aheto_heading_619403f80d97e ">

											<h5 class="aheto-heading__subtitle">CADASTRO</h5>
											<h2 class="aheto-heading__title">Preencha com seus <span class="moovit-dot dot-primary">dados</span></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-740e0d06 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="740e0d06" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:400}">
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65b1e7b8 animated-fast elementor-invisible" data-id="65b1e7b8" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2e8e779e elementor-widget elementor-widget-shortcode" data-id="2e8e779e" data-element_type="widget" data-widget_type="shortcode.default">
									<div class="elementor-widget-container">
										<div class="elementor-shortcode">

											<!-- Formulário de Cotação -->

											<?php

											function generateRandomString($length = 10) {
												$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
												$charactersLength = strlen($characters);
												$randomString = '';
												for ($i = 0; $i < $length; $i++) {
														$randomString .= $characters[rand(0, $charactersLength - 1)];
												}
												return $randomString;
											}
											$senha = generateRandomString (5);

											if (isset($_POST['enviar'])) {


												$nome = $_REQUEST['nome'];
												$sobrenome = $_REQUEST['sobrenome'];
												$email = $_REQUEST['email'];
												$tel = $_REQUEST['tel'];
												$endereco = $_REQUEST['endereco'];
												$username = strtolower($nome);
												$now = date("Y-m-d H:i:s");
												$password = password_hash($senha, PASSWORD_BCRYPT);

												$mysqli = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
												$mysqli->set_charset("utf8");

												$sql = "INSERT INTO `ci_users` (`id`, `user_id`, `added_by`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `is_user`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`, `admin_role_id`) VALUES (NULL, '0', '', '$username', '$nome', '$sobrenome', '$email', '$tel', '$password', '$endereco', '1', '1', '0', '0', '1', NULL, NULL, NULL, '$now', '$now', '0')";
												$result = $mysqli -> query($sql);
												$mysqli -> close();

												echo "<h5>Cadastro efetuado com sucesso!<br> Seu login é: $username<br> Sua senha é: $senha <br> <a href='cotacao.php'>Clique aqui para fazer a cotação</a></h5>";

												//print_r ($sql);

												$_SESSION["cadastro"] = "OK";
												$_SESSION["nome"] = $nome;
												$_SESSION["sobrenome"] = $sobrenome;
												$_SESSION["email"] = $email;
												$_SESSION["username"] = $username;
												$_SESSION["firstname"] = $nome;



                      }

											?>


											<form id="address-form" class="animated-fast" action="" autocomplete="off" method="POST">

												<h5>Seus Dados</h5>


												<div class="form-group">
													<label for="nome">Nome </label>
													<input type="text" class="form-control" id="nome" name="nome" required>
												</div>

												<div class="form-group">
													<label for="nome">Sobrenome </label>
													<input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
												</div>

                        <div class="form-group">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email" name="email" required>
												</div>

												<div class="form-group">
													<label for="Inputstreet1">Tel/Whatsapp</label>
													<input type="text" class="form-control" id="tel" name="tel" aria-describedby="enderecoHelp" required>
													<small id="enderecoHelp" class="form-text text-muted">Digite seu número de telefone</small>
												</div>

												<div class="form-group">
													<label for="cidade">Endereço</label>
													<input type="text" class="form-control" id="endereco" name="endereco" required>
												</div>

                        <div class="form-group">
												<input type="submit" class="btn btn-primary btn-user" value="Enviar" name="enviar">
                        </div>
											</form>

										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-68bd01c elementor-widget elementor-widget-spacer" data-id="68bd01c" data-element_type="widget" data-widget_type="spacer.default">
									<div class="elementor-widget-container">
										<div class="elementor-spacer">
											<div class="elementor-spacer-inner"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4703314c elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4703314c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1c68c14e animated-fast elementor-invisible" data-id="1c68c14e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1ea22d6 elementor-widget elementor-widget-aheto_heading" data-id="1ea22d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="aheto_heading.default">
									<div class="elementor-widget-container">

										<div class="aheto-heading aheto-heading--moovit__simple  align-mob-center aheto_heading_619403f80f34f ">

											<h4 class="aheto-heading__title">Chame nosso suporte por whatsapp</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-439da6e0 animated-fast elementor-invisible" data-id="439da6e0" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4fec012 elementor-widget elementor-widget-button" data-id="4fec012" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
											<a href="https://api.whatsapp.com/send?phone=554191311439&amp;text=Gostaria%20de%20saber%20mais%20sobre%20o%20Envios%20Internacionais" class="elementor-button-link elementor-button elementor-size-sm" role="button">
												<span class="elementor-button-content-wrapper">
													<span class="elementor-button-text">Clique aqui</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<footer class="aheto-footer ">

		<div class="container">

			<div data-elementor-type="page" data-elementor-id="53" class="elementor elementor-53" data-elementor-settings="[]">
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-754d78d7 elementor-section-content-top elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="754d78d7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3428bb47" data-id="3428bb47" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<section class="elementor-section elementor-inner-section elementor-element elementor-element-d972df7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d972df7" data-element_type="section">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4edc2ffd" data-id="4edc2ffd" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-7f60db7a elementor-widget elementor-widget-image" data-id="7f60db7a" data-element_type="widget" data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img width="300" height="70" src="wp-content/uploads/2021/11/logo-300x70.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://enviosinternacionais.com/wp-content/uploads/2021/11/logo-300x70.png 300w, https://enviosinternacionais.com/wp-content/uploads/2021/11/logo.png 358w" sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="elementor-section elementor-inner-section elementor-element elementor-element-23b3c4de elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23b3c4de" data-element_type="section">
										<div class="elementor-container elementor-column-gap-no">
											<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-60879085" data-id="60879085" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-70cb6f7b elementor-widget elementor-widget-aheto_heading" data-id="70cb6f7b" data-element_type="widget" data-widget_type="aheto_heading.default">
														<div class="elementor-widget-container">

															<div class="aheto-heading aheto-heading--main t-left align-tablet-default align-mob-left aheto_heading_619403f812354 ">


																<p class="aheto-heading__title ">Rua Jóquei Clube 230 <br>
																	Prado Velho, Curitiba - PR - Brasil
																	<br>
																	<a href="mailto:contato@enviosinternacionais.com" style="font-size: 16px;color: #ffffff">contato@enviosinternacionais.com</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7bc98113" data-id="7bc98113" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-fed4133 elementor-widget elementor-widget-heading" data-id="fed4133" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h5 class="elementor-heading-title elementor-size-default">Copyright 2021 Envios Internacionais</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3aec4fc3" data-id="3aec4fc3" data-element_type="column">
								<div class="elementor-widget-wrap">
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-5598516b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5598516b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5132c93a" data-id="5132c93a" data-element_type="column">
								<div class="elementor-widget-wrap">
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

		</div>


	</footer>
	<div class="site-search" id="search-box">
		<button class="close-btn js-close-search"><i class="fa fa-times" aria-hidden="true"></i></button>
		<div class="form-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form role="search" method="get" class="search-form" action="https://enviosinternacionais.com/" autocomplete="off">
							<div class="input-group">
								<input type="search" value="" name="s" class="search-field" placeholder="Enter Keyword" required="">
							</div>
						</form>
						<p class="search-description">Input your search keywords and press Enter.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link rel='stylesheet' id='moovit-navbar-modern-css' href='wp-content/themes/moovit/aheto/navbar/assets/css/cs_layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='navigation-style-8-css' href='wp-content/plugins/aheto/shortcodes/navigation/assets/css/layout8.css' type='text/css' media='all' />
	<link rel='stylesheet' id='moovit-heading-simple-css' href='wp-content/themes/moovit/aheto/heading/assets/css/cs_layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='heading-style-1-css' href='wp-content/plugins/aheto/shortcodes/heading/assets/css/layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min9bf7.css?ver=3.4.6' type='text/css' media='all' />

	</script>


	<script type='text/javascript' src='wp-content/plugins/aheto/assets/frontend/vendors/typed/typed.min.js' id='typed-js'></script>
	<script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script type='text/javascript' src='wp-content/plugins/aheto/assets/frontend/vendors/script.min.js' id='aheto-main-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min9bf7.js?ver=3.4.6' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min9bf7.js?ver=3.4.6' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='wp-content/plugins/aheto/assets/frontend/vendors/swiper/swiper.min.js' id='swiper-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/share-link/share-link.min9bf7.js?ver=3.4.6' id='share-link-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Compartilhar no Facebook",
				"shareOnTwitter": "Compartilhar no Twitter",
				"pinIt": "Fixar",
				"download": "Baixar",
				"downloadImage": "Baixar imagem",
				"fullscreen": "Tela cheia",
				"zoom": "Zoom",
				"share": "Compartilhar",
				"playVideo": "Reproduzir v\u00eddeo",
				"previous": "Anterior",
				"next": "Pr\u00f3ximo",
				"close": "Fechar"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Celular",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Celular extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.4.6",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"a11y_improvements": true,
				"e_import_export": true,
				"additional_custom_breakpoints": true,
				"landing-pages": true,
				"elements-color-picker": true,
				"admin-top-bar": true
			},
			"urls": {
				"assets": "http:\/\/enviosinternacionais.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 415,
				"title": "Fa%C3%A7a%20uma%20cota%C3%A7%C3%A3o%20%E2%80%93%20Envios%20Internacionais",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min9bf7.js?ver=3.4.6' id='elementor-frontend-js'></script>
	<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/preloaded-modules.min9bf7.js?ver=3.4.6' id='preloaded-modules-js'></script>


</body>

</html>