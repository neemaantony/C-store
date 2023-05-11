@extends('user.header-footer')
@section('user-body')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <div class="row">
                    @foreach($res as $values)
                <form action="/registeraction/{{$values->id}}" method="post" class="bg-white text-black p-5 contact-form">
                    @csrf
              <div class="form-group">
                <lable>Name</lable>
                <input type="text"  name="name" class="form-control"  value="{{$values->name}}">
              </div>
              <div class="form-group">
                <lable>Place</lable>
                <input type="text"  name="place" class="form-control" value="{{$values->place}}">
              </div>
              
              <div class="form-group">
                <lable>Address</lable>
                <textarea name="address" id="address"  rows="3" class="form-control"  value="{{$values->address}}">{{$values->address}}</textarea>
              </div>


              <div class="form-group">
                <lable>User Name</lable>
                <input type="text" name="username" class="form-control" value="{{$values->username}}">
              </div>
              <div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" value="{{$values->password}}">
               
              </div>
              <div class="d-grid">
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            @endforeach
          
          </div>


                </div>
            </div>
        </div>
    
            

    </div>
</section>

   
    
@endsection