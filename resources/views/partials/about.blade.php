<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ App\Helpers::about('avatar') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{ App\Helpers::about('position') }}</h3>
        
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ App\Helpers::about('birthday') }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <a href="{{ App\Helpers::about('website') }}">www.dima.ge</a></li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ App\Helpers::about('phone') }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ App\Helpers::about('city') }}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ App\Helpers::about('age') }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Country:</strong> {{ App\Helpers::about('country') }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>E-Mail:</strong> {{ App\Helpers::about('email') }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{ App\Helpers::about('freelance') }}</li>
              </ul>
            </div>
          </div>
          <p>
            {{ App\Helpers::about('aboutme') }}
          </p>
        </div>
      </div>

    </div>
</section><!-- End About Section -->

 <!-- ======= Skills Section ======= -->
 <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">HTML <i class="val">{{ App\Helpers::about('html') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('html') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">{{ App\Helpers::about('css') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('css') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">{{ App\Helpers::about('javascript') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('javascript') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Git <i class="val">{{ App\Helpers::about('git') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('git') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
            <span class="skill">PHP <i class="val">{{ App\Helpers::about('php') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('php') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Laravel <i class="val">{{ App\Helpers::about('laravel') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('laravel') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">{{ App\Helpers::about('wordpresscms') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('wordpresscms') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val">{{ App\Helpers::about('python') }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ App\Helpers::about('python') }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->