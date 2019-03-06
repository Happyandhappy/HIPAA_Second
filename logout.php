<?php
	session_start();
	session_unset();
	header("Location:login.php");
?>







///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Website Title -->
    <title>Payment - Argo Training Course Landing Page Template</title>

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Training course HTML landing page template built with Bootstrap featuring countdown timer and 3 registration form versions." />
    <meta name="keywords" content="training, course, online, tutorial, learn, company, instructor, coaching, startup, school, registration, contact form, html template, landing page, bootstrap" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,700" rel="stylesheet" />
    <link href="static/css/bootstrap.css" rel="stylesheet" />
    <link href="static/css/font-awesome.css" rel="stylesheet" />
    <link href="static/css/material-design-iconic-font.css" rel="stylesheet" />
    <link href="static/css/swiper.css" rel="stylesheet" />
    <link href="static/css/magnific-popup.css" rel="stylesheet" />
    <link href="static/css/payment_styles.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="static/images/favicon.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Stripe -->
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>

    <!-- NAVIGATION -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="row">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.html#header" >
            	<img src="static/images/logo.svg" alt="logo"/>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="navbar-collapse collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a class="page-scroll" href="index.html#header">HOME</a>
              </li>
              <li>
                <a class="page-scroll" href="index.html#overview">OVERVIEW</a>
              </li>
              <li>
                <a class="page-scroll" href="index.html#details">DETAILS</a>
              </li>
              <li>
                <a class="page-scroll" href="index.html#pricing">PRICING</a>
              </li>
              <li><a class="page-scroll" href="index.html#facts">FACTS</a></li>
              <li>
                <a class="page-scroll" href="index.html#instructors">INSTRUCTORS</a>
              </li>
              <li>
                <a class="page-scroll" href="index.html#frequent-questions">FAQ</a>
              </li>
              <li>
                <a class="page-scroll" href="index.html#footer">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end of navigation -->

    <!-- PAYMENT HEADER -->
    <header id="payment-header" class="payment-header">
      <div class="container">
        <h2 class="text-center">Payment Details</h2>
        <img class="decorative-line" src="static/images/decorative-line.svg" alt="decorative line"/>
        <p class="seventy-percent-width">
          The form only sends data to your desired email address specified in
          the template's php files. To process payment you need to integrate a
          third party provider like <a href="https://stripe.com/">Stripe</a>,
          <a href="https://www.paypal.com/">PayPal</a>,
          <a href="https://gumroad.com/">Gumrod</a> or others.
        </p>
      </div>
      <!-- end of container -->
    </header>
    <!-- end of header -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Thank You !</h4>
          </div>
          <div class="modal-body text-center">
              <div class="thank-you-pop">
                  <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                  <h1>Thank You!</h1>
                  <p>Your submission is received and we will contact you soon</p>
                  <button class="btn btn-default" data-dismiss="modal">Back</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of Modal -->

    <!-- PAYMENT CONTENT -->
    <div class="payment-content">
      <div class="container">
        <!-- Checkout Cart -->
        <div class="checkout-cart">
          <table>
            <thead>
              <tr class="cart-header-row">
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Item Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Argo Training Course</td>
                <td>$99.00</td>
                <td>Remove</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="3" class="text-right">Total: $99.00</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- end of checkout-cart -->

        <!-- Payment Icons -->
        <div class="payment-icons">
          <img src="static/images/payment-icon-amex.png" alt="payment icon" />
          <img src="static/images/payment-icon-visa.png" alt="payment icon" />
          <img src="static/images/payment-icon-mastercard.png" alt="payment icon" />
          <img src="static/images/payment-icon-paypal.png" alt="payment icon" />
          <img src="static/images/payment-icon-discover.png" alt="payment icon" />
        </div>
        <!-- end of payment-icons -->

        <!-- Payment Method -->
        <div class="payment-method">
          <h4>Registration Information</h4>
          <form id="StripeForm" data-toggle="validator">
            <p>
              <strong>First Name *</strong><br />
              We will use this for the purchase receipt
            </p>
            <div class="form-group">
              <input type="text" class="form-control-input" id="firstname" placeholder="First Name" required/>
              <div class="help-block with-errors"></div>
            </div>

            <p>
              <strong>Last Name *</strong><br />
              We will use this for the purchase receipt
            </p>
            <div class="form-group">
              <input type="text" class="form-control-input" id="lastname" placeholder="Last Name" required />
              <div class="help-block with-errors"></div>
            </div>

            <p>
              <strong>Phone Number *</strong><br />
              We will use this to contact you just in case
            </p>
            <div class="form-group">
              <input type="text" class="form-control-input" id="phone" placeholder="Phone Number" required />
              <div class="help-block with-errors"></div>
            </div>

            <p>
              <strong>Email Address *</strong><br />
              We will send the purchase receipt to this address
            </p>
            <div class="form-group">
              <input type="email" class="form-control-input" id="email" placeholder="Email" required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-row">
              <label for="card-element">
                Credit or debit card
              </label>
              <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
              </div>

              <!-- Used to display form errors. -->
              <div id="card-errors" role="alert"></div>
            </div>

            <a class="show-terms" data-toggle="collapse" data-target="#terms-paypal">Show Terms</a>
            <div id="terms-paypal" class="collapse terms-text">
              These terms are governed by English law. Any contract for the
              purchase of goods from this site and any dispute or claim arising
              out of or in connection with any such contract will be governed by
              English law. You and we both agree that the courts of England and
              Wales will have non-exclusive jurisdiction. However, if you are a
              resident in Northern Ireland you may also bring proceedings in
              Northern Ireland, and if you are a resident in Scotland you may
              also bring proceedings in Scotland.
            </div>

            <div class="form-group">
              <input type="checkbox" id="terms" value="Agreed-to-Terms" required/>
              Agree to our terms of use
              <div class="help-block with-errors"></div>
            </div>

            <p><strong>Purchase Total:</strong> $99</p>
            <input type="hidden" name="stripeToken" id="stripeToken" value="" />
            <button type="submit" class="form-control-submit-button">
              REGISTER NOW
            </button>
            <div class="form-message">
              <div id="msgSubmit" class="h3 text-center hidden"></div>
            </div>
          </form>
        </div>
        <!-- enf of payment-method -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of payment-content -->

    <!-- FOOTER -->
    <div id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-pane">
              <h4>Contact Details</h4>
              <div class="footer-details">
                <p>
                  Argo is an online training course that will teach you how to
                  sell online
                </p>
                <p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> 22
                  Innovative Area, San Francisco, CA 94043, California, USA
                </p>
                <p>
                  <i class="fa fa-phone" aria-hidden="true">
                  	<a class="phone-number" href="tel:003024630820">+30 2463 0820</a></i>&nbsp;&nbsp;
                  	<i class="fa fa-mobile" aria-hidden="true">
                  		<a class="phone-number" href="tel:003071630231">+30 7163 0231</a></i>
                  <i class="fa fa-envelope-o" aria-hidden="true">
                  	<a href="mailto:contact@argo.com">contact@argo.com</a></i>&nbsp;&nbsp;
                  	<i class="fa fa-chrome" aria-hidden="true"><a href="#your-link">www.argo.com</a></i>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-pane">
              <h4>Social Networks</h4>
              <!-- Social Icons Container -->
              <div class="social-icons-container">
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
                <span class="fa-stack fa-lg">
                  <a href="#your-link-here">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                  </a>
                </span>
              </div>
              <!-- end of social icons container -->
              <h4>Official Partners</h4>
              <p>
                Delivery Services: <a>www.fastcompany.com</a> <br />
                Music Media Streaming: <a>www.musicstream.com</a>
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-pane">
              <!-- Contact Form -->
              <form id="ContactForm" data-toggle="validator">
                <div class="form-group first">
                  <input type="text" class="form-control-input" id="cname" placeholder="Name" required/>
                </div>
                <div class="form-group second">
                  <input type="email" class="form-control-input" id="cemail" placeholder="Email" required />
                </div>
                <div class="form-group third">
                  <textarea class="form-control-textarea" id="cmessage" placeholder="Write your message here" rows="4" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control-submit-button">
                    SUBMIT
                  </button>
                </div>
                <div class="form-message">
                  <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of footer -->

    <!-- COPYRIGHT -->
    <div class="copyright">
      <div class="container text-center">
        <span>Copyright © Argo - Training Course Landing Page Template by</span>
        <a class="inverse" href="http://www.inovatik.com">Inovatik</a>
      </div>
      <!-- end of container -->
    </div>
    <!-- end of copyright -->

    <!-- SCRIPTS -->
    <script src="static/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
    <script src="static/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Bootstrap v3.3.7 -->
    <script src="static/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
    <script src="static/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- The Final Countdown v2.2.0 plugin for jQuery -->
    <script src="static/js/swiper.min.js" type="text/javascript"></script>
    <!-- Swiper v3.4.2 for image gallery swiper -->
    <script src="static/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!-- Magnific Popup v1.1.0 for lightboxes -->
    <script src="static/js/waypoints.min.js" type="text/javascript"></script>
    <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
    <script src="static/js/jquery.counterup.min.js" type="text/javascript"></script>
    <!-- Counter-Up v1.0 for statistics -->
    <script src="static/js/validator.min.js" type="text/javascript"></script>
    <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->

    <script src="static/js/scripts.js" type="text/javascript"></script>
    <!-- Custom scripts -->
  </body>
