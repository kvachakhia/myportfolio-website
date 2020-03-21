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
                    
                    <div class="card-body form-horizontal" >

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
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
                            <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                             
                            <h5 class="header-title pb-5">Resume</h5>       

                            <div class="general-label">

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="key_name">Key</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="key_name" class="form-control" placeholder="Key">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label" for="selectfieldtype">Field Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="selectfieldtype">
                                            <option value="imageupload">File</option>
                                        </select>
                                    </div>
                                </div>
                                    
                                

                                <div class="clas"></div>
                                <div class="imageupload"></div>

                                <div class="">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                
                            </div>  

                        </form>                                              
                    </div>
                </div>
            </div>


            <script>

                $("#selectfieldtype").change(function() {
                    if ($(this).val() == "texarea") {
                        $('#text').remove();
                        $('#imageupload').remove();
                        $('#texarea').show();
                        $('#texareafield').attr('required', '');
                        $('#texareafield').attr('data-error', 'This field is required.');
                    }else if( $(this).val() == "text" ) {
                        $(".clas").append("<div class='form-group row' id='text'><label class='col-sm-2 control-label' for='textfield'>Text Value</label><div class='col-sm-10'><input type='text' name='value' class='form-control' placeholder='value'></div></div>");
                        $('#texarea').hide();
                        $('#imageupload').remove();
                        $('#text').show();
                        $('#textfield').attr('required', '');
                        $('#textfield').attr('data-error', 'This field is required.');
                    }else if( $(this).val() == "imageupload" ) {
                        $(".imageupload").append("<div class='form-group row' id='imageupload'><label class='col-sm-2 control-label' for='imagefield'>File Value</label><div class='col-sm-10'><input type='file' name='value' class='form-control'></div></div>");
                        $('#texarea').hide();
                        $('#text').hide();
                        $('#textfield').attr('required', '');
                        $('#textfield').attr('data-error', 'This field is required.');
                    }
                    else {
                        $('#text').hide();
                        $('#texarea').hide();
                        $('#texareafield').removeAttr('required');
                        $('#texareafield').removeAttr('data-error');
                    }
                    });
                    $("#selectfieldtype").trigger("change");


            </script>

            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body ">
                        <div class="col-lg-12 col-sm-12">
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Key</th>
                                                <th scope="col">Value</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resumes as $resume)
                                            <tr>
                                                <form action="{{ route('resumeKeyDelete',$resume->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <td>{{ $resume->key_name }}</td>
                                                    <td>{{ substr( $resume->value,0,50) }}</td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updatekey{{$resume->id}}">Update</button>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </td>
                                                </form>
                                            </tr>


                                            <div class="modal fade" id="updatekey{{$resume->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('resumeKeyUpdate',$resume->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 control-label" for="key_name">Key</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="key_name" value="{{ $resume->key_name }}" class="form-control" placeholder="Key">
                                                                </div>
                                                            </div>
                        
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 control-label" for="value">Value</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="value" value="{{ $resume->value }}" class="form-control" placeholder="value">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="id" value="{{ $resume->id }}" hidden class="form-control" placeholder="value">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>


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
