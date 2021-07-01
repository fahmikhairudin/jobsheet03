@extends('layouts.master')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h2>Halaman Program</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Program Karir</span>
                  <h4><a href="https://www.educastudio.com/program/karir">Program Karir</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Program Magang</span>
                  <h4><a href="https://www.educastudio.com/program/magang">Program Magang</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Program Kujungan Industri</span>
                  <h4><a href="https://www.educastudio.com/program/kunjungan-industri">Program Kujungan Industri</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('js/owl.js') }}"></script>
    <script src="{{ url('js/slick.js') }}"></script>
    <script src="{{ url('js/isotope.js') }}"></script>
    <script src="{{ url('js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
