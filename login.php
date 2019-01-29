<?php
session_unset();
?>


<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>HIPAA Login</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
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
		<!--end::Web font -->

		<!--begin::Base Styles -->
		<link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" type="image/png" href="https://hipaadev.us/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="index.php">
								<img src="https://hipaacomplete.com/wp/wp-content/uploads/logo.png">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To Portal</h3>
							</div>

							<form class="m-login__form m-form" method="post" action="Controller.php">
								<input type="hidden" name="action" value="login">
								<div class="form-group m-form__group">
									<select class="form-control m-input" name="host" required="">
										<option value="Hipaadev.us">Hipaadev.us</option>
										<option value="Hipaastaging.us">Hipaastaging.us</option>
										<option value="Acceptanceh.us">Acceptanceh.us</option>
										<option value="Hipaacomplete.com">Hipaacomplete.com</option>
									</select>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Organization ID" name="orgid">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin::Base Scripts -->
		<script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->

		<!--begin::Page Snippets -->
		<script src="assets/js/login.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>

	<!-- end::Body -->
</html>

