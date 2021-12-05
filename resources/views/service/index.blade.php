@extends('layouts.app')

@section('content')


    @include('components.__page-title')

       <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 pt-120 pb-90 bg-gray">
        <div class="services-bg bg-img" style="background-size: cover; background-position: center center;">
            <img src="{{ asset('assets/images/backgrounds/map.png') }}" alt="">
        </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 ">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">The Best A Grade Commercial & Residential Services</span>
              <h2 class="heading__title">High Quality Solutions
                For Residentials & Industries!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
            @foreach ($services as $item)
          <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
            <div class="service-item h-100">
              <div class="service__content">
                <div class="service__icon">
                  <i class="{{ $item->icon }}"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">{{ $item->title }}</h4>
                <div class="service__desc">{{   Str::limit($item->excerpt, 130)   }}</div>
                <a href="{{ route('service.show', $item->slug) }}" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="{{ asset(Voyager::image($item->image)) }}" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        @endforeach
        </div><!-- /.row -->

      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    {{-- @include('components.__banner')
    @include('components.contact')
    @include('components.testimonials') --}}
    @include('components.clients')

<div></div>



@endsection
