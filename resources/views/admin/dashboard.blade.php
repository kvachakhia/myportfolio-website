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
            @php
                $portfolios = DB::table('portfolios')->orderByDesc('created_at','desc')->get();
                $services = DB::table('services')->orderByDesc('created_at','desc')->get();
            @endphp
            <div class="row d-flex" style="justify-content: center;">
                <div class="col-lg-4 col-sm-3 progress-icon m-b-30">
                    <div class="widget-box bg-dark">
                        <div class="row d-flex align-items-center ml-1">
                            <div class="col-6 text-white">
                                <h2 class="m-0 counter">{{ count( $portfolios ) }}</h2>
                                <p>Total Projects</p> 
                            </div>
                            <div class="col-6">
                                <div class="text-right"><i class="ti ti-server"></i></div>
                            </div>
                        </div>
                        <div class="progress mx-auto mt-2" style="width: 90%; height: 8px">
                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ count( $portfolios ) }}%" aria-valuenow="{{ count( $portfolios ) }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                   </div> 
                </div>
            
                <div class="col-lg-4 col-sm-3 progress-icon m-b-30">
                    <div class="widget-box bg-danger">
                        <div class="row d-flex align-items-center ml-1">
                            <div class="col-6 text-white">
                                <h2 class="m-0 counter">{{ count( $services ) }}</h2>
                                <p>Total Services</p> 
                            </div>
                            <div class="col-6">
                                <div class="text-right"><i class="ti ti-server"></i></div>
                            </div>
                        </div>
                        <div class="progress mx-auto mt-2" style="width: 90%; height: 8px">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                   </div> 
                </div>
            
                
            </div>


            
        </div><!--end container-->

        
        
    </div>
    <!--end body content-->
</section>
@endsection
 