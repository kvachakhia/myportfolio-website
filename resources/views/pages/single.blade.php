@extends('layouts.app')

@section('content')
<p><span class="typed" data-typed-items=" "></span></p>

<div id="portfolio" class="portfolio section-bg">
    <div class="container">
        
      <div class="section-title">
        <h2>{{ $portfolio->title }}</h2>
      </div>
     

      <div class="row ">
        <div class="col-12">
            <img src="{{ $portfolio->image }}" class="finished-project-image" alt="{{ $portfolio->title }}">
            <p>{!! $portfolio->description !!}</p>
            <div class="text-center"><a href="{{ $portfolio->project_url }}" target="_blank"><button  class="btn btn-visit" type="submit">Visit Website</button></a></div>
        </div>
      

      </div>

    </div>
</div>

@endsection
