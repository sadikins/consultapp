  @extends('layouts.app')

  @section('content')

  <!-- =========================
            Google Map
    =========================  -->
    <section class="google-map p-0">
      <div id="map" style="height: 500px;"></div>
      <script src="{{ asset('assets/js/google-map.js') }}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap" async defer></script>
    <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->

    @include('components.contact')

    @include('components.clients')

    <!-- ==========================
       Contact Info
    ============================ -->
    {{-- <section class="contact-info pt-0 pb-70">
      <div class="container">
        <div class="row">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">London Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="mailto:Promina@7oroof.com">Promina@7oroof.com</a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Berlin Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="mailto:Promina@7oroof.com">Promina@7oroof.com</a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Manchester Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="mailto:Promina@7oroof.com">Promina@7oroof.com</a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul><!-- /.contact__info-list -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact Info --> --}}

  @endsection
