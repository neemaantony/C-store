@extends('admin.header-footer')
@section('admin-body')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="row">
                @foreach($res as $values)
            <form action="/aboutaction/{{$values->id}}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text"  name="subject"class="form-control" id="subject" value="{{$values->subject}}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                 
                    <textarea type="text" rows="3" name="description" class="form-control" value="{{$values->description}}">{{$values->description}}</textarea>
                  </div>
                  
                   
                  
                <!-- /.card-body -->

                <div class="d-grid">
                  <button type="submit"  name="add" class="btn btn-primary">Add</button>
                </div>
                </div>
              </form>
              @endforeach
            </div>
        </div>
    </div>
</div>


@endsection