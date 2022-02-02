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
	<title>Faça uma cotação &#8211; Envios Internacionais</title>
	<style type="text/css" media="screen">
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
		body #booked-profile-page input[type=submit].button-primary:hover,
		body .booked-list-view button.button:hover,
		body .booked-list-view input[type=submit].button-primary:hover,
		body table.booked-calendar input[type=submit].button-primary:hover,
		body .booked-modal input[type=submit].button-primary:hover,
		body table.booked-calendar th,
		body table.booked-calendar thead,
		body table.booked-calendar thead th,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
		body #booked-profile-page .booked-profile-header,
		body #booked-profile-page .booked-tabs li.active a,
		body #booked-profile-page .booked-tabs li.active a:hover,
		body #booked-profile-page .appt-block .google-cal-button>a:hover,
		#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
			background: #c4f2d4 !important;
		}

		body #booked-profile-page input[type=submit].button-primary:hover,
		body table.booked-calendar input[type=submit].button-primary:hover,
		body .booked-list-view button.button:hover,
		body .booked-list-view input[type=submit].button-primary:hover,
		body .booked-modal input[type=submit].button-primary:hover,
		body table.booked-calendar th,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
		body #booked-profile-page .booked-profile-header,
		body #booked-profile-page .appt-block .google-cal-button>a:hover {
			border-color: #c4f2d4 !important;
		}

		body table.booked-calendar tr.days,
		body table.booked-calendar tr.days th,
		body .booked-calendarSwitcher.calendar,
		body #booked-profile-page .booked-tabs,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
			background: #039146 !important;
		}

		body table.booked-calendar tr.days th,
		body #booked-profile-page .booked-tabs {
			border-color: #039146 !important;
		}

		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
		body #booked-profile-page input[type=submit].button-primary,
		body table.booked-calendar input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-modal input[type=submit].button-primary,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
		body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
		body #booked-profile-page .appt-block .google-cal-button>a,
		body .booked-modal p.booked-title-bar,
		body table.booked-calendar td:hover .date span,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
		.booked-ms-modal .booked-book-appt

		/* Multi-Slot Booking */
			{
			background: #56c477;
		}

		body #booked-profile-page input[type=submit].button-primary,
		body table.booked-calendar input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-modal input[type=submit].button-primary,
		body #booked-profile-page .appt-block .google-cal-button>a,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
			border-color: #56c477;
		}

		body .booked-modal .bm-window p i.fa,
		body .booked-modal .bm-window a,
		body .booked-appt-list .booked-public-appointment-title,
		body .booked-modal .bm-window p.appointment-title,
		.booked-ms-modal.visible:hover .booked-book-appt {
			color: #56c477;
		}

		.booked-appt-list .timeslot.has-title .booked-public-appointment-title {
			color: inherit;
		}
	</style>
	<meta name='robots' content='max-image-preview:large' />

	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />

	<link rel='stylesheet' id='mediaelement-css' href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min08e1.css?ver=4.2.16' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css' href='wp-includes/js/mediaelement/wp-mediaelement.min080f.css?ver=5.8.2' type='text/css' media='all' />

	<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min9bf7.css?ver=3.4.6' type='text/css' media='all' />

	<link rel='stylesheet' id='elementor-post-8-css' href='wp-content/uploads/elementor/css/post-82cd2.css?ver=1634833213' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/globala25e.css?ver=1634833214' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-415-css' href='wp-content/uploads/elementor/css/post-sobre.css?ver=1637089794' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-394-css' href='wp-content/uploads/elementor/css/post-3947dda.css?ver=1636731662' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-53-css' href='wp-content/uploads/elementor/css/post-53971b.css?ver=1636730918' type='text/css' media='all' />
	<link rel='stylesheet' id='cc-google-font-raleway-css' href='http://fonts.googleapis.com/css?family=Raleway%3A400&amp;subset=latin-ext&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='cc-google-font-lato-css' href='http://fonts.googleapis.com/css?family=Lato%3A300%2C400&amp;subset=latin-ext&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='aheto_google_fonts-css' href='https://fonts.googleapis.com/css?family=Roboto:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap' type='text/css' media='all' />
	<link rel='stylesheet' id='elegant-css' href='wp-content/plugins/aheto/assets/fonts/elegant.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='ionicons-css' href='wp-content/plugins/aheto/assets/fonts/ionicons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='pe-icon-7-stroke-css' href='wp-content/plugins/aheto/assets/fonts/pe-icon-7-stroke.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='themify-css' href='wp-content/plugins/aheto/assets/fonts/themify-icons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-main-css' href='wp-content/plugins/aheto/assets/frontend/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-skin-css' href='wp-content/uploads/aheto-styles/aheto-defaultbf95.css?timestamp=1634829465' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRaleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='jetpack_css-css' href='wp-content/plugins/jetpack/css/jetpack8d49.css?ver=10.2.1' type='text/css' media='all' />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>


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
	<?php include 'header.inc.php'; ?>
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

															<h1 class="aheto-heading__title">Faça o Login</h1>
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

											<h5 class="aheto-heading__subtitle">Faça o login</h5>
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


											<?php
											if (isset($_SESSION['firstname'])) {
												echo '<h3>Olá ' . $_SESSION['firstname'] . ' você já está conectado.</h3>';
											} else
											{
											
												if (isset($_POST['entrar'])) {
												
												$login = $_POST['login'];
												$password =  $_POST['password']; 

												$mysqli = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
												

												$sql = "SELECT * FROM ci_users WHERE username = '$login' ";


												$result = $mysqli -> query($sql);

												// mostrar usuario
												if ($result -> num_rows > 0) {
													while ($row = $result -> fetch_assoc()) {
														$validPassword = password_verify($password, $row['password']); 

														if ($validPassword) {
															$_SESSION['firstname'] 	= $row['firstname'];
															$_SESSION['username'] 	= $row['username'];
															$_SESSION['email'] 			= $row['email'];
															$_SESSION["cadastro"] = "OK";

															print ("Login feito com sucesso!");

															echo "<script> window.location.href = 'cotacao.php'; </script>";

														} else {
															echo "<h5>Email ou senha incorretos</h5>";
														}
														
													}
												} else
												{
													echo "<h5>Email ou senha incorretos</h5>";
												}
												$row = mysqli_num_rows($result);
												$mysqli -> close();


											}


											?>


											<form id="address-form" class="animated-fast" action="" autocomplete="off" method="POST">
												<div class="form-group">
													<label for="nome">Login </label>
													<input type="text" class="form-control" id="login" name="login" required>
												</div>

												<div class="form-group">
													<label for="nome">Senha </label>
													<input type="password" class="form-control" id="password" name="password" required>
												</div>
												
												<div class="form-group">
												<input type="submit" class="btn btn-primary btn-user" value="Entrar" name="entrar">
                        </div>
											</form>
											
											<?php } ?>


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
				<?php include 'whatsapp.inc.php'; ?>
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


																<p class="aheto-heading__title ">Rua Jóquei Clube 230 <br>post-415828f
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
	<script type="text/javascript">
		function qodeblockBlocksShare(url, title, w, h) {
			var left = (window.innerWidth / 2) - (w / 2);
			var top = (window.innerHeight / 2) - (h / 2);
			return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=600, height=600, top=' + top + ', left=' + left);
		}
	</script>
	<script type="text/javascript">
		(function() {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='moovit-navbar-modern-css' href='wp-content/themes/moovit/aheto/navbar/assets/css/cs_layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='navigation-style-8-css' href='wp-content/plugins/aheto/shortcodes/navigation/assets/css/layout8.css' type='text/css' media='all' />
	<link rel='stylesheet' id='moovit-heading-simple-css' href='wp-content/themes/moovit/aheto/heading/assets/css/cs_layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='heading-style-1-css' href='wp-content/plugins/aheto/shortcodes/heading/assets/css/layout1.css' type='text/css' media='all' />
	<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min9bf7.css?ver=3.4.6' type='text/css' media='all' />

	</script>
	<script type='text/javascript' src='wp-content/plugins/booked/assets/js/functions25b6.js?ver=2.3.5' id='booked-functions-js'></script>
	<script type='text/javascript' id='frontend-js-js-extra'>

	</script>
	<script type='text/javascript' src='wp-content/plugins/aheto/assets/frontend/js/frontend8a54.js?ver=1.0.0' id='frontend-js-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7' id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script type='text/javascript' id='contact-form-7-js-extra'>

	</script>
	<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/indexd03b.js?ver=5.5.1' id='contact-form-7-js'></script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minb106.js?ver=2.7.0-wc.5.8.0' id='jquery-blockui-js'></script>
	<script type='text/javascript' id='wc-add-to-cart-js-extra'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"i18n_view_cart": "Ver carrinho",
			"cart_url": "http:\/\/enviosinternacionais.com\/cart\/",
			"is_cart": "",
			"cart_redirect_after_add": "no"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min3e35.js?ver=5.8.0' id='wc-add-to-cart-js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-datepicker/js/wpdp_auto_script2098.js?ver=202111160718' id='datepicker-script-auto-js'></script>

	<script type='text/javascript' src='wp-content/plugins/qodeblock/dist/assets/js/dismiss0674.js?ver=1634829453' id='qodeblock-dismiss-js-js'></script>
	<script type='text/javascript' src='wp-includes/js/comment-reply.min080f.js?ver=5.8.2' id='comment-reply-js'></script>
	<script type='text/javascript' src='wp-content/themes/moovit/aheto/js/aheto-frontend080f.js?ver=5.8.2' id='moovit-script-frontend-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/menu.min35d0.js?ver=1.12.1' id='jquery-ui-menu-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/selectmenu.min35d0.js?ver=1.12.1' id='jquery-ui-selectmenu-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min35d0.js?ver=1.12.1' id='jquery-ui-mouse-js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/ui/slider.min35d0.js?ver=1.12.1' id='jquery-ui-slider-js'></script>

	<script type='text/javascript' src='wp-includes/js/wp-embed.min080f.js?ver=5.8.2' id='wp-embed-js'></script>
	<script type='text/javascript' src='wp-content/plugins/aheto/shortcodes/navigation/assets/js/layout8.min.js' id='navigation-8-js-js'></script>
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