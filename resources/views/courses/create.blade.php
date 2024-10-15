@extends('master')

@section('content')


<style>
    .allocate2{
        width: 100px;
        height: 30px;
        background-color: #448aff;
        color: white;
        text-align: center;
        border-radius: 4px;
        border: none;
       
    }
  </style>

<div class="col-xl-12 col-md-12">
    <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
        <div class="card-header">
            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h4>CREATE NEW COURSE</h4>
                    </div>
                    <div class="col-md-6" style="text-align: right; margin-top: 8px;">
                        
                    </div>
                </div>
            </div>
           
        </div>
        <div class="card-block">
            <form action="{{ route('courses.store') }}" method="POST" >
                @csrf
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Name:</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Course Code">
                      </div>
                      
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Code:</label>
                        <input type="text" name="code" class="form-control"  placeholder="Enter Course Code" >
                        
                      </div>
                      
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Assign Tecahers:</label>
                        <select name="teachers[]" class="form-control select2" multiple>
                            <option value="" selected diabled>---Assign Teachers---</option>
                            @foreach ($teachers as $t)
                                <option value="{{ $t->id }}">{{ $t->name }}
                                </option>
                            @endforeach
                        </select>  
                        
                        
                        
                      </div>
                      
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="allocate2">Submit</button>
                </div>
                
            </div>
        </form>
        </div>
    </div>
</div>



@endsection