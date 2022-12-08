@extends('dashboard')

{{-- <base href="/public"> --}}



@section('content')

<div class="main-panel">
    <div class="content-wrapper">
       <div class="container pt-5">
           <h2>Edit Question Bank</h2>
  
        
           <div class="row">
               <div class="col-sm-4">
                   <form method="post" action="/update_qbank/{{$qbank->id}}">
                       @csrf
                       @method('put')
                       <div>
                       <label for="head">Semester</label>
                       <input class= "text_color" type="text" name="semester" class="form-control"
                       value={{$qbank->semester}}>
                       </div>

                       
                       <div>
                       <label for="head">Year</label>
                       <input class= "text_color" type="number" name="year" class="form-control"
                       value={{$qbank->year}}>
                       </div>
  
                       <button class="btn btn-info mt-4">Update</button>
  
                   </form>
               </div>
           </div>
  
  
       </div>
   </div>
  </div>
    
@endsection