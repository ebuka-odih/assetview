
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Assets Cryptoview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ba3b450c-fc6b-4063-9839-b0530d3f2c0f";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body>

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Free Register</h5>
                                    <p>Get your free Skote account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="{{ route('index') }}">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="needs-validation" method="POST" action="{{ route('register') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input type="hidden" name="referred_by" value="{{ request()->id}}" />

                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="" placeholder="Enter Fullname" required>
                                    <div class="invalid-feedback">
                                         Enter Fullname
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" required>
                                    <div class="invalid-feedback">
                                         Enter Email
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                                    <div class="invalid-feedback">
                                         Enter Username
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="Confirm password" required>
                                    <div class="invalid-feedback">
                                        Please Confirm Your Password
                                    </div>
                                </div>

                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                </div>



                                <div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Assets Cryptoview <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Assets Cryptoview.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 14:25:01 GMT -->
</html>
