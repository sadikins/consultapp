<section class="{{ request()->is('/') ? 'contact-layout1 p-0' : 'contact-layout2 pt-0 pb-70' }} ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel mt--140">
                <div class="contact__panel-info">
                  <div class="contact__panel-info-top">
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Our Location</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>{{ setting('site.address') }}</li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Quick Contact</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>Email: <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                        <li>Support: <a href="mailto:{{ setting('site.email_2') }}">{{ setting('site.email_2') }}</a></li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                  </div><!-- /.contact__panel-info-top -->
                  <div class="contact__panel-info-bottom bg-theme2">
                    <strong class="contact__panel-info-title">We will get back to you within 24 hours, or call us</strong>
                    <div class="contact__number d-flex align-items-center">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
                    </div>
                  </div><!-- /.contact__panel-info-bottom -->
                </div><!-- /.contact__panel-info -->
                <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact__panel-title">Request A Quote</h4>
                      <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                        customers receive the best quality prices and service. We take great pride in everything that we
                        do in our company.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select class="form-control" style="display: none;">
                          <option>select your service category</option>
                          <option>Assessment</option>
                          <option>Training</option>
                          <option>Coaching</option>
                          <option>Consulting</option>
                          <option>Other Services</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                          name="contact-messgae" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                      <button type="submit" class="btn btn__secondary mr-40">
                        <span class="mx-2">Submit Request</span><i class="icon-arrow-right mx-2"></i>
                      </button>
                      <div class="form-group input-radio my-3">
                        <label class="label-radio">I accept the privacy and terms.
                          <input type="checkbox" checked="">
                          <span class="radio-indicator"></span>
                        </label>
                      </div>
                    </div><!-- /.col-lg-12 -->
                  </div>
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section>
