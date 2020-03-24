@extends('layouts.app')

@section('title',$blog->title.' -')
@section('description', $blog->seo_description)
@section('imgae', URL::to('/'). $blog->image )

@section('content')
<p><span class="typed" data-typed-items=" "></span></p>

<div id="portfolio" class="portfolio section-bg">
    <div class="container">
        
      <div class="section-title">
        <h2>{{ $blog->title }}</h2>
      </div>
     
        <div class="row ">
            <div class="col-12">
                <img src="{{ $blog->image }}" class="finished-project-image" alt="{{ $blog->title }}">
                <p>{!! $blog->description !!}</p>
            
                <div class="fb-comments" data-href="https://dima.ge/{{ $blog->slug }}" data-width="100%" data-numposts="5"></div>
            </div>

        </div>

    </div>
</div>

@endsection
