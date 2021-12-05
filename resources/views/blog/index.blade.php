@extends('layouts.app')


@section('content')

    @include('components.__page-title')

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">

        @forelse ($posts as $post)
          <!-- Blog Item # -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="{{ route('blog.show', $post->slug) }}">
                  <img src="{{ asset(Voyager::image($post->image)) }}" alt="{{ $post->title }}">
                </a>
              </div><!-- /.blog-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                <span class="blog__meta-date">{{ $post->tanggal }}</span>
                <div class="blog__desc">{!! $post->excerpt !!}
                </div>
                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->

          @empty
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
                <h4 style="color: rgb(90, 90, 90); font-weight:bold;">No Article Found...</h4>
            </div>
          </div>

        @endforelse
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                {{ $posts->links() }}
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->


@endsection
