@extends('layouts.app')

@section('content')
    <!-- ============================
        Slider
    ============================== -->
    @include('components.__slider')
    <!-- /.slider -->

    <!-- ==========================
       Contact Info
    ============================ -->
    @include('components.__contact_info')
    <!-- /.Contact Info -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    @include('components.services')
    <!-- /.Services Layout 2 -->

    <!-- =========================
       Banner layout 4
      =========================== -->
      @include('components.__banner2')
    <!-- /.Banner layout 4 -->

    <!-- ===========================
      portfolio standard carousel
    ============================= -->
    @include('components.portfolio')
    <!-- /.portfolio standard carousel -->

    <!-- =====================
         Clients
      ======================== -->
      @include('components.clients')
    <!-- /.clients -->

    <!-- =========================
       Banner layout 2
      =========================== -->
     @include('components.__banner')
    <!-- /.Banner layout 2 -->

    <div>
      <div class="bg-img background-size-auto"><img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background"></div>

      <!-- ==========================
        contact layout 1
      =========================== -->
      @include('components.contact')
      <!-- /.contact layout 2 -->

      <!-- =========================
      Testimonials layout 1
      =========================  -->
      {{-- @include('components.testimonials') --}}
      <!-- /.testimonials 1 -->
    </div>

    <div class="extra-padding"></div>
    <!-- ======================
      Blog carousel
    ========================= -->
    @include('components.blog')
    <!-- /.blog carousel -->

    <!-- =========================
            Google Map
    =========================  -->
    @include('components.__map')
    <!-- /.GoogleMap -->


@endsection
