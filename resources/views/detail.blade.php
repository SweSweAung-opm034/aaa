@extends('layouts.master')

@section('content')
<div class="container">  
    <div class="row">
		

	<!-- CONTENT SIDE-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<h1>Details</h1>	
				</div><!--/ col-sm-12 col-lg-12-->
			</div>	<!-- /row-->				
				
		<!-- START THE FEATURETTES -->

	

			      <hr class="featurette-divider">
			      	<div class="row featurette">
			        	<div class="col-md-7">
			           <table class="table">
			  	<tr>
			  		<td>  <p class="lead"> Code </p></td>
			  		<td> <p class="lead">codeNum</p> </td>
			  	</tr>
			  	<tr>
			  		<td>  <p class="lead"> Size </p></td>
			  		<td> <p class="lead">
			  			size	  			
			  		<input type="type" name="size" 
			  	value="size"  style="width:200px;display:none">
			  			</p> 
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>  <p class="lead"> Color </p></td>
			  		<td> <p class="lead">
			  			color
			  		<input type="type" name="color" 
			  	value="color"  style="width:200px;display:none">
			  		</p> </td>
			  	</tr>
	
			  	
			  	<tr>
			  		<td>  <p class="lead"> Qty </p></td>
			  		<td> <p class="lead">
			  		<input type="number" name="qty" class="form-control" 
			  	value="qry" min="1" max="<?=$max_qty?>" style="width:200px">
			  			</p>
			  		 </td>
			  	</tr>
			  	
			  	<tr>
			  		<td>  <p class="lead"> Price </p></td>
			  		<td> <p class="lead">price" Ks"; ?></p> </td>
			  	</tr>
			  	

			  </table>
			  
					
			        	</div><!-- col-md-7 -->
				        <div class="col-md-5">
				          <img class="featurette-image img-responsive" 
				          src="{{ asset('../public/img')}}" 
				          data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				        </div><!-- col-md-5 -->
			      	</div><!-- col-md-7 -->
			
			      <hr class="featurette-divider">

		
      <!-- /END THE FEATURETTES -->

			<ul class="pager">
			  <li class="pull-right"><a href="main.php">Back >></a></li>
			</ul>
		</div>  <!-- / col-xs-12 col-sm-12 col-md-12 col-lg-9 -->
	</div> <!-- row -->
</div> <!-- /container -->
<!--/ CONTENT -->
@endsection