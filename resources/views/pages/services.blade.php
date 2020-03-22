@extends('layouts.app')

@section('title','Services -')
@section('description', \App\Helpers::contacts('description'))
@section('imgae','https://dima.ge/images/1584876659.jpg')

@section('content')

<p><span class="typed" data-typed-items=" "></span></p>

@include('partials.services')

@endsection
