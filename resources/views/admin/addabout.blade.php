@extends('admin.header-footer')
@section('admin-body')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="row">
             
            <form action="/about" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text"  name="subject"class="form-control" id="subject" >
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                 
                    <textarea type="text" rows="3" name="description" class="form-control" ></textarea>
                  </div>
                  
                   
                  
                <!-- /.card-body -->

                <div class="d-grid">
                  <button type="submit"  name="add" class="btn btn-primary">addabout</button>
                </div>
                </div>
              </form>
           
            </div>
        </div>
    </div>
</div>


@endsection