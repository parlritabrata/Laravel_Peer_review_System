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

        .allocate3 {
            width: 150px;
            height: 30px;
            background-color: #13a3a3;
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
                            <h4>COURSE DETAILS</h4>
                        </div>
                        @if (Auth::user()->user_type == 'Admin')
                            <div class="col-md-6" style="text-align: right;">

                                    <button class="allocate2" onclick="location.href='{{ route('courses.create') }}'">Add
                                        New</button>
                            </div>
                        @endif
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
                            @if (Auth::user()->user_type == 'teacher')
                                <th style="text-align: center">Enrolled Students</th>
                            @endif
                            <th style="text-align: center" width="280px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <div hidden>

                                {{ $enroll = App\Models\Enroll::where('course_id', $dt->id)->where('student', Auth::user()->id)->where('status', 'enrolled')->get()->count() }}
                                {{ $enroll_student_count = App\Models\Enroll::where('course_id', $dt->id)->where('status', 'enrolled')->get()->count() }}

                            </div>
                            <tr style="text-align: center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->code }}</td>
                                @if (Auth::user()->user_type == 'teacher')
                                    <td>{{ $enroll_student_count }}</td>
                                @else
                                @endif
                                <td>

                                    @if (Auth::user()->user_type == 'teacher')
                                        <a class="btn btn-info btn1" href="{{ route('courses.show', $dt->id) }}"><i
                                            class="fa fa-eye"></i></a>
                                    @endif 
                                    @if (Auth::user()->user_type == 'Admin')
                                        <form action="{{ route('courses.destroy', $dt->id) }}" method="POST">
                                            <a class="btn btn-info btn1" href="{{ route('courses.show', $dt->id) }}"><i
                                                    class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary btn1" href="{{ route('courses.edit', $dt->id) }}"><i
                                                    class="fa fa-pencil"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button type="submit" class="btn btn-danger btn1"><i
                                                    class="fa fa-trash"></i></button> --}}
                                        </form>
                                    @else

                                    @if (Auth::user()->user_type == 'student')
                                        @if ($enroll > 0)
                                            <span style="color: green">Already Enrolled to this Course</span>
                                        @else
                                            <a class="btn btn-success btn2"
                                                href="/course_self_enroll/{{ $dt->id }}">Enroll</a>
                                        @endif
                                    @endif
                                    @endif
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
