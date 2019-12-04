<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">
		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Metronic | Login Page 6</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="tem/assets/css/demo1/pages/general/login/login-6.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="tem/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="tem/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="tem/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="tem/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="tem/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="tem/assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div class="kt-login__logo">
										<a href="#">
											<img src="tem/assets/media/company-logos/logo-2.png">
										</a>
									</div>
									<div class="kt-login__signin">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Sign In To Admin</h3>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
												</div>
												<div class="form-group">
													<input class="form-control form-control-last" type="password" placeholder="Password" name="password">
												</div>
												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="remember"> Remember me
														<span></span>
													</label>
													<a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">Sign In</button>
												</div>
											</form>
										</div>
									</div>
									<div class="kt-login__forgot">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Forgotten Password ?</h3>
											<div class="kt-login__desc">Enter your email to reset your password:</div>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
													<button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(images/bgLogin.jpg);">
						{{-- <div class="kt-login__section">
							<div class="kt-login__block">
								<h3 class="kt-login__title">Join Our Community</h3>
								<div class="kt-login__desc">
									Lorem ipsum dolor sit amet, coectetuer adipiscing
									<br>elit sed diam nonummy et nibh euismod
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="tem/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="tem/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="tem/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
	

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
	
		<script src="tem/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="tem/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="tem/assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<!--end:: Global Optional Vendors -->
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="tem/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="tem/assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>