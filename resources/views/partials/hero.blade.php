
@foreach ($hero as $item)
@php
    // print_r( $item );
@endphp
    <!-- ======= Hero Section ======= -->
    <section id="hero" style="background: url({{ $item->image }}) top center;" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
        <h1>{{ $item->name }}</h1>
        <p>I'm <span class="typed" data-typed-items="{{ $item->profession }}"></span></p>
        </div>
    </section><!-- End Hero -->
@endforeach