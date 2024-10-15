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
                            <h4>REVIEW DETAILS</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                <form action="/peer_reviews_marks_update/{{ $review_data->id}}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="peer_review_id" value="{{ $review_data->peer_review_id }}">

                        <div hidden>
                            {{ $name = App\Models\User::where('id', $review_data->reviewer_id)->latest()->first() }}
                            {{ $name1 = App\Models\User::where('id', $review_data->reviewee_id)->latest()->first() }}

                        </div>


                        <div class="form-group">
                            <label>Review Given By:</label>
                            <input type="text" class="form-control" value="{{ $name->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Reviewee:</label>
                            <input type="text" class="form-control" value="{{ $name->name1 }}" readonly>

                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Review Text:</label>
                            <textarea name="review_text" class="form-control" placeholder="Enter Review" rows="8" readonly>{{  $review_data->review_text }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Give Marks:</label>
                            <input type="number" name="marks" class="form-control" min="1" placeholder="Enter Marks" required>


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



    
    </div>
@endsection



