<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css" type="text/css">
    <!--Font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Website</title>
</head>

<body>
   

    <div class="h-100 bg-light">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card bg-dark card-login" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="image/login.jpg" alt="login form" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; " />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">

                                        <div class="d-flex text-light align-items-center mb-3 pb-1">
                                            <span class="h1" style="font-family: 'Pacifico', cursive color:#E22B97" >Wedays</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 text-light" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-secondary btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                        <a class="small text-muted" href="fp.php">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2 text-light">Don't have an account? <a class="text-light" href="register.php">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
