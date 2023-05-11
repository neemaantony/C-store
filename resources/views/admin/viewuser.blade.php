@extends('admin.header-footer')
@section('admin-body')
<div class="container p-5" >
    <div class="row">
        <div class="col-sm-3">
            
        </div>
    </div>
<table class="table bg-white " >
            <tr >
        <thead class="p-5">
                <th >id</th>
                <th>name</th>
                <th>place</th>
                <th>address</th>
                
                <th>username</th>
                <th>password</th>
                <!-- <th>status</th>
                <th>Edit</th>
                <th>Delete</th> -->
                
                
            </thead>
            </tr>
            
            <tbody>
            @foreach($res as $values)
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->name}}</td>
                    <td>{{$values->place}}</td>
                    <td>{{$values->address}}</td>
                    <td>{{$values->username}}</td>
                    <td>{{$values->password}}</td>
                    <!-- <td><a href="/image/{{$values->image}}">image</a></td>
                    <td>{{$values->status}}</td>
                    <td><a href="/edit/{{$values->id}}">edit</a>
                    <td><a href="/delete/{{$values->id}}">Delete</a> -->
                    
                </tr>
                @endforeach
            </tbody>
        
        
        </table>
        
@endsection