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
            width: 78px;
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
                            <h4>ALL REVIEWS BY STUDENTS</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">


                <br>
                <table id= "example1" class="table table-bordered table-striped">
                    <thead style="text-align: center">
                        <tr style="text-align: center">
                            <th style="text-align: center">SL No.</th>
                            <th style="text-align: center">Review Given By</th>
                            <th style="text-align: center">Reviewee</th>
                            <th style="text-align: center">Submit Date</th>
                            <th style="text-align: center" width="280px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($review_data as $dt)

                        <div hidden>
                            {{ $name = App\Models\User::where('id', $dt->reviewer_id)->latest()->first() }}
                            {{ $name1 = App\Models\User::where('id', $dt->reviewee_id)->latest()->first() }}

                        </div>
                            <tr style="text-align: center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $name->name }}</td>
                                <td>

                                    @if($dt->reviewee_id == null)
                                        NA
                                    @else
                                        {{ $name1->name }}
                                    @endif
                                </td>
                                <td>{{ $dt->created_at }}</td>

                                <td>
                                    @if($dt->marks != null)

                                        <p style="color: green"><b>Marks Already Given</b></p>

                                    @else

                                        <a class="btn btn-info btn1" href="/peer_reviews_marks/{{  $dt->id }}">Give Marks</a>

                                    @endif
                                </td>                               
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
