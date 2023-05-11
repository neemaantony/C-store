@extends('header_footer')
@section('index-body')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <div class="row">
                <form action="/registeraction" method="post" class="bg-white text-black p-5 contact-form">
                    @csrf
              <div class="form-group">
                <lable>Name</lable>
                <input type="text"  name="name" class="form-control" placeholder="enter your name">
              </div>
              <div class="form-group">
                <lable>Place</lable>
                <input type="text"  name="place" class="form-control" placeholder="enter your place">
              </div>
              
              <div class="form-group">
                <lable>Address</lable>
                <textarea name="address" id="address"  rows="3" class="form-control" placeholder="enter your address"></textarea>
              </div>


              <div class="form-group">
                <lable>User Name</lable>
                <input type="text" name="username" class="form-control" placeholder="enter your username">
              </div>
              <div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" placeholder="enter your password">
               
              </div>
              <div class="d-grid">
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>


                </div>
            </div>
        </div>
    
            

    </div>
</section>


@endsection