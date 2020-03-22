<style>
          
  @media (min-width: 481px) and (max-width: 767px) {
      
    .d-flex{ display: block !important;}

    #footer {
      position: absolute;
      width: auto;
      padding-right: 20px 15px;
      width: 100%;
    }
    
  }


  @media (min-width: 320px) and (max-width: 480px) {
    .d-flex{ display: block !important;}
    
    #footer {
      position: absolute;
      width: auto;
      padding-right: 20px 15px;
      width: 100%;
    }
    
  }
   
  </style>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row" data-aos="fade-in">
        
        <div class="col-lg-12 col-12 d-flex align-items-stretch">
          <div class="info d-flex" >
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>{{ \App\Helpers::about('address') }}</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>{{ \App\Helpers::about('email') }}</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>{{ \App\Helpers::about('phone') }}</p>
            </div>

          </div>

        </div>

      

      </div>

    </div>
  </section><!-- End Contact Section -->