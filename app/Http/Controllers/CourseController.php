<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\PeerReview;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function landing()
    {
        return view('home');
    }
    public function index()
    {   
        $userId = (string) Auth::id();

        if(Auth::user()->user_type == 'Admin')
        {
            $data = Course::latest()->get();
        }
        elseif(Auth::user()->user_type == 'teacher')
        {
            $data = Course::whereJsonContains('teachers', $userId)->latest()->get();
        }
        else
        {
            $data = Course::latest()->get();
        }
        return view('courses.index',compact('data'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = DB::table('users')->where('user_type', 'teacher')->latest()->get();
        return view('courses.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;
        $course->code = $request->code;
        $course->user_id = Auth::user()->id;    
        $course->teachers = $request->teachers;
        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $peerReviews = PeerReview::where('course_id', $course->id)->get();
        return view('courses.show', compact('course', 'peerReviews'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->code = $request->code;
        $course->update();

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
    }

    public function course_self_enroll($id)
    {
        $course = DB::table('courses')->where('id', $id)->first();
        $userId = Auth()->user()->id;


        $updated = DB::table('enrolls')->insert([
            'course_id' => $id,
            'course_name' => $course->name,
            'course_code' => $course->code,    
            'student' => $userId,          
            'status' => 'enrolled',   
            'enrollment_date' => now(),                    
        ]);

        
        return redirect()->route('courses.index');
    }

    public function course_allocation()
    {
        $data = Course::latest()->get();
        return view('courses.course_allocation',compact('data'))->with('i');
    }

    public function course_student_enroll($id)
    {   
        $course_data = DB::table('courses')->where('id', $id)->first();
        $student =  DB::table('users')->where('user_type', 'student')->latest()->get();
        $status = DB::table('enrolls')
        ->where('course_id', $id)
        ->get();   

        return view('courses.course_student_enroll', compact('course_data', 'student', 'status', 'id'));
    }


    public function checkEnrollment($id, $id1)
    {
        $isEnrolled = Enroll::where('student', $id)
                                ->where('course_id', $id1) 
                                ->exists();
        
        return response()->json(['isEnrolled' => $isEnrolled]);
    }

    public function course_student_enroll_store(Request $request, $id)
    {
        $student_id = $request->student_id;
        $course_id = $id;
        $course = DB::table('courses')->where('id', $id)->first();


        $updated = DB::table('enrolls')->insert([
            'course_id' => $id,
            'course_name' => $course->name,
            'course_code' => $course->code,    
            'student' => $student_id,          
            'status' => 'enrolled',   
            'enrollment_date' => now(),                    
        ]);

        return redirect()->to('/course_allocation');



    }

    public function enrolled_course()
    {   
        $data = DB::table('enrolls')->where('student',  Auth()->user()->id)->get(); 
        return view('courses.enrolled_course', compact('data'))->with('i');
    }

    public function upload_file()
    {
        return view('courses.upload_file');
    }

}
