@extends('layouts.master')

@section('content')

<header>
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
                                <li><a href="#" class="">Product List</a></li>
                                <!-- <li class="dropdown"><a href="#">Manage<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="productList.php">List</a></li>
                                        <li><a href="profit.php">Profit</a></li> -->
                                     <!--    <li><a href="product-details.html">SoldOut</a></li>  -->                                        
                                <!--     </ul>
                                </li>  -->
                                <li class="dropdown"><a href="">Create New<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="productNew.php">Create Product</a></li>
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
    </header><!--/header-->
@endsection