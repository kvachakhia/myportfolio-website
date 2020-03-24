<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Blogs</h2>
    </div>

    <div class="row portfolio-container">

      @foreach ($blogs as $blog)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{ $blog->image }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="/blog/{{ $blog->slug }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
            <h3 class="blog-title">{{ $blog->title }}</h3>
        </div>
      @endforeach

    </div>
  </div>
</section><!-- End Portfolio Section -->