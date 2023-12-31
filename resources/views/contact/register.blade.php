<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Contact | Register</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <style>
        .auth-wrapper {
            min-height: 92vh;
        }

        .auth-wrapper h1 {
            font-size: 1.5em;
            font-weight: 700;
            color: #6c757d;
            letter-spacing: 1px;
            text-align: center;
            text-transform: uppercase;
        }

        .auth-wrapper .form-label {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.html">
                <strong>Contact</strong> App
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Companies</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Contacts</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2"><a href="#" class="btn btn-outline-secondary">Login</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-outline-primary">Register</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            John Doe
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="profile.html">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @extends('layout')
    @section('content')
    <!-- content -->
    <div class="card auth-wrapper d-flex bg-light">
        <div class="col-md-4 m-auto">
            <div class="bg-white shadow-sm">
                <h1 class="border-bottom p-4">Register</h1>

                <div class="px-4 pt-4">

                    <form action="{{ route('register') }}"  method="post">
                        {!! csrf_field() !!}
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation" />
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" value="Save" class="btn btn-block btn-primary">Register</button>
                            <div class="text-center py-4 text-muted">
                                Already have account?
                                <a href="login.html" class="text-muted font-weight-bold text-decoration-none">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>