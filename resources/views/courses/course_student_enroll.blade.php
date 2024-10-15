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

    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>DETAILS</h4>
                        </div>
                        <div class="col-md-6" style="text-align: right; margin-top: 8px;">

                        </div>
                    </div>
                </div>

            </div>
            <div class="card-block" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">

                <div class="row">

                    <div class="col-md-12 text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX0vCrYgs26ddN53xUschVKItKHTuncwHirg&s"
                            alt="">

                    </div>

                </div>
                <br>
                <hr>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" id="course_id" value="{{ $course_data->id }}">
                            <label style="font-size: 16px"><b>Course Name:</b> {{ $course_data->name }}</label>
                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-size: 16px"><b>Course Code:</b> {{ $course_data->code }}</label>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-8 col-md-12">
        <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5)">
            <div class="card-header">
                <div class="col-xl-12 col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>ENROLL STUDENT TO THE COURSE</h4>
                        </div>
                        <div class="col-md-4" style="text-align: right; margin-top: 8px;">

                        </div>
                    </div>
                </div>

            </div>
            <div class="card-block">
                <form action="/course_student_enroll_store/{{ $id }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label style="font-size: 16px">Enroll Student:</label>
                                <select id="sel1" name="student_id" class="form-control select2" id="sel1" onchange="blockopen()">
                                    <option value="" selected diabled>---Selcet Student---</option>
                                    @foreach ($student as $st)
                                        <option value="{{ $st->id }}">{{ $st->name }} ({{ $st->s_number }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button id="enrollButton" type="submit" class="allocate2">Enroll</button>
                            <p id="enrollmentStatus" class="text-danger" style="font-size: 15px;font-weight:bold"></p>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function blockopen() {
            var studentId = $('#sel1').val(); 
            var course_id = document.getElementById("course_id").value;

            console.log(studentId);
            console.log(course_id);

            
    
            if (studentId) {
                $.ajax({
                    url: '/checkEnrollment/' + studentId + '/' + course_id,
                    type: 'GET',
                    success: function (response) {

                        console.log(response.isEnrolled);
                        
                        if (response.isEnrolled) {
                            $('#enrollButton').hide(); 
                            $('#enrollmentStatus').text('Student already enrolled'); 
                        } else {
                            $('#enrollButton').show(); 
                            $('#enrollmentStatus').text(''); 
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log('An error occurred: ' + error);
                    }
                });
            }
        }
    </script>


@endsection
