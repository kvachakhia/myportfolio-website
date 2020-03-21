<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
      </div>

      <div class="row">

        @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><span class="service-icon" style="background-image: url({{ $service->icon }});"></span></div>
                <h4 class="title"><a href="javascript:void();">{{ $service->title }}</a></h4>
                <p class="description">{{ $service->description }}</p>
            </div>
        @endforeach
        
        
      </div>

    </div>
</section><!-- End Services Section -->