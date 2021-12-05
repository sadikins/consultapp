            <aside class="sidebar mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                      @foreach ($menu as $menu)
                        <li>
                            <a href="{{ route('service.show',$menu->slug) }}" class="active"><span>{{ $menu->title }}</span><i
                                class="icon-arrow-right"></i></a>
                        </li>
                      @endforeach

                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
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
            </aside><!-- /.sidebar -->

