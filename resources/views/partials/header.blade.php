  <!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

    <div class="profile">
        <img src="{{ App\Helpers::about('avatar') }}" alt="{{ \App\Helpers::contacts('name') }}" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/">{{ \App\Helpers::contacts('name') }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{ \App\Helpers::contacts('facebook') }}"  target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{ \App\Helpers::contacts('instagram') }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{ \App\Helpers::contacts('linkedin') }}"  target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="{{ \App\Helpers::contacts('github') }}"    target="_blank" class="github"><i class="bx bxl-github"></i></a>
          <a href="{{ \App\Helpers::resume('cv') }}"    target="_blank" class="github"><i class='bx bxs-file-pdf'></i></i></a>
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