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

            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="addnewheader">
                            <a href="{{ url('/dashboard/page/services') }}" style="margin: 5px;">
                                <button type="button" class="btn btn-dark"><i class="mdi mdi-arrow-left-bold"></i> Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        
                        <form action="{{ route('serviceAdd') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             
                            <div class="general-label">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="title">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row" id="texarea">
                                    <label class="col-sm-2 control-label" for="description">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" id="" cols="10" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="icon">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="icon" class="form-control">
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


          
            
        </div><!--end container-->
        
    </div>
    <!--end body content-->
</section>

@endsection
