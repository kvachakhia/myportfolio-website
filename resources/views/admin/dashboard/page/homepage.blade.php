{{-- @extends('layouts.admin')

@section('content')

<section>
    <!-- sidebar left start-->
    <div class="sidebar-left">
        <div class="sidebar-left-info">

            <div class="user-box">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('/assets/images/dima.jpg') }}" alt="" class="img-fluid rounded-circle"> 
                </div>
                <div class="text-center text-white mt-2">
                    <h6>Dima</h6>
                    <p class="text-muted m-0">Admin</p>
                </div>
            </div>   
                                
            <!--sidebar nav start-->
            <ul class="side-navigation">
                
                @include('admin.dashboard.menus')

            </ul><!--sidebar nav end-->
        </div>
    </div><!-- sidebar left end-->

    <!-- body content start-->
    <div class="body-content">
        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="ti ti-menu"></i></a>
            <!--toggle button end-->

            <!--mega menu start-->
            <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                <ul class="nav navbar-nav">                           
                    <!-- Classic dropdown -->
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class=""> English <i class="mdi mdi-chevron-down"></i> </a>
                        <ul role="menu" class="dropdown-menu language-switch">
                            <li>
                                <a tabindex="-1" href="javascript:;"> ქართული (soon) </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--mega menu end-->

            <div class="notification-wrap">
                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                      
                        <li>
                            <a href="javascript:;" data-toggle="dropdown">
                                <img src="{{ asset('/assets/images/dima.jpg') }}" alt="dima">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-menu">
                                <a class="dropdown-item" href="/" target="_blank"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Visit to site</a>
                                <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>

                        </li>
                      
                    </ul>
                </div><!--right notification end-->
            </div>
        </div>
        <!-- header section end-->

        <div class="container-fluid">
            <div class="page-head">
                <h4 class="mt-2 mb-2">Homepage</h4>
            </div>


            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">
    
                <button type="button" class="close" data-dismiss="alert">×</button>
    
                    <strong>{{ $message }}</strong>
    
            </div>
    
            <img src="/images/{{ Session::get('image') }}">
    
            @endif
    
      
    
            @if (count($errors) > 0)
    
                <div class="alert alert-danger">
    
                    <strong>Whoops!</strong> There were some problems with your input.
    
                    <ul>
    
                        @foreach ($errors->all() as $error)
    
                            <li>{{ $error }}</li>
    
                        @endforeach
    
                    </ul>
    
                </div>
    
            @endif


            


            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <input type="text" name="name" class="form-control">
                            <input type="text" name="profession" class="form-control">
                            
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </form>                                                 
                    </div>
                </div>
            </div>

            
        </div><!--end container-->

        
        
    </div>
    <!--end body content-->
</section>

@endsection --}}


@extends('layouts.admin')

@section('content')

<section>
    <!-- sidebar left start-->
    <div class="sidebar-left">
        <div class="sidebar-left-info">

            <div class="user-box">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('/assets/images/dima.jpg') }}" alt="" class="img-fluid rounded-circle"> 
                </div>
                <div class="text-center text-white mt-2">
                    <h6>Dima</h6>
                    <p class="text-muted m-0">Admin</p>
                </div>
            </div>   
                                
            <!--sidebar nav start-->
            <ul class="side-navigation">
                
                @include('admin.dashboard.menus')

            </ul><!--sidebar nav end-->
        </div>
    </div><!-- sidebar left end-->

    <!-- body content start-->
    <div class="body-content">
        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="ti ti-menu"></i></a>
            <!--toggle button end-->

            <!--mega menu start-->
            <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                <ul class="nav navbar-nav">                           
                    <!-- Classic dropdown -->
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class=""> English <i class="mdi mdi-chevron-down"></i> </a>
                        <ul role="menu" class="dropdown-menu language-switch">
                            <li>
                                <a tabindex="-1" href="javascript:;"> ქართული (soon) </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--mega menu end-->

            <div class="notification-wrap">
                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                      
                        <li>
                            <a href="javascript:;" data-toggle="dropdown">
                                <img src="{{ asset('/assets/images/dima.jpg') }}" alt="dima">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-menu">
                                <a class="dropdown-item" href="/" target="_blank"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Visit to site</a>
                                <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>

                        </li>
                      
                    </ul>
                </div><!--right notification end-->
            </div>
        </div>
        <!-- header section end-->

        <div class="container-fluid">
            <div class="page-head">
               
            </div>


            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
    
            @if (count($errors) > 0)
    
                <div class="alert alert-danger">
    
                    <strong>Whoops!</strong> There were some problems with your input.
    
                    <ul>
    
                        @foreach ($errors->all() as $error)
    
                            <li>{{ $error }}</li>
    
                        @endforeach
    
                    </ul>
    
                </div>
    
            @endif

            @if( !isset( $hero[0] ) )
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body form-horizontal" >
                             <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <h5 class="header-title pb-5">Hero Section</h5>       

                                <div class="general-label">

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="name">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="profession">Profession</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="profession" class="form-control" placeholder="Profession">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="image">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                    
                                </div>  

                            </form>                                              
                        </div>
                    </div>
                </div>
            @else
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body form-horizontal" >
                         <form action="{{ route('image.upload',$hero[0]->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="text" name="id" hidden value="{{ $hero[0]->id }}" class="form-control">

                            <h5 class="header-title pb-5">Update Hero Section</h5>       

                            <div class="general-label">

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="name">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $hero[0]->name }}" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="profession">Profession</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="profession" value="{{ $hero[0]->profession }}" class="form-control" placeholder="Profession">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="image">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    @if( $hero[0] )
                                        <img src="{{ $hero[0]->image }}" style="max-width: 200px;width: 100%;border-radius: 2%;border: 2px solid #040b14;margin: 12px 10px;">
                                    @endif

                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                                
                            </div>  

                        </form>                                              
                    </div>
                </div>
            </div>
            @endif

          
            
        </div><!--end container-->
        
    </div>
    <!--end body content-->
</section>

@endsection
