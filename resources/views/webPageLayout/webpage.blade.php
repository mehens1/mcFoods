<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="MC-Foods is a Fast Food Online Delivery Restaurant that are reliable and Trusted to deliver withing a short period of time and in a friendly budget." name="description">
    <meta content="Fast Food, Food, Food in Yola, Order food in Yola, Online Food Delivery, Online Food Delivery in Yola, Cheap food in Yola" name="keywords">

    <title>{{ $data['page'] }} :: MC-Foods</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.png.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header style="top: 0px" id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <!-- <h1><a href="index.html">Delicious</a></h1> -->
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/mcfoods-logo-inverse.png') }}" alt="MC Foods Logo" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="nav-link scrollto" href="{{ route('home') }}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#why-us">In Our Kitchen</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('loginRegister') }}">Login / Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

            <a href="customer/food-list.php" class="book-a-table-btn scrollto">Order Now</a>

        </div>
    </header><!-- End Header -->

    @yield('content')

    <footer id="footer">
        <div class="container">

            <h3>MC-Foods</h3>
            <p>At MC-Foods, we make it fast and still good, we hate to blow trumpeth, you will testify!</p>

            <hr>

            <div class="row">


                <div class="col-lg-6">
                    <div class="box">
                        <div class="social-links">
                            <p>Follow us on our social media</p>
                            <a href="https://facebook.com/mcfastfoods" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box">
                        <div class="social-links">
                            <p>Subscribe to our newsletter and updates</p>
                            <form method="post" action="">

                                <input required name="sub_email" class="form-control" type="email"
                                    style="width: 70%; float: left" placeholder="Enter Email to subscribe...">
                                <button type="submit" name="subscribe" class="btn-from-dishes">Subscribe</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="copyright">
                &copy; Copyright <strong><span>MC-Foods Nig. Ltd</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    {{-- <script>
        $(document).ready(function() {
            $('#newLGA').hide();
            $('#newAddress').hide();

        });

        document.getElementById("success-sub").style.display = "none";
        document.getElementById("failed-sub").style.display = "none";


        function FetchState(id) {

            $('#newLGA').show();
            //$('#newAddress').show();
            $('#newLGA').html('');

            $.ajax({
                type: 'post',
                url: 'includes/functions.php',
                data: {
                    state_id: id
                },

                success: function(data) {
                    $('#newLGA').html(data);
                }

            })

        }

        function FetchLGA(lgaID) {

            $('#newAddress').show();

        }

        function tandc() {
            $("#terms&Condion").modal('show');
        };

        function gotoRegister() {
            document.getElementById("register").style.display = "block";
            document.getElementById("login").style.display = "none";
        }

        function gotoLogin() {
            document.getElementById("register").style.display = "none";
            document.getElementById("login").style.display = "block";
        }
    </script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
