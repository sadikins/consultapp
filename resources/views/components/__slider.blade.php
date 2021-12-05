<section class="slider slider-layout1">
      <div class="slick-carousel carousel-arrows-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>

        @foreach ($sliders as $slider)
        <div class="slide-item align-v-h bg-overlay {{ ($slider->overlay == 'SEDANG') ? 'bg-overlay-2' : (($slider->overlay == 'GELAP') ? 'bg-overlay-3': '') }}">
          <div class="bg-img"><img src="{{ asset(Voyager::image($slider->image)) }}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <div class="slide__title">{!! $slider->title !!}</div>
                  <div class="slide__desc"> {!! $slider->body !!} </div>
                  @isset($slider->button_1)
                  <a href="#" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>{{ $slider->button_1 }}</span><i class="icon-arrow-right"></i>
                  </a>
                  @endisset
                  @isset($slider->button_2)
                  <a href="#" class="btn btn__white">{{ $slider->button_2 }}</a>
                  @endisset
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      @endforeach

      </div><!-- /.carousel -->
    </section>
