@extends('layout.index')
@section('content')
<!-- Page Content -->
<div class="container">

	@include('layout.slide')

    <div class="space20"></div>


    <div class="row main-left">

    	@include('layout.menu')

        <div class="col-md-9">
            <div class="panel panel-default">            
            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
            		<h2 style="margin-top:0px; margin-bottom:0px;">Contact</h2>
            	</div>

            	<div class="panel-body">
            		<!-- item -->
                    <h3><span class="glyphicon glyphicon-align-left"></span>Contact information</h3>
				    
                    <div class="break"></div>
				   	<h4><span class= "glyphicon glyphicon-home "></span>Address : </h4>
                    <p>Tp Hồ Chí Minh - Việt Nam - Trái Đất </p>

                    <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                    <p>Man_Kiet_Toan_Huy_Luan_Tiep@gmail.com</p>

                    <h4><span class="glyphicon glyphicon-phone-alt"></span> Phone : </h4>
                    <p>0909 999 999 </p>



                    

				</div>
            </div>
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection