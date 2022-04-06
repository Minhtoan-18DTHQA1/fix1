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
            		<h2 style="margin-top:0px; margin-bottom:0px;">Introduce about myFood</h2>
            	</div>

            	<div class="panel-body">
            		<!-- item -->
                    <h3><span class="glyphicon glyphicon-education"></span> What is myFood.vn?</h3>
                    <p>myFood allowing people to come and find desired address information on city limits.</p>
				    
                    <div class="break"></div>
				   	<h4><span class= "glyphicon glyphicon-bullhorn "></span> Comments & Reviews. </h4>
                    <p> Registered users can comment.</p>

				</div>
            </div>
    	</div>
    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection