<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPL2020 || Password Link</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="assets/images/IPL2020.png">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app app-reset-password p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="/"><img class="logo-icon me-2"
                                src="assets/images/IPL2020.png" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Password Reset</h2>

                    <div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a link to a
                        page where you can easily create a new password.</div>

                    <div class="auth-form-container text-left">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="auth-form resetpass-form" method="POST" action="/forget-password">
                            @csrf
                            <div class="email mb-3">
                                <label class="sr-only" for="reg-email">Your Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Reset
                                    Password</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5"><a class="app-link" href="/login">Log in</a>
                            <span class="px-2">|</span> <a class="app-link" href="/register">Sign
                                up</a>
                        </div>
                    </div>
                    <!--//auth-form-container-->


                </div>
                <!--//auth-body-->

                @include('Backend.footer')

            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
                        <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the
                            template license <a
                                href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.
                        </div>
                    </div>
                </div>
            </div>
            <!--//auth-background-overlay-->
        </div>
        <!--//auth-background-col-->

    </div>
    <!--//row-->


</body>

</html>
