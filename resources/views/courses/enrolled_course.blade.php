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
                            <h4>ENROLLED COURSE DETAILS</h4>
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
                            <th style="text-align: center">Course Code</th>
                            <th style="text-align: center" width="280px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr style="text-align: center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $dt->course_name }}</td>
                                <td>{{ $dt->course_code }}</td>
                                <td>
                                    <a class="btn btn-info btn1" href="{{ route('courses.show', $dt->course_id) }}"><i
                                        class="fa fa-eye"></i></a>
                                </td>


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
