@extends('admin.header-footer')
@section('admin-body')
<div class="container p-5" >
<table class="table bg-white">
            <tr>
        <thead>
                <th>id</th>
                <th>subject</th>
                
                
                <th>description</th>
                
                <th>Edit</th>
                <th>Delete</th>
                
                
            </thead>
            </tr>
            
            <tbody>
            @foreach($res as $values)
                <tr>
                    <td>{{$values->id}}</td>
                    <td>{{$values->subject}}</td>
                    
                    
                    <td>{{$values->description}}</td>
                    
                   
                    <td><a href="/edit1/{{$values->id}}">edit</a>
                    <td><a href="/delete1/{{$values->id}}">Delete</a>
                    
                </tr>
                @endforeach
            </tbody>
        
        
        </table>
        

@endsection