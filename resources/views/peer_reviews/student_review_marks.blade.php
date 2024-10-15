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
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>PEER REVIEW MARKS</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">


                <br>
                <table id= "example1" class="table table-bordered table-striped">
                    <thead style="text-align: center">
                        <tr style="text-align: center">
                            <th style="text-align: center">No</th>
                            <th style="text-align: center">Course Name</th>
                            <th style="text-align: center">Assessment Title</th>
                            <th style="text-align: center">Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marks_data as $dt)
                        <div hidden>
                            {{  $assessment_title = App\Models\PeerReview::where('id', $dt->peer_review_id)->latest()->first() }}
                            {{  $course_name = App\Models\Course::where('id', $assessment_title->course_id)->latest()->first() }}

                        </div>
                            <tr style="text-align: center">
                                <td>{{ ++$i }}</td>
                                <td>{{  $course_name->name }}</td>
                                <td>{{  $assessment_title->title }}</td>
                                <td>{{  $dt->marks }}</td>                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
