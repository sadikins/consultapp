<section class="blog-carousel pt-0 pb-50 mt--200 z-index-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading heading-layout3 mb-40">
              <h2 class="heading__title">News & Media</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              @foreach ($latest_post as $latest_post)
              <div class="blog-item">
                <div class="blog__img">
                  <a href="{{ route('blog.show',$latest_post->slug) }}">
                    <img src="{{ asset(Voyager::image($latest_post->image)) }}" alt="blog image">
                  </a>
                </div><!-- /.blog-img -->
                <div class="blog__content">
                  <div class="blog__meta">
                    <div class="blog__meta-cat">
                      <a href="">{{ $latest_post->category->name }}</a>
                    </div><!-- /.blog-meta-cat -->
                  </div><!-- /.blog-meta -->
                  <h4 class="blog__title"><a href="{{ route('blog.show',$latest_post->slug) }}">{{ $latest_post->title }}</a>
                  </h4>
                  <span class="blog__meta-date">{{ $latest_post->tanggal }}</span>
                  <div class="blog__desc">
                      {!! $latest_post->excerpt  !!}
                  </div>
                  <a href="{{ route('blog.show', $latest_post->slug) }}" class="btn btn__secondary btn__link">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.blog-content -->
              </div><!-- /.blog-item -->
           @endforeach


            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
