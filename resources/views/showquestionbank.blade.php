@extends('dashboard')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
       <div class="container pt-5">
           <h2>Question Bank Catagory</h2>
  
        
           <table class="table">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Semester</th>
                <th>Year</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach($qbanks as $qbank)
              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$qbank->semester}}</td>
                <td>{{$qbank->year}}</td>

                <td>
                    <a href= "/edit_catagory/{{$catagory->id}}"class="btn btn-primary">Edit</a>
                    <a href= "/delete_catagory/{{$catagory->id}}"class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
    
                </td>
             </tr>
                @endforeach
    
            </tbody>
          </table>
  
  
       </div>
   </div>
  </div>
    
@endsection