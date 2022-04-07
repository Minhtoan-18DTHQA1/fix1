@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Location Information
                    <small>{{$ttmonan->TieuDe}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                
                <form action="admin/ttmonan/sua/{{$ttmonan->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            @foreach($theloai as $tl)
                                <option 
                                @if($ttmonan->loaidiadiem->theloai->id == $tl->id)
                                {{"selected"}}
                                @endif
                                value="{{$tl->id}}">{{$tl->Ten}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Location Type</label>
                        <select class="form-control" name="LoaiDiaDiem" id="LoaiDiaDiem">
                            @foreach($loaidiadiem as $ldd)
                                <option 
                                @if($ttmonan->loaidiadiem->id == $ldd->id)
                                {{"selected"}}
                                @endif
                                value="{{$ldd->id}}">{{$ldd->Ten}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="TieuDe" value="{{$ttmonan->TieuDe}}" />
                    </div>

                    <div class="form-group">
                        <label>Summary</label>
                        <textarea name="TomTat" class="form-control" rows="4">
                            {{$ttmonan->TomTat}}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="NoiDung" id="demo" class="ckeditor" rows="5">
                            {{$ttmonan->NoiDung}}
                        </textarea>
                    </div>

                    <div  class="form-group">
                        <label>Image</label>
                        <p>
                            <img width="400px" src="public/upload/ttmonan/{{$ttmonan->Hinh}}">
                        </p>
                        <input type="file" name="Hinh" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Highlights</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" checked="" 
                            @if($ttmonan->NoiBat == 0)
                                {{"checked"}} 
                            @endif
                            type="radio">No
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1" 
                            checked="" 
                            @if($ttmonan->NoiBat == 1)
                                {{"checked"}} 
                            @endif
                            type="radio">Yes
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Fix</button>
                    <button type="reset" class="btn btn-default">New</button>
                <form>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Comment
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
             @endif
             
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>User</th>
                        <th>Content</th>
                        <th>Date submitted</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ttmonan->comment as $cm)
                        <tr class="odd gradeX" align="center">
                            <td>{{$cm->id}}</td>
                            <td>{{$cm->user->name}}</td>
                            <td>{{$cm->NoiDung}}</td>
                            <td>{{$cm->created_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->id}}/{{$ttmonan->id}}"> Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#TheLoai").change(function(){
                var idTheLoai = $(this).val();
                $.get("admin/ajax/loaidiadiem/"+idTheLoai,function(data){
                    $("#LoaiDiaDiem").html(data);
                });
            });
        });
    </script>
@endsection