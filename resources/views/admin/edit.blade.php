@extends('admin.header-footer')
@section('admin-body')


<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="row">
                @foreach($res as $values)
            <form action="/editaction/{{$values->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text"  name="name"class="form-control" id="product"  value="{{$values->name}}">
                  </div>
                  <div class="form-group">
                    <label>Product</label>
                    <input type="text" name="product" class="form-control" id="product"  value="{{$values->product}}">
                  </div>
                  
                    <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" name="company"class="form-control" id="company" value="{{$values->companyname}}">
                  
                  
                </div>
                <div class="form-group">
                <label>Price</label>
                  <input type="text" name="price"class="form-control" id="price"value="{{$values->price}}">
                  
                  
                </div>
                    
                  <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" rows="3" name="description" class="form-control" value="{{$values->description}}">{{$values->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label>image</label>
                    <img src="/image/{{$values->image}}"  style="width: 100px;height:100px">
                    <input type="file" name="image"  class="form-control" id="image" value="{{$values->image}}">
                    
                        
                    
                    
                    
                  </div>
                   
                <!-- /.card-body -->

                <div class="d-grid">
                  <button type="submit"  name="submit" class="btn btn-primary">edit</button>
                </div>
                </div>
              </form>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

            <!-- /.card -->

           
            
                
            
                  
            
                

            

             

            
    


