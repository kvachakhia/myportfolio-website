@extends('layouts.app')

@section('title','About -')
@section('description', \App\Helpers::contacts('description'))
@section('imgae','https://dima.ge/images/1584876659.jpg')

@section('content')
 
<p><span class="typed" data-typed-items=" "></span></p>

@include('partials.about')
@endsection
