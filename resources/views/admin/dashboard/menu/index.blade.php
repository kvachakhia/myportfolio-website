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
    @include('admin.dashboard.header')
    <!-- header section end-->

    <div class="container-fluid">
        <div class="page-head">
            <h4 class="mt-2 mb-2">Menus</h4>
        </div>


        <div class="edit-table">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <table class="table" id="add-table">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table_data">
                                    <tr>
                                        <form id="add_details"  method="POST">
                                            @csrf
                                            <td>
                                                <input type="text" name="name" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="slug" class="form-control">
                                            </td>
                                                <input type="hidden" name="id" class="form-control">
                                            <td>
                                                <input type="text" name="icon" class="form-control">
                                            </td>
                                            <td>
                                                <button class="btn btn-success" name="add" onClick="Refresh()" id="addmenu" >Save</button>
                                            </td>
                                        </form>
                                    </tr>
                                    <script>
                                        //addMenu
                                        function Refresh() {
                                            window.location = window.location;
                                        }
                                        $(document).ready(function(){
                                            $('#add_details').on('submit', function(event){
                                            event.preventDefault();
                                            $.ajax({
                                            url:"/dashboard/menus/addmenu",
                                            method:"GET",
                                            data:$(this).serialize(),
                                            dataType:"json",
                                            beforeSend:function(){
                                                $('#addmenu').attr('disabled', 'disabled');
                                            },
                                            success:function(data){
                                                $('#addmenu').attr('disabled', false);

                                            }
                                            })
                                            });
                                            
                                            });
                                    </script>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-body">
                        <table class="table" id="my-table">
                            <thead>
                                <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div id="success" class="alert alert-success" role="alert"></div>
                                <div id="delete" class="alert alert-danger" role="alert"></div>

                                @foreach ($menus  as $menu)
                                    <tr>
                                        <form id="myItemInfo" action="javascript:void(0)" method="POST">
                                            @csrf
                                                <td>
                                                    <input type="text" name="name" class="form-control" id="editname{{$menu->id}}" value="{{$menu->name}}" >
                                                </td>
                                                <td>
                                                    <input type="text" name="slug" class="form-control" id="editslug{{$menu->id}}" value="{{$menu->slug}}">
                                                </td>
                                                <td>
                                                    <input type="text" name="icon" class="form-control" id="editicon{{$menu->id}}" value="{{$menu->icon}}">
                                                </td>
                                                    <input type="hidden" name="id" class="form-control" id="editid{{$menu->id}}" value="{{$menu->id}}">
                                                <td>
                                                    <button class="btn btn-success" id="buttonId{{ $menu->id }}">Save</button>
                                                    <button class="btn btn-danger" onclick="deleteMenu({{ $menu->id }})">Delete</button>
                                                </td>
                                        </form>
                                    </tr>
                                    
                                    <script>
                                        //update
                                        $('#success').ready(function(){
                                            $('#success').css("display", "none");
                                        });

                                        $('#buttonId{{ $menu->id }}').click(function(){
                                            var editname = $('#editname{{ $menu->id }}').val();
                                            var editslug = $('#editslug{{ $menu->id }}').val();
                                            var editicon = $('#editicon{{ $menu->id }}').val();
                                            var editid = $('#editid{{ $menu->id }}').val();

                                        $.ajax({
                                            type:'POST',
                                            url:'{{ route('menuUpdate') }}',
                                            data:{
                                            _token:"{{csrf_token()}}",
                                            'name':editname,
                                            'slug':editslug,
                                            'icon':editicon,
                                            'id':editid,
                                            },
                                            success:function(data){
                                                $('#success').show();
                                                $('#success').text(data);
                                                setInterval(function(){
                                                    $('#success').hide();
                                                },5000);
                                            }
                                        }).fail(function(data){
                                            alert(data);
                                        });
                                        });

                                        $('#delete').ready(function(){
                                                $('#delete').css("display", "none");
                                        });
                                        //delete
                                        function deleteMenu(id) {

                                            $.ajax({
                                            type:'GET',
                                            url:'/dashboard/menus/delete/'+id,
                                            data:{
                                            _token:"{{csrf_token()}}",
                                            
                                            },
                                            
                                            success:function(data){
                                                $('#delete').show();
                                                $('#delete').text(data);
                                                setInterval(function(){
                                                    $('#delete').hide();
                                                    window.parent.location = window.parent.location.href;

                                                },1000);
                                            }
                                            }).fail(function(data){
                                                alert(data);
                                            });
                                        }

                                        
                                    </script>
                                @endforeach
                            </tbody>
                        </table> 
                    </div>
                    </div>
                </div>
            </div><!--end row-->
                                    
        
    </div><!--end container-->


    

    
</div>
<!--end body content-->
</section>
@endsection
