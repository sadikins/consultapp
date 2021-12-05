<!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{ asset(Voyager::image($page->image)) }}" alt="{{ $page->title }}" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading mb-0">
                  @if(isset($quer))
                  <h1 class="pagetitle__heading mb-0">Search : {{ $quer }}</h1>
                  @elseif(isset($category))
                  <h1 class="pagetitle__heading mb-0">Category : {{ $category->name }}</h1>
                   @elseif(isset($tag))
                  <h1 class="pagetitle__heading mb-0">Tag : {{ $tag->name }}</h1>

                  @else

                  <h1 class="pagetitle__heading mb-0">{{ $title }}</h1>
              @endif
            </h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
