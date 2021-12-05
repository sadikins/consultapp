 <div class="blog__author-avatar">
                  <img src="{{ asset(Voyager::image($post->authorId->avatar)) }}" alt="avatar">
                </div><!-- /.author-avatar  -->
                <div class="blog__author-content">
                  <h6 class="blog__author-name">{{ $post->authorId->name }}</h6>
                  <div class="blog__author-bio">
                      {!! $post->authorId->bio !!}
                  </div>
                  <ul class="social__icons list-unstyled">
                    <li><a href="{{ $post->authorId->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $post->authorId->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ $post->authorId->youtube }}" target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                    <li><a href="{{ $post->authorId->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                  </ul>
                </div><!-- /.author-content  -->
