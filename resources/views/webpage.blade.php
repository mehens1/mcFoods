<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="MC-Foods is a Fast Food Online Delivery Restaurant that are reliable and Trusted to deliver withing a short period of time and in a friendly budget." name="description">
    <meta content="Fast Food, Food, Food in Yola, Order food in Yola, Online Food Delivery, Online Food Delivery in Yola, Cheap food in Yola" name="keywords">

    <title>{{ $data['page'] }} :: MC-Foods, Yola | Home</title>

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
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header style="top: 0px" id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <!-- <h1><a href="index.html">Delicious</a></h1> -->
                <a href="index.php"><img src="assets/img/mcfoods-logo-inverse.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php#why-us">In Our Kitchen</a></li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="loginorsignin.php">Login / Register</a></li>

                    <!--
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>



          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
-->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

            <a href="customer/food-list.php" class="book-a-table-btn scrollto">Order Now</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Dishes</h2>
                                <p class="animate__animated animate__fadeInUp">At MC-Foods we make delicious foods and
                                    at a very fast feed to deliver....</p>
                                <div>
                                    <a href="#"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Served Hot is always Best...</h2>
                                <p class="animate__animated animate__fadeInUp">At MC-Foods, we love to deliver
                                    immediately after its cooked to be served hot, foods eaten hot is always a best way
                                    to enjoy meals....</p>
                                <div>
                                    <a href="#"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Never Stay Hungry waiting...</h2>
                                <p class="animate__animated animate__fadeInUp">At MC-Foods, we deliver in quicker time
                                    to avoid making you angry, because the wise say is "A hungry man, is an angry man"
                                    lol...</p>
                                <div>
                                    <a href="#"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("assets/img/about.jpg");'>
                        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>About <strong>MC-Foods</strong></h3>
                            <p>
                                MC-Foods is an online fast-food delivery company in the Central & Capital City of Yola,
                                Adamawa State, Nigeria, MC-Foods is a registered company under the umbrella of MEHENS
                                CREATIVE ENTERPRISE with a CAC Registration Number BN: 2732813.
                            </p>
                            <p class="fst-italic">
                                At MC-Foods, we are trust-worthy and can be relied on at anytime with the following
                                characteristics:
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Good food with good taste...</li>
                                <li><i class="bx bx-check-double"></i> Fast in deliveries...</li>
                                <li><i class="bx bx-check-double"></i> Good Customer relation</li>
                            </ul>
                            <p>
                                With us, you don't have to go out looking for food, using any of your internet connected
                                device you can make order of food to your door step in less than 20 minutes with full
                                confidence and security.
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Whu Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>What we have <span>In Our Kitchen</span> at the Moment</h2>

                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/Indomitables-and-chicken.png">
                            <h4>Indomie and Chicken</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Indomie and Chicken Now</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/supergetti.png">
                            <h4>Supergetti</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Supergetti Now</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/Indomitables-and-potato.png">
                            <h4>Indomie and Potato Chips</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Indomie and <br>Potato Chips
                                    Now</button>
                            </a>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/potato-and-egg.png">
                            <h4>Fried Potato Chips and Egg</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Fried Potato <br>Chips and Egg
                                    Now</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/pap.png">
                            <h4>Custered PAP</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Pap Now</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <img class="dishes-img" src="assets/img/jollof-rice.png">
                            <h4>Jollof Rice</h4>
                            <a href="customer/food-list.php">
                                <button class="btn-from-dishes" type="submit">Order Jollof Rice Now</button>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Whu Us Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Contact</span> Us</h2>
                    <p>You can contact us directly by email, phone number or drop us a message using the form below,
                        please help us improve by giving us a feeedback.<br>Thank you...</p>
                </div>
            </div>

            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 info">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Office Address:</h4>
                            <p>No. 41 Bishop Street, J/Yola,<br> Adamawa State, Nigeria</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>Monday-Saturday:<br>8:00AM - 9:00PM</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>
                                <a href="mailto:mcfoods@mehenscreatives.com">mcfoods@mehenscreatives.com</a>
                                <br>
                                <a href="mailto:info@mehenscreatives.com">info@mehenscreatives.com</a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>
                                <a href="tel:+2348107100130">0810 710 0130</a>
                                <br> <a href="tel:=2348161592940">0816 159 2940</a>
                            </p>
                        </div>
                    </div>
                </div>

                <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required maxlength="100">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required maxlength="100">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Subject" required maxlength="500">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button name="contact_sent_btn" type="submit">Send Message</button>
                    </div>
                </form>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- Alert Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 style="color: #f00" class="modal-title">Important Notice</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">MC-Foods is still on progress, the site will soon launch and be fully active,
                    please exercise some patience with us as our Technical Team are working tirelessly to the success of
                    the completion! <br><br>
                    Please Scroll to the Buttom of this page to subscribe to our newsletter by submitting your email
                    address to us to keep you updated on every of our update and upgrades, Thank you for believing in
                    us...
                    <br><br>

                    MC-Foods Cares
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


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
                            <a href="https://facebook.com/mcfastfoods" target="_blank" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>

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
