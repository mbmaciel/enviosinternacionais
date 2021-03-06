<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<title>Faça uma cotação &#8211; Envios Internacionais</title>

	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />


	<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.min9bf7.css?ver=3.4.6' type='text/css' media='all' />

	<link rel='stylesheet' id='elementor-post-8-css' href='wp-content/uploads/elementor/css/post-82cd2.css?ver=1634833213' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='wp-content/uploads/elementor/css/globala25e.css?ver=1634833214' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-415-css' href='wp-content/uploads/elementor/css/post-415828f.css?ver=1637089794' type='text/css' media='all' />
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


	<script type='text/javascript'>
		// This sample uses the Places Autocomplete widget to:
		// 1. Help the user select a place
		// 2. Retrieve the address components associated with that place
		// 3. Populate the form fields with those address components.
		// This sample requires the Places library, Maps JavaScript API.
		// Include the libraries=places parameter when you first load the API.
		// For example: <script
		// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

		let autocomplete;
		let address1Field;
		let address2Field;
		let postalField;
		let postal2Field;

		function initAutocomplete() {
			d_name = document.getElementById('d_name');
			address1Field = document.querySelector("#street1");
			address2Field = document.querySelector("#d_street1");
			postalField = document.querySelector("#zip");
			postal2Field = document.querySelector("#d_zip");

			// Create the autocomplete object, restricting the search predictions to
			// addresses in the world
			autocomplete = new google.maps.places.Autocomplete(address1Field, {
				componentRestrictions: {
					country: ['br', 'us', 'ca']
				},
				fields: ["address_components", "geometry"],
				types: ["address"],
			});
			autocomplete2 = new google.maps.places.Autocomplete(address2Field, {
				componentRestrictions: {
					country: ['br', 'us', 'ca']
				},
				fields: ["address_components", "geometry"],
				types: ["address"],
			});
			address1Field.focus();
			// When the user selects an address from the drop-down, populate the
			// address fields in the form.
			autocomplete.addListener("place_changed", fillInAddress);

			address2Field.focus();
			autocomplete2.addListener("place_changed", fillInAddress2);
		}

		function fillInAddress() {
			// Get the place details from the autocomplete object.
			const place = autocomplete.getPlace();
			let address1 = "";
			let postcode = "";

			// Get each component of the address from the place details,
			// and then fill-in the corresponding field on the form.
			// place.address_components are google.maps.GeocoderAddressComponent objects
			// which are documented at http://goo.gle/3l5i5Mr
			for (const component of place.address_components) {
				const componentType = component.types[0];

				switch (componentType) {
					case "street_number": {
						address1 = `${component.long_name} ${address1}`;
						break;
					}

					case "route": {
						address1 += component.short_name;
						break;
					}

					case "postal_code": {
						postcode = `${component.long_name}${postcode}`;
						break;
					}

					case "postal_code_suffix": {
						postcode = `${postcode}-${component.long_name}`;
						break;
					}
					case "locality":
						document.querySelector("#city").value = component.long_name;
						break;
					case "administrative_area_level_1": {
						document.querySelector("#state").value = component.short_name;
						break;
					}
					case "country":
						document.querySelector("#country").value = component.short_name;
						break;
				}
			}

			address1Field.value = address1;

			postalField.value = postcode;
			// After filling the form with address components from the Autocomplete
			// prediction, set cursor focus on the second address line to encourage
			// entry of subpremise information such as apartment, unit, or floor number.
			d_name.focus();

		}

		function fillInAddress2() {
			// Get the place details from the autocomplete object.
			const place = autocomplete2.getPlace();
			let address2 = "";
			let postcode2 = "";

			// Get each component of the address from the place details,
			// and then fill-in the corresponding field on the form.
			// place.address_components are google.maps.GeocoderAddressComponent objects
			// which are documented at http://goo.gle/3l5i5Mr
			for (const component of place.address_components) {
				const componentType = component.types[0];

				switch (componentType) {
					case "street_number": {
						address2 = `${component.long_name} ${address2}`;
						break;
					}

					case "route": {
						address2 += component.short_name;
						break;
					}

					case "postal_code": {
						postcode2 = `${component.long_name}${postcode2}`;
						break;
					}

					case "postal_code_suffix": {
						postcode2 = `${postcode2}-${component.long_name}`;
						break;
					}
					case "locality":
						document.querySelector("#d_city").value = component.long_name;
						break;
					case "administrative_area_level_1": {
						document.querySelector("#d_state").value = component.short_name;
						break;
					}
					case "country":
						document.querySelector("#d_country").value = component.short_name;
						break;
				}
			}

			address2Field.value = address2;
			
			postal2Field.value = postcode2;
			// After filling the form with address components from the Autocomplete
			// prediction, set cursor focus on the second address line to encourage
			// entry of subpremise information such as apartment, unit, or floor number.
			address2Field.focus();

		}
	</script>


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

															<h1 class="aheto-heading__title">Faça uma <span class="moovit-dot dot-primary">cotação</span></h1>
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

															<h5 class="aheto-heading__title animated-fast ">Preencha os dados abaixo corretamente e aguarde a resposta do sistema.</h5>
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

											<h5 class="aheto-heading__subtitle">COTAÇÃO</h5>
											<h2 class="aheto-heading__title">Preencha o <span class="moovit-dot dot-primary">formulário</span></h2>
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
											if (isset($_POST['enviar'])) {

												

												require_once(__DIR__ . '/vendor/autoload.php');
												require_once(__DIR__ . '/config.php');

												
												$name = $_SESSION["username"] ?? "";
												$company = $_REQUEST['company'];
												$street1 = $_REQUEST['street1'];
												$email = $_REQUEST['email'];
												$city = $_REQUEST['city'];
												$state = $_REQUEST['state'];
												$country = $_REQUEST['country'];
												$zip = $_REQUEST['zip'];

												/*
												$optradio = $_REQUEST['optradio'];
												*/

												$weight = $_REQUEST['weight'];
												$height = $_REQUEST['height'];
												$width = $_REQUEST['width'];
												$length = $_REQUEST['length'];


												//$d_name = $_REQUEST['d_name'];
												$d_company = $_REQUEST['d_company'];
												$d_street1 = $_REQUEST['d_street1'];
												$d_phone = $_REQUEST['d_phone'];
												$d_email = $_REQUEST['d_email'];
												$d_city = $_REQUEST['d_city'];
												$d_state = $_REQUEST['d_state'];
												$d_country = $_REQUEST['d_country'];
												$d_zip = $_REQUEST['d_zip'];

												$mysqli = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
												$mysqli->set_charset("utf8");
												$sql = "INSERT INTO `ci_cotacao` (`id`, `name`, `company`, `street1`, `email`, `city`, `state`, `country`, `zip`, `weight`, `height`, `width`, `length`, `d_company`, `d_street`, `d_phone`, `d_email`, `d_city`, `d_state`, `d_country`, `d_zip`) VALUES (NULL, '$name', '$company', '$street1', '$email', '$city', '$state', '$country', '$zip', $weight, $height, $width, $length, '$d_company', '$d_street1', '$d_phone', '$d_email', '$d_city', '$d_state', '$d_country', '$d_zip'  )";

												$result = $mysqli -> query($sql);
												$mysqli -> close();


												echo "Cotação feita com sucesso. Aguarde resposta do nosso consultor.";

											
												echo "<style>
												#address-form {
													display: none;
												}
												</style>";
											}

											?>


											<?php

											// Checa a sessão
											if (isset($_SESSION['cadastro'])) {
												// Se estiver cadastrado, mostra o formulário
												$form = true;
												
											} else {
												// Se não estiver logado, mostra o formulário de login
												echo "Antes de usar o serviço, você precisa estar cadastrado. <br>";
												$form = false;
											}

											if ($form)
												{

											?>

											<form id="address-form" class="animated-fast" action="" autocomplete="off" method="POST">
												<h5>Dados do Remetente</h5>

												<div class="form-group">
													<label for="Inputstreet1">Endereço</label>
													<input type="text" class="form-control" id="street1" name="street1" aria-describedby="enderecoHelp" style="min-width: 300px;" placeholder="Entre com o endereço"  required>
													<small id="enderecoHelp" class="form-text text-muted">Digite a rua e o número do endereço.</small>
												</div>

												<div class="form-group">
													<label for="cidade">Cidade</label>
													<input type="text" class="form-control" id="city" name="city" required>
												</div>

												<div class="form-group">
													<label for="cep">CEP</label>
													<input type="text" class="form-control" id="zip" name="zip" required>
												</div>

												<div class="form-group">
													<label for="cidade">Estado</label>
													<input type="text" class="form-control" id="state" name="state" required>
												</div>

												<div class="form-group">
													<label for="pais">País</label>
													<input type="text" class="form-control" id="country" name="country" required>
												</div>

												<div class="form-group">
													<label for="pais">Largura / Altura / Comprimento / Peso</label>
													<div class="row col-md-12">
														<div class="col-md-3">
															<input type="text" class="form-control" id="width" name="width" placeholder="largura cm" required>
														</div>
														<div class="col-md-3">
															<input type="text" class="form-control" id="height" name="height" placeholder="altura cm" required>
														</div>
														<div class="col-md-3">
															<input type="text" class="form-control" id="length" name="length" placeholder="comprimento cm" required>
														</div>
														<div class="col-md-3">
															<input type="text" class="form-control" id="weight" name="weight" placeholder="peso kg" required>
														</div>
													</div>
												</div>

												<div class="row">

													<p>&nbsp;</p>
													
												</div>


												<h5>Dados do Destinatário</h5>

												

												<div class="form-group">
													<label for="Inputstreet1">Endereço</label>
													<input type="text" class="form-control" id="d_street1" name="d_street1" aria-describedby="enderecoHelp" style="min-width: 300px;" placeholder="Entre com o endereço" required>
													<small id="enderecoHelp" class="form-text text-muted">Digite a rua e o número do endereço.</small>
												</div>

												<div class="form-group">
													<label for="cidade">Cidade</label>
													<input type="text" class="form-control" id="d_city" name="d_city" required>
												</div>

												<div class="form-group">
													<label for="cep">CEP</label>
													<input type="text" class="form-control" id="d_zip" name="d_zip" required>
												</div>

												<div class="form-group">
													<label for="cidade">Estado</label>
													<input type="text" class="form-control" id="d_state" name="d_state" required>
												</div>

												<div class="form-group">
													<label for="pais">País</label>
													<input type="text" class="form-control" id="d_country" name="d_country" required>
												</div>

												<input type="submit" class="btn btn-primary btn-user btn-block" value="Enviar" name="enviar">
											</form>

											<?php 
												}

												?>

											<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
											<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfYbF07_JGPB9vyFrd3E4-7uul8RN8-XQ&callback=initAutocomplete&libraries=places&v=weekly" async></script>

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

	<script type='text/javascript' src='wp-content/plugins/aheto/assets/frontend/js/frontend8a54.js?ver=1.0.0' id='frontend-js-js'></script>
	<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7' id='regenerator-runtime-js'></script>

	<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/indexd03b.js?ver=5.5.1' id='contact-form-7-js'></script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minb106.js?ver=2.7.0-wc.5.8.0' id='jquery-blockui-js'></script>

	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min3e35.js?ver=5.8.0' id='wc-add-to-cart-js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-datepicker/js/wpdp_auto_script2098.js?ver=202111160718' id='datepicker-script-auto-js'></script>

	<script type='text/javascript' src='wp-content/plugins/qodeblock/dist/assets/js/dismiss0674.js?ver=1634829453' id='qodeblock-dismiss-js-js'></script>
	<script type='text/javascript' src='wp-includes/js/comment-reply.min080f.js?ver=5.8.2' id='comment-reply-js'></script>
	<script type='text/javascript' src='wp-content/themes/moovit/aheto/js/aheto-frontend080f.js?ver=5.8.2' id='moovit-script-frontend-js'></script>

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