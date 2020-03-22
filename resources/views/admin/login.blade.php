@extends('layouts.admin')

@section('content')

<section class="bg-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="wrapper-page">
                    <div class="account-pages">
                        <div class="account-box">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h5 class="mt-3"><b>Welcome DiMa</b></h5>
                                    </div>  
                                    <form action="{{url('post-login')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input class="form-control form-control-line" type="email" name="email" id="inputEmail" placeholder="Email address" required="required">
                                            </div>
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif 
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input class="form-control form-control-line"  type="password" name="password" id="inputPassword" placeholder="Password" required="required">
                                            </div>
                                            @if ($errors->has('password'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12 mt-4">
                                                <button class="btn btn-dark btn-block" type="submit">Log In</button>
                                            </div>
                                        </div>

                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
 