</html>
<script>
  (function() {
    // Create a Stripe client.
    var stripe = Stripe("{{stripe_key}}");
    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: "white",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#aab7c4"
        },
        iconColor:"#a5a5a5"
      },
      invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };

    // Create an instance of the card Element.
    var card = elements.create("card", { hidePostalCode: true, style: style });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount("#card-element");

    // Handle real-time validation errors from the card Element.
    card.addEventListener("change", function(event) {
      var displayError = document.getElementById("card-errors");
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = "";
      }
    });

    // Handle form submission.
    var form = document.getElementById("StripeForm");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      submitMSG(1, '');
      if (document.getElementById("stripeToken").value !== "") {
        stripeTokenHandler(document.getElementById("stripeToken").value);
        return;
      }

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById("card-errors");
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token.id);
        }
      });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var ele = document.getElementById("stripeToken");
      ele.setAttribute("value", token);

      /* Stripe FORM */
      var s = $("#StripeForm")
        .validator("validate")
        .has(".has-error:visible").length;
      if (s === 0) {
        submitStripeForm();
      }
      console.log(s);
    }

    function submitStripeForm() {
      preloader.fadeIn(10);
      // initiate variables with form content
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var terms = $("#terms").val();
      var stripeToken = $("#stripeToken").val();
      card.clear();
      $("#stripeToken").val("");
      $.ajax({
        type: "POST",
        url: "/charge",
        data:
          "firstname=" +
          firstname +
          "&lastname=" +
          lastname +
          "&phone=" +
          phone +
          "&email=" +
          email +
          "&terms=" +
          terms +
          "&stripeToken=" +
          stripeToken,
        success: function(text) {
          preloader.fadeOut(10);
          if (text == "success") {
            formSuccessStripe();
          } else {
            formError();
            submitMSG(false, text);
          }
        }
      });
    }

    function formSuccessStripe() {
      $("#StripeForm")[0].reset();
      submitMSG(true, "You Are Registered!");
      $("#myModal").modal();
      // close popup after sucesfully registered! added by Johan
    }

    function formErrorStripe() {
      $("#StripeForm")
        .removeClass()
        .addClass("shake animated")
        .one(
          "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
          function() {
            $(this).removeClass();
          }
        );
    }

    function submitMSG(valid, msg) {
      if (valid) {
        var msgClasses = "h3 text-center tada animated text-success";
      } else {
        var msgClasses = "h3 text-center text-danger";
      }
      $("#msgSubmit")
        .removeClass()
        .addClass(msgClasses)
        .text(msg);
    }
  })();
</script>
