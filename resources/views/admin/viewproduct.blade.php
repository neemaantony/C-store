@extends('admin.header-footer')
@section('admin-body')
<div class="container p-5" >
<table class="table bg-white">
            <tr>
        <thead>
                <th>id</th>
                <th>name</th>
                <th>product</th>
                <th>company Name</th>
                <th>price</th>
                <th>description</th>
                <th>image</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
                
                
            </thead>
            </tr>
            
            <tbody>
            @foreach($res as $values)
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->name}}</td>
                    <td>{{$values->product}}</td>
                    <td>{{$values->companyname}}</td>
                    <td>{{$values->price}}</td>
                    <td>{{$values->description}}</td>
                    <td><a href="/image/{{$values->image}}">image</a></td>
                    <td>{{$values->status}}</td>
                    <td><a href="/edit/{{$values->id}}">edit</a>
                    <td><a href="/delete/{{$values->id}}">Delete</a>
                    
                </tr>
                @endforeach
            </tbody>
        
        
        </table>
        
    
               
@endsection