<!DOCTYPE html>
<!--
Template Name: dashgrin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>dashgrin I Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{ asset('backend/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-35 w-lg-65 w-sm-85 w-100 card pa-25 shadow-lg">
                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Paswword" autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label font-14" for="remember">Keep me logged in</label>
                                </div>
                                <button class="btn btn-success btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('backend/dist/js/jquery.slimscroll.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('backend/dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('backend/dist/js/feather.min.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('backend/dist/js/init.js') }}"></script>
</body>
</html>