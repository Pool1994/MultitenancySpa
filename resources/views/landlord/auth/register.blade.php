
<!DOCTYPE html>
<html lang="en" dir="" class="h-100">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Signup | Front - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="{{ asset('css/css2.css?family=Inter:wght@400;600&display=swap') }}" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css?v=1.0') }}">
</head>

<body class="d-flex align-items-center min-h-100">
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-light navbar-absolute-top">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <!-- White Logo -->
        <a class="navbar-brand d-none d-lg-flex" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo-white.svg') }}" alt="Logo">
        </a>
        <!-- End White Logo -->

        <!-- Default Logo -->
        <a class="navbar-brand d-flex d-lg-none" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <div class="ms-auto">
          <a class="link link-sm link-secondary" href="index.html">
            <i class="bi-chevron-left small ms-1"></i> Go to main
          </a>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1">
    <!-- Form -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-dark" style="background-image: url({{ asset('assets/svg/components/wave-pattern-light.svg') }});">
          <div class="flex-grow-1 p-5">
            <!-- Blockquote -->
            <figure class="text-center">
              <div class="mb-4">
                <img class="avatar avatar-xl avatar-4x3" src="{{ asset('assets/svg/brands/mailchimp-white.svg') }}" alt="Logo">
              </div>

              <blockquote class="blockquote blockquote-light">“ It has many landing page variations to choose from, which one is always a big advantage. ”</blockquote>

              <figcaption class="blockquote-footer blockquote-light">
                <div class="mb-3">
                  <img class="avatar avatar-circle" src="{{ asset('assets/img/160x160/img9.jpg') }}" alt="Image Description">
                </div>

                Lida Reidy
                <span class="blockquote-footer-source">Project Manager | Mailchimp</span>
              </figcaption>
            </figure>
            <!-- End Blockquote -->

            <!-- Clients -->
            <div class="position-absolute start-0 end-0 bottom-0 text-center p-5">
              <div class="row justify-content-center">
                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('assets/svg/brands/fitbit-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('assets/svg/brands/business-insider-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{ asset('assets/svg/brands/capsule-white.svg') }}" alt="Logo">
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Clients -->
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="flex-grow-1 mx-auto" style="max-width: 58rem;">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-7">
              <h1 class="h2">Welcome to Front</h1>
              <p>Fill out the form to get started.</p>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form class="js-validate needs-validation" novalidate="" action="{{route('signup')}}" method="POST">
              @csrf
               @include('landlord.auth.form-register')
              <!-- Check -->
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheck" name="signupFormPrivacyCheck" required="">
                <label class="form-check-label small" for="signupHeroFormPrivacyCheck"> By submitting this form I have read and acknowledged the <a href="page-privacy.html">Privacy Policy</a></label>
                <span class="invalid-feedback">Please accept our Privacy Policy.</span>
              </div>
              <!-- End Check -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p>Already have an account? <a class="link" href="page-login.html">Log in here</a></p>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{asset('assets/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    // (function() {
    //   // INITIALIZATION OF BOOTSTRAP VALIDATION
    //   // =======================================================
    //   HSBsValidation.init('.js-validate', {
    //     onSubmit: data => {
    //       data.event.preventDefault()
    //       alert('Submited')
    //     }
    //   })


    //   // INITIALIZATION OF TOGGLE PASSWORD
    //   // =======================================================
    //   new HSTogglePassword('.js-toggle-password')
    // })()
  </script>
</body>
</html>