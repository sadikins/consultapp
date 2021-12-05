@extends('layouts.app')

@section('content')


    @include('components.__page-title')


    <!-- ===========================
      portfolio standard
    ============================= -->
    <section class="portfolio-carousel">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">

                <li><a class="filter active" href="#" data-filter="all">ALL Work</a></li>

              @foreach ($filter as $item)
                  <li><a class="filter" href="#" data-filter=".filter-{{ $item->category->slug }}">{{ $item->category->name }}</a></li>
              @endforeach



            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">



          <!-- portfolio item #1 -->
            @forelse ($portfolios as $key=> $portfolio)

             <div class="col-sm-6 col-md-6 col-lg-4 mix filter-{{ $portfolio->category->slug }} {{ $key > 11 ? 'portfolio-hidden' : ''  }}">
            <div class="portfolio-item  bg-overlay-3">
              <div class="portfolio__img">
                <img src="{{ asset(Voyager::image($portfolio->image)) }}" alt="{{ $portfolio->title }}">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__hover">
              <div class="portfolio__content">
                  <div class="portfolio__cat">

                    <a href="#">{{ $portfolio->category->name }}</a>
                  </div><!-- /.portfolio-cat -->
                <h6 class="portfolio__title"><a href="#">{{ $portfolio->title }}</a></h6>
                <div class="portfolio__desc">{!! $portfolio->excerpt !!}</div>
              </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio__hover -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
            @empty

             <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
                <h4 style="color: rgb(90, 90, 90); font-weight:bold;">No Portfolio Found...</h4>
            </div>
          </div>

            @endforelse




        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center mt-3">
            <button type="button" class="btn btn__loadMore loadMoreportfolio">
              <span>More Projects</span><i>+</i>
            </button>
            {{-- {{ $portfolios->links() }} --}}
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio standard -->


    @include('components.clients')

@endsection
