@extends('master')

@section('content')

<style>
    .btn {
        width: 40px;
        text-align: center;
        border-radius: 5px;

    }
</style>

<style>
    .btn1 {
        width: 18px;
        text-align: center;
        border-radius: 5px;

    }

    .btn2 {
        width: 58px;
        text-align: center;
        border-radius: 5px;

    }
</style>


<style>
    .allocate2 {
        width: 150px;
        height: 30px;
        background-color: #448aff;
        color: white;
        text-align: center;
        border-radius: 4px;
        border: none;

    }
</style>
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>ADD PEER REVIEW DETAILS</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" value="{{ $peerReview->title }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instruction:</label>
                            <textarea name="instruction" class="form-control" placeholder="Enter Instructions" rows="6" readonly>{{ $peerReview->instruction }}</textarea>

                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Number of Reviews:</label>
                            <input type="text" class="form-control" value="{{ $peerReview->num_reviews }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Max Score:</label>
                            <input type="text" class="form-control" value="{{ $peerReview->max_score }}" readonly>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Due Date:</label>
                            <input type="text" class="form-control" value="{{ $peerReview->due_date->format('Y-m-d') }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type:</label>
                            <input type="text" class="form-control" value="{{ ucfirst(str_replace('-', ' ', $peerReview->type)) }}" readonly>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>SUBMIT YOUR REVIEW</h4>
                            <hr style="width:1000px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                <form action="/review_submit/{{ $id}}" method="POST">
                    @csrf
                <div class="row">

                    @if($peerReview->type == 'student-select')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Reviewees:</label>
                            <select name="reviewee_id" class="form-control select2" required>
                                <option value="" selected diabled>---Selcet Reviewee---</option>
                                @foreach ($students as $st)
                                    <option value="{{ $st->id }}">{{ $st->name }} ({{ $st->s_number }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Review Text:</label>
                            <textarea name="review_text" class="form-control" placeholder="Enter Review" rows="12" required></textarea>
                        </div>
                    </div>

                    @endif
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Review Text:</label>
                            <textarea name="review_text" class="form-control" placeholder="Enter Review" rows="12" required></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="allocate2">Submit Review</button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
@endsection



