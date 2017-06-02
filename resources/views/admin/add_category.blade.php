@extends('layouts.master')

@section('content')
<div id="contact-page" class="container">
      <div class="bg">
        <div class="row">       
          <div class="col-sm-12">                 
                                          
          <div id="gmap" class="">
             <div class="form-group">
                <div class="row">
                <form action="create.php" method="post">
                  <div class="col-md-4">
                    <label>Category Type</label>
                  </div><!-- col-md-4 -->

                  <div class="col-md-4">
                    <input type="text" class="form-control" name="category" placeholder="Category Type">
                   </div><!-- col-md-4 -->

                  <div class="col-md-4">
                   <input type="submit" class="btn btn-danger" name="category_add" 
                   value="Add">  
                  </div><!-- col-md-4 -->
                </form>
                </div><!-- row -->
              </div><!--/form-group-->
          </div><!--/contact-map-->

          <table border="1" class="table stripe hover" id="example1">

          <thead>
            <tr>
              <th>No</th>
              <th>Type</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

          </tbody>    
          </table>

        </div>  <!--/col-sm-12-->        
      </div> <!--/row-->     
    </div><!--/bg-->
    </div><!--/#contact-page-->
@endsection