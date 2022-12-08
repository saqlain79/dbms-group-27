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
           <h2>Add Question</h2>
  

           <div class="row">
               <div class="col-sm-4">
                   <form method="" action="/store_qbank">
                       @csrf

                       <div>
                        <label for="">Question Semester</label>
                        <select class = "text_color" name = "qbank" required="">
                            <option value="" selected="">Select Semester</option>

                            @foreach ($qbank as $qbank)
                            <option value="{{$qbank->semester}}">{{$qbank->semester}}</option>
                            @endforeach
                           
                        </select>
                    </div>

                    <div>
                        <label for="">Question Year</label>
                        <select class = "text_color" name = "qbank" required="">
                            <option value="" selected="">Select Year</option>

                            @foreach ($qbank as $qbank)
                            <option value="{{$qbank->year}}">{{$qbank->year}}</option>
                            @endforeach
                           
                        </select>
                    </div>

                    <label for="">Details</label>
                       <input class= "text_color" type="text" name="details" class="form-control"
                       value={{old('details')}}>

                    <div>
                        <label for="">Image or Document(if necessary)</label>
                        <input type = "file" class = "form-control" name= "image" >
                    </div>
  
                       <button class="btn btn-info mt-4">Submit</button>
  
                   </form>
               </div>
           </div>
  
  
       </div>
   </div>
  </div>
    
@endsection