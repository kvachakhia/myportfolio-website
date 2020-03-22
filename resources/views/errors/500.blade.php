@extends('layouts.error')

@section('content')

<style>
    body {
        height: 100%;
    }

    html {
        height: 100%;
    }

    span {
        height: 100%;
        display: flex;
        width: 100%;
        background-position: center;
        background-size: cover;
    }

    .gohome {
        position: absolute;
        bottom: 50px;
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .gohome button {
        max-width: 200px;
        padding: 10px 50px;
        display: flex;
        align-items: center;
    }

</style>

<span style="background-image: url('portfolio/assets/img/404.jpg')"></span>

<div class="gohome">
    <a href="/"><button class="btn btn-primary"><i class='bx bx-home'></i>Home</button></a>
</div>
@endsection
 