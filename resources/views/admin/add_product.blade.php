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
          <div class="col-sm-6"> 
  
 <form action="<?= URL::to('/addProduct') ?>" method="post" enctype='multipart/form-data'>
 {{ csrf_field() }}
        <div class="form-group">
          <label>Code Number</label>
          <input type="text" class="form-control" required="true"
          name="codeNum" placeholder="Code Number">          
        </div>
        <input type="text" name="category_id">

        <div class="form-group">
          <label>Category</label>
          <select name="category">
          	<option>aa</option>     
          	<option>bb</option>     
          	<option>cc</option>     
          	<option>dd</option>     
          </select>          
        </div>

         <div class="form-group">
          <label>Price</label>
          <input type="number" class="form-control" name="price" placeholder="Price" 
           required="true" min='0'>         
        </div>
        
        <div class="form-group">
          <label>Size</label>
          <input type="text" class="form-control" name="size" required="true"
          placeholder="Size">
        </div>
        
        <div class="form-group">
          <label>Color</label>
          <input type="text" class="form-control" name="color"
           placeholder="Color" required="true">           
        </div>
        <div class="form-group">
          <label>Image</label>
          <!-- <input type="file"  name="image" required="required" >   --> 
          <input type="file" name="image" id="fileToUpload">   
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" class="form-control" name="description" 
        >         
        </div>
        <div class="form-group">
          <label>Qty</label>
          <input type="number" class="form-control" name="qty" 
         required="required" min=0>         
        </div>
         <div class="form-group"> 
          <input type="submit" class="btn btn-danger" name="product_save" value="Save">         
        </div>
  </form>      

</div>  <!--/col-sm-6-->  
<div class="col-sm-6"></div>      
      </div> <!--/row-->     
    </div><!--/bg-->
    </div><!--/#contact-page-->

@endsection