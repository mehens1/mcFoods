@extends('webPageLayout.webpage')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Forgot Pawword</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Forgot Password</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">


                <div class="center-form col-lg-4">

                    <div class="login" id="login">
                        <h2 class="primary-color">Recover Account Password</h2>
                        <hr class="white-color">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter Registered Email Address..."
                                required>
                            <br>
                            <button class="btn-from-dishes" type="submit">Submit</button>
                        </form>
                        <hr class="white-color">
                        <p class="white-color">Remembered Password? <a
                                href="{{ route('login') }}">Login</a></p>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
