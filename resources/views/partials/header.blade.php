  <!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

    <div class="profile">
        <img src="{{ App\Helpers::about('avatar') }}" alt="{{ App\Helpers::about('name') }}" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/">{{ App\Helpers::about('name') }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{ App\Helpers::contacts('facebook') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>

    <nav class="nav-menu">
        <ul>
          @foreach ($menus as $menu)
            <li class=""><a href="/{{ $menu->slug }}"><i class="{{ $menu->icon }}"></i> <span>{{ $menu->name }}</span></a></li>
          @endforeach

        </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->