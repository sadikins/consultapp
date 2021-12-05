    <header class="header {{ request()->segment(2) || request()->is('contact') ? 'header-light' : 'header-transparent'  }} header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('homepage') }}">

            <img src="{{ asset(Voyager::image(setting('site.logo_light'))) }}" width="160" class="logo-light" alt="logo">
            <img src="{{ asset(Voyager::image(setting('site.logo'))) }}" width="160" class="logo-dark" alt="logo">

          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
                {{ menu('main_menu', 'layouts.menu') }}
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="contact__number d-flex align-items-center">
            <i class="fa fa-whatsapp"></i>
            <a href="https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text={{ setting('site.send_whatsapp') }}" target="_blank">+{{ setting('site.whatsapp') }}</a>
          </div><!-- /.contact__numbr -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>
