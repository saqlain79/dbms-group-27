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
           <h2>Add Question Bank Category</h2>
  
        
           <div class="row">
               <div class="col-sm-4">
                   <form method="" action="/store_qbank">
                       @csrf
                       <label for="">Semester</label>
                       <input class= "text_color" type="text" name="semester" class="form-control"
                       value={{old('semester')}}>

                       <div>
                        <label for="">Semester</label>
                        <select class = "text_color" name = "semesterid" required="">
                            <option value="" selected>Select Semester</option>

                            @foreach ($qbanks as $qbank)
                            <option value="{{$qbank->semester_id}}">{{$qbank->semester_id}}</option>
                            @endforeach
                           
                        </select>
                    </div>

                       <div>
                        <label for="">Question</label>
                        <select class = "text_color" name = "questionid" required="">
                            <option value="" selected>Select Question</option>

                            @foreach ($qbanks as $qbank)
                            <option value="{{$qbank->question_id}}">{{$qbank->question_id}}</option>
                            @endforeach
                           
                        </select>
                    </div>
  
                       <button class="btn btn-info mt-4">Submit</button>
  
                   </form>
               </div>
           </div>
  
  
       </div>
   </div>
  </div>
    
@endsection