<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login Page</title>
    <meta content="Themesbrand" name="author" />
    <link rel="icon" type="image/png" href="/img/web/Logo.png"> 

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern shadow-none">
                        <div class="card-body">
                            <div class="p-3">
                                <h4 class="font-18 text-center">Login Page</h4>
                                <p class="text-muted text-center mb-4">Sign in to Admin Panel</p>
                                @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                                @endif
                                @if(session('fail'))
                                <div class="alert alert-danger" role="alert">
                                    {{session('fail')}}
                                </div>
                                @endif
                                <form class="form-horizontal" action="/postlogin" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                                        @error('email') <span class="text-danger">{{$message}}</span>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        @error('password') <span class="text-danger">{{$message}}</span>@enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-dark btn-block waves-effect waves-light" type="submit">Log In</button>
                                    </div>

                                </form>
                                <div class="mt-4 text-center">
                                    <p class="mb-0"><a href="/">Back to Website?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>