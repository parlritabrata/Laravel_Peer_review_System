@extends('master')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if (Auth::user()->user_type == 'teacher')
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-xl-12 col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>COURSE DETAILS</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Name:</label>
                                <input type="text" class="form-control" value="{{ $course->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Code:</label>
                                <input type="text" class="form-control" value="{{ $course->code }}" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>


                    <!-- Display Peer Reviews -->

                </div>
            </div>
        </div>
    @elseif (Auth::user()->user_type == 'student')
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-xl-12 col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>COURSE DETAILS</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Name:</label>
                                <input type="text" class="form-control" value="{{ $course->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Code:</label>
                                <input type="text" class="form-control" value="{{ $course->code }}" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>


                    <!-- Display Peer Reviews -->

                </div>
            </div>
        </div>
    @endif


    @if (Auth::user()->user_type == 'student')
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-xl-12 col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>TEACHER LIST</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5);height: 165px">
                    <!-- Display Teacher Details -->
                    <div class="row">
                        <div class="col-md-12">

                            @foreach ($course->teachers as $t)
                            <div hidden>
                                {{  $name = App\Models\User::where('id', $t)->get()[0]->name }}
                                
                            </div>
                                {{ ++$i }}. {{  $name  }}<br>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <br>

                    <!-- Display Peer Reviews -->

                </div>
            </div>
        </div>
    @endif


    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>ASSESSMENT DETAILS</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                <!-- Display Peer Reviews -->
                <div class="row">
                    <div class="col-md-12">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Title</th>
                                    <th style="text-align: center">Due Date</th>
                                    <th style="text-align: center">No. of submitted reviews</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peerReviews as $review)
                                    <div hidden>
                                        {{ $submit_review_count = DB::table('reviews')->where('peer_review_id', $review->id)->where('reviewer_id', Auth::user()->id)->count() }}
                                    </div>
                                    <tr>
                                        <td style="text-align: center">{{ $review->title }}</td>
                                        <td style="text-align: center">{{ $review->due_date->format('Y-m-d') }}</td>
                                        <td style="text-align: center">{{ $submit_review_count }}</td>
                                        <td style="text-align: center">
                                            @if ($submit_review_count >= $review->num_reviews)
                                                <b style="color: red">Max number of Review Reached</b>
                                            @else
                                                <a href="{{ route('peer_reviews.show', $review->id) }}"
                                                    class="btn btn-primary">
                                                    Add Reviews
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#example1").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            })
        });
    </script>
@endsection
