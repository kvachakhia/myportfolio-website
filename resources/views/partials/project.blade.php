<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
      </div>

     

      <div class="row portfolio-container">

        @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $portfolio->image }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="/portfolio/{{ $portfolio->slug }}" title="More Details"><i class="bx bx-plus"></i></a>
                        <a href="{{ $portfolio->project_url }}" target="_blank" title="{{ $portfolio->title }}"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
        @endforeach


      

      </div>

    </div>
</section><!-- End Portfolio Section -->