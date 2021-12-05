<section class="google-map-layout2 p-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 ">
            <div class="contact-info-carousel">
              <h5 class="contact__info-title">Contact Us</h5>
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false}'>
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">DBA Consultan</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>{{ setting('site.address') }}</li>
                    <li>Email:
                        <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                        <a href="mailto:{{ setting('site.email_2') }}">{{ setting('site.email_2') }}</a>
                    </li>
                    <li>Hours: Mon-Fri: 9am – 7pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Our Social Media</h4>
                  <ul class="contact__info-list list-unstyled">
                      <li></li>
                      <li><a href="{{ setting('site.instagram') }}" target="_blank"><i class="fa fa-instagram"> : Instagram</i></a></li>
                      <li><a href="{{ setting('site.facebook') }}" target="_blank"><i class="fa fa-facebook"> : Facebook</i></a></li>
                      <li><a href="{{ setting('site.linkedin') }}" target="_blank"><i class="fa fa-linkedin"> : LinkedIn</i></a></li>
                      <li><a href="{{ setting('site.twitter') }}" target="_blank"><i class="fa fa-twitter"> :  Twitter</i></a></li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
              </div><!-- /.slick-carousel -->
            </div><!-- /.contact-info-carousel -->
            <div id="map" style="height: 460px;"></div>
            <script src="{{ asset('assets/js/google-map.js') }}"></script>
             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap" async
              defer></script>
            <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
