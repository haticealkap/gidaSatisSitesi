<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:33:33 GMT -->
<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{ asset('evara-backend/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sign in</h4>
                    <form action="/admin/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" placeholder="Username or email" name="email" type="text">
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div> <!-- form-group// -->
        
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100"> Login </button>
                        </div> <!-- form-group// -->
                    </form>
                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                document.write(new Date().getFullYear())
                </script> ©, Evara - HTML Ecommerce Template .
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-account-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:33:33 GMT -->
</html>