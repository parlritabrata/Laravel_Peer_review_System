@extends('master')

@section('content')
<style>
    .allocate2 {
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
                        <h4>CREATE NEW PEER REVIEW</h4>
                    </div>
                    <div class="col-md-6" style="text-align: right; margin-top: 8px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-block">
            <form action="{{ route('peer_reviews.store') }}" method="POST">
                @csrf
                <input type="hidden" name="course_id" value="{{ $courseId }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Assessment Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instruction:</label>
                            <textarea name="instruction" class="form-control" placeholder="Enter Instructions"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Number of Reviews:</label>
                            <input type="number" name="num_reviews" class="form-control" min="1" placeholder="Enter Number of Reviews">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Maximum Score:</label>
                            <input type="number" name="max_score" class="form-control" min="1" max="100" placeholder="Enter Maximum Score">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Due Date and Time:</label>
                            <input type="datetime-local" name="due_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type:</label>
                            <select name="type" class="form-control">
                                <option value="" selected diabled>---Selcet Student---</option>
                                <option value="Student-Select">Student-Select</option>
                                <option value="Teacher-Assign">Teacher-Assign</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="allocate2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
