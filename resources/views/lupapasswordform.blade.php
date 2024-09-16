<!doctype html>
<html lang="en">

<head>
    <title>Lupa Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/loginform/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(/loginform/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Lupa Password </h2>
                    @if ($message = Session::get('msg'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

                        <form action="{{ route('lupapasswordstore') }}" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Ubah
                                    Password</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/loginform/js/jquery.min.js"></script>
    <script src="/loginform/js/popper.js"></script>
    <script src="/loginform/js/bootstrap.min.js"></script>
    <script src="/loginform/js/main.js"></script>

</body>

</html>
