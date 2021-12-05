<footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="{{ asset(Voyager::image(setting('site.logo_light'))) }}" alt="logo" class="mb-30">
                <div class="mb-20">{!! setting('site.description') !!}</div>
                <ul class="social__icons list-unstyled">
                  <li><a href="{{ setting('site.facebook') }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="{{ setting('site.instagram') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="{{ setting('site.twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.col-xl-4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Services</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Assessment</a></li>
                    <li><a href="#">Consulting</a></li>
                    <li><a href="#">Coaching</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Other</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Company</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="">About Us</a></li>
                    <li><a href="#">Meet Our Team</a></li>
                    <li><a href="{{ route('blog') }}">News & Media</a></li>
                    <li><a href="{{ route('portfolio') }}">Case Studies</a></li>
                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 footer__widget footer__widget-newsletter">
              <h6 class="footer__widget-title">Newsletter</h6>
              <div class="footer__widget-content">
                <p>Sign up for industry alerts, our latest news, thoughts, and insights from Promina.</p>
                <form class="widget__newsletter-form">
                  <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button type="submit" class="btn btn__primary">
                      <i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </form>
              </div><!-- /.footer-widget-content -->
              <p class="text-right footer__more-info mt-20 mb-0">Have a question? <a href="{{ route('contact') }}">Click here</a></p>
            </div><!-- /.col-xl-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap justify-content-between">
              <nav>
                <ul class="footer__copyright-links list-unstyled d-flex flex-wrap mb-0">
                  <li><a href="#">Terms & Conditions </a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </nav>
              <p class="mb-0 color-white"> &copy; {{ date('Y') }} {{ setting('site.title') }}. With Love by
                <a href="#">msadikin.com</a>
              </p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer>
