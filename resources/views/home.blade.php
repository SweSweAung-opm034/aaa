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
                                 <li><a href="main.php" class="">Product</a></li>
                                <li ><a href="review.php">Review</a></li>
                                                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <form action="search.php" method="post">
                        <div class="mainmenu pull-right">
                        
                        <input type="submit" value="Search" name="searchBtn" class="btn btn-primary" />
                        </div>
                        <div class="search_box pull-left">
                           <input type="text" placeholder="Search" name="search" />
                        </div>
                        
                     </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Online</span>-Shopping</h1>
                                    <h2>Save your Time</h2>
                                    <p>Please Order the products ... We deliver it</p>
                                    <a href="#" class="btn btn-default get">Get it now</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../template/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="../template/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Online</span>-Shopping</h1>
                                    <h2>Save your Time</h2>
                                    <p>Please Order the products ... We deliver it</p>
                                    <a href="main.php" class="btn btn-default get">Get it now</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../template/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="../template/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Online</span>-Shopping</h1>
                                    <h2>Save your Time</h2>
                                    <p>Please Order the products ... We deliver it</p>
                                    <a href="main.php" class="btn btn-default get">Get it now</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../template/images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                    <img src="../template/images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->

    <div class="visible-md visible-lg col-sm-4 col-lg-3">         
    <div id="left-side-menu">  
        <div class="">
            <div class="tabbable">
                 <ul class="nav nav-tabs">
                    <li class="active"><a href="#1" data-toggle="tab">Categories</a></li>
                 </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="1">
                            sdfghjxcvbn                 
                        
                        <hr>
                        
                        </div><!-- / tab-pane active-->
                    </div><!-- /tab-content--> 
            </div> <!-- /tabbable-->
        </div><!-- /well--> 
    </div>      
</div>


<!-- for product list -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1>Products</h1>   
                </div><!--/ col-sm-12 col-lg-12-->
            </div>  <!-- /row-->                
                    
                    <hr>         
                 
            <div class="articles-grid row">
                @foreach($products as $product)

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    
                        <div class="thumbnail">        
                      <!-- <img class="img-responsive" style="width:200px;height:260px"
                            src="{{url('../public/img/')}}" alt="post image"> 
 -->
                            <img class="img-responsive" style="width:200px;height:260px"
                            src="{{$product['image']}}" alt="post image">
                            <div class="caption">
                                <h3 class="">{{ $product->codeNum }}</h3>                
                                <p>
                                    <a class="" href="{{ URL::to('/detail/'.$product->id) }}" 
                                    title="">Detail </a>
                                </p>
                            </div> <!--caption -->      
                        </div> <!--thumbnail -->
                        
                    </div><!--col-xs-4 col-sm-4 col-md-4 col-lg-4 -->
              @endforeach
            </div> <!-- articles-grid row -->
            
            
            <div id="page-selection"></div>

        </div>  <!-- / col-xs-12 col-sm-12 col-md-12 col-lg-9 -->
    </div> <!-- row -->
</div> <!-- /container -->

@endsection