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
                        <h4>EDIT PEER REVIEW</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-block">
            {{-- Show error message if there are submissions --}}
            @if ($hasSubmission)
                <div class="alert alert-danger">
                    You cannot update this peer review because submissions already exist.
                </div>
            @else
                {{-- Form to update the peer review --}}
                <form action="{{ route('peer_reviews.update', $peerReview->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $peerReview->title) }}" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Max Score:</label>
                                <input type="number" name="max_score" class="form-control" value="{{ old('max_score', $peerReview->max_score) }}" placeholder="Enter Max Score">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Due Date:</label>
                                <input type="date" name="due_date" class="form-control" value="{{ old('due_date', $peerReview->due_date->format('Y-m-d')) }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Review Type:</label>
                                <select name="type" class="form-control">
                                    <option value="student-select" {{ $peerReview->type == 'student-select' ? 'selected' : '' }}>Student Select</option>
                                    <option value="teacher-assign" {{ $peerReview->type == 'teacher-assign' ? 'selected' : '' }}>Teacher Assign</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Instructions:</label>
                        <textarea name="instruction" class="form-control" placeholder="Enter Instructions">{{ old('instruction', $peerReview->instruction) }}</textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="allocate2">Submit</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>

@endsection
    