<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | {{ config("app.name") }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            content="A fully featured admin theme which can be used to build CRM, CMS, etc."
            name="description"
        />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('backend/assets/images/favicon.ico') }}"
        />

        <!-- Bootstrap css -->
        <link
            href="{{ asset('backend/assets/css/bootstrap.min.css') }}"
            rel="stylesheet"
            type="text/css"
        />
        <!-- App css -->
        <link
            href="{{ asset('backend/assets/css/app.min.css') }}"
            rel="stylesheet"
            type="text/css"
            id="app-style"
        />
        <!-- icons -->
        <link
            href="{{ asset('backend/assets/css/icons.min.css') }}"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Head js -->
        <script src="{{ asset('backend/assets/js/head.js') }}"></script>
    </head>

    <body class="auth-fluid-pages pb-0">
        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">
                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a
                                    href="{{ route('register') }}"
                                    class="logo logo-dark text-center"
                                >
                                    <span class="logo-lg">
                                        <img
                                            src="{{
                                                asset(
                                                    'backend/assets/images/logo-dark.png'
                                                )
                                            }}"
                                            alt=""
                                            height="42"
                                        />
                                    </span>
                                </a>

                                <a
                                    href="{{ route('register') }}"
                                    class="logo logo-light text-center"
                                >
                                    <span class="logo-lg">
                                        <img
                                            src="{{
                                                asset(
                                                    'backend/assets/images/logo-light.png'
                                                )
                                            }}"
                                            alt=""
                                            height="42"
                                        />
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign Up</h4>
                        <p class="text-muted mb-4">
                            Don't have an account? Create your account, and wait
                            for your company to verify your request
                        </p>

                        <!-- form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >Full Name</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    id="name"
                                    placeholder="Enter your full name"
                                    required
                                    name="name"
                                    :value="old('name')"
                                    autofocus
                                    autocomplete="name"
                                />
                            </div>
                            <!-- User Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label"
                                    >username</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    id="username"
                                    placeholder="Enter your user name"
                                    required
                                    name="username"
                                    :value="old('username')"
                                    autofocus
                                    autocomplete="username"
                                />
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label"
                                    >Email address</label
                                >
                                <input
                                    id="email"
                                    class="form-control"
                                    type="email"
                                    name="email"
                                    :value="old('email')"
                                    required
                                    autocomplete="email"
                                    placeholder="Enter your email"
                                />
                            </div>
                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label"
                                    >Phone Number</label
                                >
                                <input
                                    id="phone"
                                    class="form-control"
                                    type="text"
                                    name="phone"
                                    :value="old('phone')"
                                    required
                                    autocomplete="phone"
                                    placeholder="Enter your phone Number"
                                />
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >Password</label
                                >
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                        placeholder="Enter your password"
                                    />
                                    <div
                                        class="input-group-text"
                                        data-password="false"
                                    >
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label
                                    for="password_confirmation"
                                    class="form-label"
                                    >Confirm Password</label
                                >
                                <div class="input-group input-group-merge">
                                    <input
                                        type="password"
                                        id="password_confirmation"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        placeholder="re-type your password"
                                    />
                                    <div
                                        class="input-group-text"
                                        data-password="false"
                                    >
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="checkbox-signup"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="checkbox-signup"
                                        >I accept
                                        <a
                                            href="javascript: void(0);"
                                            class="text-dark"
                                            >Terms and Conditions</a
                                        ></label
                                    >
                                </div>
                            </div>
                            <div class="text-center d-grid">
                                <button
                                    class="btn btn-danger waves-effect waves-light"
                                    type="submit"
                                >
                                    Sign Up
                                </button>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">
                                Already have account?
                                <a
                                    href="{{ route('login') }}"
                                    class="text-muted ms-1"
                                    ><b>Log In</b></a
                                >
                            </p>
                        </footer>
                    </div>
                    <!-- end .card-body -->
                </div>
                <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">About Trade ... !</h2>
                    <p class="lead">
                        <i class="mdi mdi-format-quote-open"></i> “Trade isn't
                        about goods. Trade is about information. Goods sit in
                        the warehouse until information moves them.”
                        <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">- C.J. Cherryh, Chanur's Legacy</h5>
                </div>
                <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    </body>
</html>
