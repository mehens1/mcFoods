@extends('webPageLayout.webpage')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Login</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">


          <div class="center-form col-lg-4">

              <div class="login" id="login">
                  <h2 class="primary-color">Login</h2>
                  <hr class="white-color">
                  <form method="post" action="">
                      <input name="loginEmail" class="form-control" type="email" placeholder="Enter Email Address..." required>
                      <br>
                      <input name="loginPassword" class="form-control" type="password" placeholder="Enter password..." required>
                      <br>
                      <p class="white-color"><input type="checkbox"> Keep me logged in</p>
                      <br>
                      <button name="loginNow" class="btn-from-dishes" type="submit">Login</button>
                  </form>
                  <hr class="white-color">
                  <p class="white-color">New User? <a href="{{ route('register') }}">Register</a></p>

                  <hr class="white-color">
                  <p class="white-color">Forgot Password? <a href="{{ route('forgotPassword') }}">Recover</a></p>
              </div>
          </div>

      </div>
    </section>

  </main><!-- End #main -->

<!-- Terms and Condition ModalAlert Modal -->
<div class="modal" id="terms&Condion">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 style="color: #f00" class="modal-title">Terms &amp; Condion</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">No refund of payment after payment</div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
