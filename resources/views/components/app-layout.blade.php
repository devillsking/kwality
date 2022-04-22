
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwality Design</title>
    <link href="{{asset('assets/img/logo/favicon.png')}}" rel="shortcut icon" type="image/png" />

    <!-- Link's -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plan.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/feature.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/checkout.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/productdetails.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}" />
    <!-- Link's -->

    <!-- CDN LINK -->
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- CDN LINK -->
    @yield("header_css")
</head>

<body>

    <!-- Header -->
    <nav class="navbar_container">
        <div class="left_nabvar">
            <a href="/"><img class="logo pointer" src="{{asset('assets/img/logo/logo.png')}}" alt="logo" /></a>
        </div>
        <div class="right_nabvar">
            <a class="secondaryColor pointer" href="{{route('home')}}#about">About us</a>
            <a class="secondaryColor pointer" href="{{route('plan.user')}}">Plan's</a>
            <a class="secondaryColor pointer" href="{{route('home')}}#contact">Contact us</a>
            <a class="secondaryColor pointer" href="{{route('login')}}">Login</a>
        </div>
    </nav>
    <!-- Header -->

    @yield('content') 


    <!-- Footer -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Kwality Design</h3>
                        <p>
                            Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a document or a typeface without relying on meaningful
                            content. Lorem ipsum may be used as a placeholder before the final copy is available.
                        </p>
                    </div>
                    <div class="col item social">
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">©2022 Kwality Design - All rights reserved</p>
            </div>
        </footer>
    </div>
    <!-- Footer -->


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Script -->
</body>
@yield('footer_link')
</html>
