@extends('layouts.master')

@section('content')	



<div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="home.php" class="">Home</a></li>
                                <li><a href="{{ URL::to('product_list') }}" class="">Product List</a></li>
                                <li class="dropdown"><a href="">Create New<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ URL::to('create_product') }}">Create Product</a></li>
                                        <li><a href="categoryNew.php">Create Category</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Order<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="orderList.php">Check Order</a></li>                                        
                                    </ul>
                                </li>  
                                                         
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li class="dropdown"><a href="logout.php">Logout</a></li>   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">       
			<div class="col-sm-12"> 
			<form method="post" action="<?= URL::to('/product_list') ?>">
      			{{ csrf_field() }}
				<table border="1" class="table stripe hover" id="example">
					<thead>
							<tr>	
								<th>CodeNumber</th>			
								<th>Category</th>
								<th>Size</th>
								<th>Color</th>
								<th>Price</th>
								<th>Qty</th>
							</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td>{{ $product->codeNum }}</td>
								<td>{{ $product->category_id}}</td>
								<td>{{ $product->size }}</td>
								<td>{{ $product->color }}</td>
								<td>{{ $product->price }}</td>
								<td>{{ $product->qty }}</td>
							</tr>
						@endforeach
					</tbody>
					</table>
				</form>

   			</div> <!-- col-sm-12 -->
  		</div><!-- row -->
 	</div><!-- bg -->
</div><!-- container -->
@endsection