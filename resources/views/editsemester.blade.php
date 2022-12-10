@extends('dashboard')

<base href="/public">



@section('content')

<div class="main-panel">
    <div class="content-wrapper">
       <div class="container pt-5">
           <h2>Edit Semester</h2>
  
        
           <div class="row">
               <div class="col-sm-4">
                   <form method="post" action="/update_semester/{{$semester->id}}">
                       @csrf
                       @method('put')
                       <div>
                       <label for="head">Semester</label>
                       <input class= "text_color" type="text" name="semester_name" class="form-control"
                       value={{$semester->semester_name}}>
                       </div>

                       
                       <div>
                       <label for="head">Year</label>
                       <input class= "text_color" type="number" name="year" class="form-control"
                       value={{$semester->year}}>
                       </div>
  
                       <button class="btn btn-info mt-4">Update</button>
  
                   </form>
               </div>
           </div>
  
  
       </div>
   </div>
  </div>
    
@endsection