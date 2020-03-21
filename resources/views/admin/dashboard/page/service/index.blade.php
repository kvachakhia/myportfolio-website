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
                            <a href="{{ route('addnewservice') }}" style="margin: 5px;">
                                <button type="button" class="btn btn-dark">Add Service</button>
                            </a>

                            <button type="button" class="btn btn-success m-1">
                                Services <span class="badge bg-dark">{{ count( $services ) }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body ">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="col-lg-12 col-sm-12">
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                                <form action="{{ route('serviceDelete',$service->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" name="id" value="{{ $service->id }}" hidden>

                                                    <td><img src="{{ $service->icon }}" width="25px"></td>
                                                    <td>{{ $service->title }}</td>
                                                    <td>{{ substr( $service->description,0,50) }}</td>
                                                    <td>
                                                        <a href="{{ route('editService',$service->id) }}"><button type="button" class="btn btn-warning">Update</button></a>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
           

          
            
        </div><!--end container-->
        
    </div>
    <!--end body content-->
</section>

@endsection
