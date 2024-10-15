@extends('master')

@section('content')

    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>PEER REVIEW ASSESMENTS</h4>
                        </div>
                        {{-- <div class="col-md-6" style="text-align: right; margin-top: 8px;">
                            @if (Auth::user()->user_type == 'teacher')
                                <a class="btn btn-primary"
                                   href="{{ route('peer_reviews.create', ['courseId' => $courses->first()->id]) }}">Add Peer
                                   Review</a>
                            @endif
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead style="text-align: center">
                        <tr style="text-align: center">
                            <th style="text-align: center">SL No</th>
                            <th style="text-align: center">Course Name</th>
                            <th style="text-align: center">Course Code</th>
                            <th style="text-align: center" width="280px">Assesment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr style="text-align: center">

                                <div hidden>

                                    {{ $assesment_count = App\Models\PeerReview::where('course_id', $dt->id)->get()->count() }}
    
                                </div>


                                <td>{{ ++$i }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->code }}</td>
                                <td>

                                    @if($assesment_count > 0)

                                    @else
                                    <a class="btn btn-success"
                                    href="{{ route('peer_reviews.create', ['courseId' => $dt->id]) }}">Add</a>
                                    @endif
                                    <div hidden>
                                        {{ $assessment_id = App\Models\PeerReview::where('course_id', $dt->id)->latest()->first() }}

                                        @if($assessment_id != null)

                                        {{ $submit_review_count = App\Models\Review::where('peer_review_id', $assessment_id->id)->count() }}

                                        @endif
                                    </div>

                                    @if($assessment_id != null)
                                    @if($submit_review_count > 0)

                                        <a class="btn btn-dark"
                                    href="/peer_reviews_show/{{ $dt->id }}">Show Review</a>



                                


                                    @else

                                    <a class="btn btn-primary"
                                    href="/peer_reviews_edit/{{ $dt->id }}">Edit</a>

                                    @endif
                                    @endif
                                </td>

                                <td hidden>
                                    @if (Auth::user()->user_type == 'teacher')
                                        <form action="{{ route('peer_reviews.destroy', $dt->id) }}" method="POST" style="display:inline;">
                                            
                                            {{-- <a class="btn btn-primary btn1" href="{{ route('peer_reviews.edit', $review->id) }}"><i
                                                class="fa fa-pencil"></i></a> --}}
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn1"><i class="fa fa-trash"></i></button>
                                        </form>
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
