<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/all.min.css" />
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/css/progressbar.css" />
        <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="assets/css/master-online-meeting.css" />

        <style>
 .card-custom {
            background-color: white; /* White background */
            color: #28a745; /* Green text color */
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #28a745; /* Green border */
            height: 100%; /* Ensure equal height */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none; /* Remove underline from anchor */
        }
        .card-custom .card-icon {
            font-size: 2rem; /* Smaller icon size */
            margin-bottom: 15px;
            color: #28a745; /* Green icon color */
        }
        .card-custom h4 {
            font-size: 1.25rem; /* Smaller font size */
            color: #28a745; /* Green text color */
        }
        .card-custom:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Add hover effect */
            transform: scale(1.02); /* Slightly scale up on hover */
        }
    </style>
    </head>

    <body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row g-4 w-100">
            <div class="col-md-6 d-flex">
                <a href="#" class="card card-custom flex-fill" data-bs-toggle="modal" data-bs-target="#signupform">
                    <i class="fas fa-user card-icon"></i>
                    <h4>Register as a User</h4>
                </a>
            </div>
            <div class="col-md-6 d-flex">
                <a href="{{ route('tailor.form') }}" class="card card-custom flex-fill">
                    <i class="fas fa-scissors card-icon"></i>
                    <h4>Register as a Tailor</h4>
                </a>
            </div>
        </div>
    </div>

    <!-- signup form  -->
    <div class="modal fade" id="signupform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="form-box-wrapper">
                    <div class="register-form-box">
                        <div class="btn-wrapper">
                            <button class="close-btn" data-bs-dismiss="modal">
                                <img src="assets/imgs/icon/cross.webp" alt="icon image" />
                            </button>
                        </div>
                        <div class="title-wrapper">
                            <!-- <h2 class="title"><span>Start Your <br />Journey</span> with us.</h2> -->
                        </div>

                        <div class="form-wrapper">
                            <form method="POST" action="{{ route('register') }}" class="user-form">
                                @csrf
                                <div class="input-field">
                                    <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                                </div>
                                <div class="input-field">
                                    <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                                </div>
                                <div class="input-field">
                                    <x-input id="number" class="block mt-1 w-full" type="number" name="number" :value="old('number')" required autocomplete="username" placeholder="Contact Number"  />
                                </div>
                                <div class="input-field">
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                                </div>
                                <div class="input-field">
                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                </div>
                                <div class="policy-field">
                                    <label for="policy">Remember me</label>
                                    <a href="#" class="forget-password">Forgot your password?</a>
                                </div>
                                <x-button class="btn btn-success">{{ __("Register") }}</x-button>
                            </form>
                        </div>
                        <div class="note">
                            <p>
                                Already have an account?
                                <span><a href="javascript:void(0)" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login Here!</a></span>
                            </p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
