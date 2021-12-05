<section class="contact-info-layout2 pt-60 pb-30">
      <div class="container">
        <div class="row align-items-end">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Email</h4>
                <ul class="contact__info-list list-unstyled">
                  <li><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                  <li><a href="mailto:{{ setting('site.email_2') }}">{{ setting('site.email_2') }}</a></li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
               <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Our Location</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>{{ setting('site.address') }}</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="cta__banner">
              <h5 class="cta__title color-white"> Driving Balance in Your Work & Life</h5>
              <p class="cta__desc color-gray">DBA Consultant </br> Consultant for self, team & organization development using inbound, outbound and positive psychology approach.</p>
              <a href="{{ route('company.show', $company->slug) }}" class="btn btn__primary btn__link color-white">
                <span>Learn More</span>
                 <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
