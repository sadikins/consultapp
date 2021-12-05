   <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search" action="{{ route('search.posts') }}">
                    <input type="text" name="query" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Recent News & Media</h5>
                <div class="widget__content">
                  <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                      @foreach ($latest_post as $latest_post)

                      <!-- post item -->
                      <div class="widget-post-item">
                          <div class="widget__post-img">
                              <a href="{{ route('blog.show', $latest_post->slug) }}"><img src="{{ asset(Voyager::image($latest_post->image)) }}" alt="{{ $latest_post->title }}"></a>
                            </div><!-- /.widget-post-img -->
                            <div class="widget__post-content">
                                <span class="widget__post-date">{{ $latest_post->tanggal }}</span>
                                <h6 class="widget__post-title"><a href="{{ route('blog.show', $latest_post->slug) }}">{{ $latest_post->title }}</a>
                                </h6>
                            </div><!-- /.widget-post-content -->
                        </div><!-- /.widget-post-item -->

                        @endforeach
                  </div><!-- /.carousel -->
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-tags">
                <h5 class="widget__title">Tags</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                     @foreach ($tags as $tag)
                    <li><a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a></li>
                    @endforeach
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-tags -->
