@extends('dashboard')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
       <div class="container pt-5">
           <h2>Semester list</h2>
  
        
           <table class="table">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Year</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach($semesters as $semester)
              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$semester->semester_name}}</td>
                <td>{{$semester->year}}</td>

                <td>
                    <a href= "/edit_semester/{{$semester->id}}"class="btn btn-primary">Edit</a>
                    <a href= "/delete_semester/{{$semester->id}}"class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
    
                </td>
             </tr>
                @endforeach
    
            </tbody>
          </table>
  
  
       </div>
   </div>
  </div>
    
@endsection