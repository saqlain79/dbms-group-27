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
           <h2>Add Question Bank Catagory</h2>
  
        
           <div class="row">
               <div class="col-sm-4">
                   <form method="" action="/store_qbank">
                       @csrf
                       <label for="">Semester</label>
                       <input class= "text_color" type="text" name="semester" class="form-control"
                       value={{old('semester')}}>

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