 <section class="testimonials testimonials-layout1 {{ request()->is('/') ? 'extra-padding' : '' }}">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="heading">
                <h2 class="heading__title color-theme">What Our Clients Say!</h2>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="testimonials-wrapper">
                <div class="slider-nav">
                @foreach ($testimonials as $testi)
                  <div class="slick__nav-item">
                    <span class="testimonial__thumb">
                      <img src="{{ asset(Voyager::image($testi->image)) }}" alt="{{ $testi->name }}">
                    </span><!-- /.testimonial-thumb -->
                    <span class="testimonial__meta">
                      <span class="testimonial__meta-title">{{ $testi->name }}</span>
                      <span class="testimonial__meta-desc">{{ $testi->subtitle }}</span>
                    </span><!-- /.testimonial-meta -->
                  </div><!-- /.slcik-nav-item -->
                  @endforeach
                </div><!-- /.slider-nav -->
                <div class="slider-with-navs">
                  <!-- Testimonial #1 -->
                  @foreach ($testimonials as $testi)
                  <div class=" testimonial-item">
                    <div class="testimonial__content">
                      <div class="testimonial__desc">{!! $testi->body !!}</div>
                    </div><!-- /.testimonial-content -->
                  </div><!-- /. testimonial-item -->
                  @endforeach
                </div>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials 1 -->
