@extends('layouts.app')


@section('content')

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout8">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav>
              <ol class="breadcrumb justify-content-left mb-20">
                <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">News & Media</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-40">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="blog-item mb-0">
              <div class="blog__img">
                <a href="#">
                  <img src="{{ asset(Voyager::image($post->image)) }}" alt="{{ $post->title }}">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta d-flex align-items-center">
                  <div class="blog__meta-cat">
                    {{ $post->category->name }}
                  </div><!-- /.blog-meta-cat -->
                  <span class="blog__meta-author">By: <a href="#">{{ $post->authorId->name }}</a></span>
                  <span class="blog__meta-date">{{ $post->tanggal }}</span>
                </div><!-- /.blog-meta -->
                <h1 class="blog__title">{{ $post->title }}</h1>
                <div class="blog__desc">
                  {!! $post->body !!}
                </div><!-- /.blog-desc -->
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
             <div class="bordered-box mb-40">
              <div class="row row-no-gutter">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                  <div class="blog-tags d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Tags</strong>
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                      @foreach ($post->tags as $tag)
                        <li><a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a></li>
                      @endforeach
                    </ul>
                  </div><!-- /.blog-tags -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="blog-share d-flex flex-wrap justify-content-end">
                    <strong class="mr-20 color-heading">Share</strong>
                    <ul class="list-unstyled social__icons social__icons__primary d-flex mb-0">
                      <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                  </div><!-- /.blog-share -->
                </div>
              </div>
            </div>
            <div class="blog-widget blog-nav mb-0">
              @include('blog.__related_post')
            </div><!-- /.blog-nav  -->
            <div class="blog-widget">
              <div class="blog-author">
                @include('blog.__author')
              </div><!-- /.blog-widget  -->
            </div><!-- /.blog-author  -->
            <div class="blog-comments">
                <h5 class="blog__widget-title">Leave A Reply</h5>
                 @include('blog.__comments')
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->

           <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar mb-30">

                    @include('blog.__aside')

                </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

@endsection
