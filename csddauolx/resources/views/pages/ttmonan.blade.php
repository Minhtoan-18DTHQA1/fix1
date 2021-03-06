@extends('layout.index')

@section('content')

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>{{$ttmonan->TieuDe}}</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">admin</a>
            </p>

            <!-- Preview Image -->
            <img class="img-responsive" src="public/upload/ttmonan/{{$ttmonan->Hinh}}" alt="">

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on : {{$ttmonan->created_at}}</p>
            <hr>

            <!-- Post Content -->
            <p class="lead">
            	{!! $ttmonan->NoiDung !!}
            </p>

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            @if(isset($nguoidung))
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form action="comment/{{$ttmonan->id}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <textarea class="form-control" name="NoiDung" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
            @endif 
            <hr>
          
            <!-- Posted Comments -->

            <!-- Comment -->
            @foreach($ttmonan->comment as $cm)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="upload/my-talking-tom-icon.png" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$cm->user->name}}
                        <small>{{$cm->created_at}}</small>
                    </h4>
                    {{$cm->NoiDung}}
                </div>
            </div>
            @endforeach
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Related places </b></div>
                <div class="panel-body">
                @foreach($tinlienquan as $tt)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="ttmonan/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                <img class="img-responsive" src="public/upload/ttmonan/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left: 6px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                 @endforeach
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Prominent place</b></div>
                <div class="panel-body">
                	@foreach($tinnoibat as $tt)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="ttmonan/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                <img class="img-responsive" src="public/upload/ttmonan/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>
                         <div class="col-md-7">
                            <a href="#"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left: 6px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    @endforeach
                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->

@endsection