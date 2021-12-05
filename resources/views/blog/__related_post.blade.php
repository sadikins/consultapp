@if ($prev)
<div class="blog__prev">

    <a href="{{ $prev->slug }}">
    <div class="blog__nav-img">
    <img src="{{ asset(Voyager::image($prev->image)) }}" alt="{{ $prev->title }}">
    </div>
    <div class="blog__nav-content">
    <span>Previous</span>
    <h6>{{ $prev->title }}</h6>
    </div>
</a>
</div><!-- /.blog-prev  -->
@endif

@if($next)
<div class="blog__next">
<a href="{{ $next->slug }}">
    <div class="blog__nav-content">
    <span>Next</span>
    <h6>{{ $next->title }}</h6>
    </div>
    <div class="blog__nav-img">
    <img src="{{ asset(Voyager::image($next->image)) }}" alt="{{ $next->title }}">
    </div>
</a>
</div><!-- /.blog-next  -->
@endif
