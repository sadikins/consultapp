@extends('layouts.app')

@section('content')

     @include('components.__page-title')

    <!-- ======================
      Text Content Section
    ========================= -->

    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                @include('service.aside')
            </div><!-- /.col-lg-4 -->



          <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="portfolio-grid-layout2">
              <div class="row">
                <!-- portfolio item #1 -->

            <div class="text__block mb-30">
              <h5 class="text__block-title">{{ $service->title }}</h5>
              <div class="text__block-desc">{!! $service->body !!}</div>

            </div><!-- /.text-block -->

            <div class="fancybox-layout1">
              <div class="row">
                @forelse ($service->fancyboxes as $fancybox)
                <!-- fancybox item #1 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="{{ $fancybox->icon }}"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">{{ $fancybox->title }}</h4>
                      <div class="fancybox__desc">{!! $fancybox->body !!}</div>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                 @empty

            @endforelse

              </div><!-- /.row -->
            </div><!-- /.fancybox-layout1  -->



            <div id="accordion" class="mb-60">
                @if (!$service->accordions->isEmpty())
                 <h5 class="fz-25 mt-20">{{ $service->accordion_title }}</h5>

                @else

                @endif
            @forelse ($service->accordions as $accordion)
              <div class="accordion-item {{ $loop->last  ? 'opened' : '' }}">
                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse{{ $accordion->id }}">
                  <a class="accordion__item-title" href="#">{{ $accordion->title }}</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse{{ $accordion->id }}" class="collapse {{ $loop->last  ? 'show' : '' }}" data-parent="#accordion">
                  <div class="accordion__item-body">
                    {!! $accordion->body  !!}
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            @empty

            @endforelse
            </div><!-- /.accordion -->



          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content Section -->

      @include('components.clients')


@endsection

