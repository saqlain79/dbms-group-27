@extends('dashboard')

<style>
    .label{
          display: block;
          padding-bottom: 30px;
          
        }
        .text_color{
            display: block;
            width: 100%;
            border: 1px solid red;
            
        }
    
    </style>

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
       <div class="container pt-5">
           <h2>Add Semester</h2>
  

           <div class="row">
               <div class="col-sm-4">
                   <form method="" action="/store_semester">
                       @csrf

                       <label for="">Semester Name</label>
                       <input class= "text_color" type="text" name="semester_name" class="form-control"
                       value={{old('semester_name')}}>

                    

                    <label for="">Year</label>
                       <input class= "text_color" type="number" name="year" class="form-control"
                       value={{old('year')}}>

  
                       <button class="btn btn-info mt-4">Submit</button>
  
                   </form>
               </div>
           </div>
  
  
       </div>
   </div>
  </div>
    
@endsection