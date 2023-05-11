@extends('admin.header-footer')
@section('admin-body')


<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="row">
            <form action="/addproducts" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text"  name="name"class="form-control" id="product" placeholder="enter your name">
                  </div>
                  <div class="form-group">
                    <label>Product</label>
                    <input type="text" name="product" class="form-control" id="product" placeholder="place your product">
                  </div>
                  
                    <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" name="company"class="form-control" id="company" placeholder="place your company">
                  
                  
                </div>
                <div class="form-group">
                <label>Price</label>
                  <input type="text" name="price"class="form-control" id="price" placeholder="enter price">
                  
                  
                </div>
                    
                  <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" rows="3" name="description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>image</label>
                    <input type="file" name="image"class="form-control" id="image" >
                   

                  
                    
                  </div>
                   
                <!-- /.card-body -->

                <div class="d-grid">
                  <button type="submit"  name="submit" class="btn btn-primary">Add</button>
                </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection

            <!-- /.card -->

           
            
                
            
                  
            
                

            

             

            
    


