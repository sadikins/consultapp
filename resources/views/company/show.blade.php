@extends('layouts.app')

@section('content')

 <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{ asset(Voyager::image($company->image)) }}" alt="{{ $company->title }}" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading mb-0">
                <h1 class="pagetitle__heading mb-0">{{ $company->title }}</h1>
            </h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

     <!-- ======================
      Text Content Section
    ========================= -->
    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">

           <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Company</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                      @foreach ($menu as $menu)
                        <li>
                            <a href="{{ route('company.show',$menu->slug) }}" class="active"><span>{{ $menu->title }}</span><i
                                class="icon-arrow-right"></i></a>
                        </li>
                      @endforeach

                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->

              @if ($company->title == 'About' || $company->title == 'Organization Structure' )

              <div class="widget widget-help bg-theme">
                <div class="widget__content">
                  <h5>Dedicated Customer Teams & Agile Services</h5>
                  <p>Today Promin has over 4,000 professionals on its payroll All Over The World.</p>
                  <a href="request-quote.html" class="btn btn__white btn__link">
                    <span class="color-white">Get A Quote</span> <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.widget-download -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download">
                <h5 class="widget__title">Download</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__primary btn__block mb-20">
                    <span>Company Profile</span>
                    <img src="{{ asset('assets/images/icons/pdf.png') }}" alt="pdf">
                  </a>
                  <a href="#" class="btn btn__secondary btn__block btn__hover3">
                    <span>Training Brochure</span>
                    <img src="{{ asset('assets/images/icons/pdf.png') }}" alt="pdf">
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->
                @endif
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->


          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text__block mb-30">
              <h5 class="text__block-title">{{ $company->title }}</h5>
              @if (request()->is('company/clients'))
               @foreach ($logos as $client)
               <div class="col-sm-3 col-md-3 col-lg-3" style="float:left; height:100px; padding:10px;">
                   <img src="{{ asset(Voyager::image($client->image)) }}" alt="{{ $client->title }}">
                </div>
                @endforeach
              @else
              <div class="text__block-desc">{!! $company->body !!}</div>

              @endif
            </div><!-- /.text-block -->

          </div><!-- /.col-lg-8 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content Section -->

    @if (!request()->is('company/clients'))
        @include('components.clients')

    @else


     @endif

@endsection
