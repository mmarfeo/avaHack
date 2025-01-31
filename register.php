<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ava Hack</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="../css/sb-admin-2.css" rel="stylesheet"> -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark h-100">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-6">

                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-4 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12 d-none d-lg-block bg-login-image">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user" action="backend/manage_users.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="InputName" name="name" placeholder="Enter Name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="InputSurname" name="surname" placeholder="Enter Surname...">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12 mb-12 mb-sm-12 pl-0 pr-0">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-sm-12 mb-12 mb-sm-12 mt-3 pl-0 pr-0">
                                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="password_confirm" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">Register</button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="medium" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="medium" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<!--     <script src="vendor/jquery/jquery.min.js"></script>
    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Cargar jQuery primero -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Luego cargar Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>