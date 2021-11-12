<?php 
    session_start();
    if (isset($_SESSION['shelly_admin'])) {
        header('location: lecturers');
        exit();
    }
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Blockchain Attendance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Nazox - MVC5 & ASP.Net Core Admin & Dashboard Template, Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="./" class="">
                                                    <img src="assets/images/logo-dark.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                    <img src="assets/images/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                                </a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                            <p class="text-muted">Sign in to continue to your account.</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form class="" action="lecturers" id="loginForm" method="POST">
                                                <div id="result"></div>
                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                </div>

                                                <div class="mb-3 auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">Remember me</label>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                                        <span class="spinner" id="spinner" style="display: none;">
                                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                        </span>
                                                        <span class="btnText">
                                                            Login
                                                        </span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>


<script>
    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'ajax/login.php',
            type: 'POST',
            data : $(this).serialize(),
            cache: false,
            beforeSend: function() {
                $('#spinner').show();
                $('#result').hide();
                $('#btnText').hide();
            },
            success: function(data){
                if (data == 1) {
                    location.href = 'lecturers';
                }
                else{
                    $('#result').html(data);
                    $('#result').fadeIn();
                    $('#spinner').hide();
                    $('#btnText').show();
                }
            }
        })
    })
</script>