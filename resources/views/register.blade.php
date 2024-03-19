@extends('webPageLayout.webpage')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Register</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">

          <div class="center-form col-lg-4">
            <div class="register" id="register">
                  <h2 class="primary-color">Register</h2>
                  <hr class="white-color">
                  <form method="post" action="">

                      <input name="firstname" class="form-control" type="text" placeholder="First Name" required>
                      <br>
                      <input name="surname" class="form-control" type="text" placeholder="Surname..." required>
                      <br>
                      <input name="phone" class="form-control" type="tel" placeholder="Phone Number..." required>
                      <br>
                      <input name="email" class="form-control" type="email" placeholder="Email Address..." required>
                      <br>
                      <input name="password" class="form-control" type="password" placeholder="Password..." required>
                      <br>
                      <select name="state" id="newState" onchange="FetchState(this.value)" class="form-control" required>

                      </select>
                      <br>
                      <select name="lga" id="newLGA" class="form-control" onchange="FetchLGA(this.value)" required>
                      </select>
                      <br>
                      <input id="newAddress" name="address" class="form-control" type="text" placeholder="Address..." required>
                      <br>
                      <p class="white-color"><input required type="checkbox">
                          <a href="#" onclick="tandc()">Terms &amp; Condition Apply!</a>
                      </p>
                      <br>
                      <button name="register" class="btn-from-dishes" type="submit">Register</button>
                  </form>
                  <hr class="white-color">
                  <p class="white-color">Already a Member? <a href="{{ route('login') }}">Log In</a></p>
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

<script>
    function tandc(){
        $("#terms&Condion").modal('show');
    };
</script>
@endsection
