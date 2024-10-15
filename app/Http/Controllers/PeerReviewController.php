<?php

namespace App\Http\Controllers;

use App\Models\PeerReview;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PeerReviewController extends Controller
{
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
        return view('peer_reviews.index',compact('data'))->with('i');
    }

    public function create($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('peer_reviews.create', compact('courseId'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:20',
            'instruction' => 'required|string',
            'num_reviews' => 'required|integer|min:1',
            'max_score' => 'required|integer|between:1,100',
            'due_date' => 'required|date|after:today',
            'type' => 'required|in:Student-Select,Teacher-Assign',
        ]);

        PeerReview::create($validatedData);

        return redirect()->route('peer_reviews.index')->with('success', 'Peer Review created successfully!');
    }


    public function edit($id)
{
    $peerReview = PeerReview::findOrFail($id);

    // Check if there are any submissions
    $hasSubmission = PeerReview::where('id', $id)->exists();

    // Pass data to the view
    return view('peer_reviews.edit', compact('peerReview', 'hasSubmission'));
}

// public function show(PeerReview $PeerReview)
// {   
//     $PeerReview = [];
//     // $peerReview = PeerReview::findOrFail($id);
//     return view('peer_reviews.show', compact('PeerReview'));
// }

public function show($id)
{
    $peerReview = PeerReview::findOrFail($id);
    $students = DB::table('users')->where('user_type', 'Student')->latest()->get();
    return view('peer_reviews.show', compact('peerReview','students', 'id'));
}

public function update(Request $request, $id)
{
    $peerReview = PeerReview::findOrFail($id);

    // Check if there are any submissions
    $hasSubmission = Submission::where('peer_review_id', $id)->exists();

    // If there are submissions, prevent updating
    if ($hasSubmission) {
        return redirect()->back()->with('error', 'You cannot update this peer review because there are already submissions.');
    }

    // Validate input data
    $validatedData = $request->validate([
        'title' => 'required|string|max:20',
        'instruction' => 'required|string',
        'num_reviews' => 'required|integer|min:1',
        'max_score' => 'required|integer|between:1,100',
        'due_date' => 'required|date|after:today',
        'type' => 'required|in:student-select,teacher-assign',
    ]);

    // Update the peer review
    $peerReview->update($validatedData);

    return redirect()->route('peer_reviews.index')->with('success', 'Peer Review updated successfully!');
}

    public function destroy($id)
    {
        $peerReview = PeerReview::findOrFail($id);
        $peerReview->delete();

        return redirect()->route('peer_reviews.index')->with('success', 'Peer Review deleted successfully!');
    }

    public function submitReview(Request $request, $id)
    {
        $peerReview = PeerReview::findOrFail($id);

        // Validate the input
        $request->validate([
            'reviews.*.reviewee_id' => 'required|exists:users,id|distinct',
            'reviews.*.review_text' => 'required|string|min:5',
            'reviews.*.marks' => 'required|integer|min:0|max:' . $peerReview->max_score,
        ]);

        // Save the reviews
        foreach ($request->reviews as $review) {
            if ($review['reviewee_id'] == auth()->user()->id) {
                return redirect()->back()->withErrors(['reviews' => 'You cannot review yourself.']);
            }

            Review::create([
                'peer_review_id' => $id,
                'reviewer_id' => auth()->user()->id,
                'reviewee_id' => $review['reviewee_id'],
                'review_text' => $review['review_text'],
                'marks' => $review['marks'],
            ]);
        }

        return redirect()->route('peer_reviews.show', $id)->with('success', 'Reviews submitted successfully!');
    }

    public function peer_reviews_edit($id)
    {
        $assess_data = DB::table('peer_reviews')->where('course_id', $id)->latest()->first();
        return view('peer_reviews.peer_reviews_edit', compact('assess_data', 'id'));
    }
    public function peer_reviews_update(Request $request, $id)
    {
        $course = $id;
        $peer_data = DB::table('peer_reviews')->where('course_id', $id)->latest()->first();

        DB::table('peer_reviews')->where('course_id', $id)->update([
            'title' => $request->title,
            'instruction' => $request->instruction,
            'num_reviews' => $request->num_reviews,    
            'max_score' => $request->max_score,    
            'type' => $request->type,    
            'updated_at' => now(),                    
        ]);
        return redirect()->route('peer_reviews.index');

    }

    public function review_submit(Request $request, $id)
    {
        $assesment_id = $id;
        $reviewer_id = Auth::user()->id;
        $reviewee_id = $request->reviewee_id;
        $review_text = $request->review_text;

        DB::table('reviews')->insert([
            'peer_review_id' => $assesment_id,
            'reviewer_id' => $reviewer_id,
            'reviewee_id' => $reviewee_id,    
            'review_text' => $review_text,    
            'created_at' => now(),                    
            'updated_at' => now(),                    
        ]);
        return redirect()->to('/enrolled_course');;


    }



    public function check(Request $request)
    {
        $dbval1 = DB::table('reviews')->latest()->get();
        return count($dbval1);
        
        $dbval = DB::table('enrolls')->latest()->get();
        return count($dbval);
    }


    public function peer_reviews_show($id)
    {
        $course_id = $id;
        $assessment_data = DB::table('peer_reviews')->where('course_id', $course_id)->latest()->first();
        $assessment_id = $assessment_data->id;

        $review_data = DB::table('reviews')->where('peer_review_id', $assessment_id)->latest()->get();

        return view('peer_reviews.peer_reviews_show', compact('review_data'))->with('i');



    }

    public function peer_reviews_marks($id)
    {
        $review_id = $id;

        $review_data = DB::table('reviews')->where('id', $review_id)->latest()->first();

        return view('peer_reviews.peer_reviews_marks', compact('review_data'))->with('i');
    }

    public function peer_reviews_marks_update(Request $request, $id)
    {
        $use_id = $request->peer_review_id;

        $ass_id = DB::table('peer_reviews')->where('id', $use_id)->latest()->first();

        $course_id = DB::table('courses')->where('id', $ass_id->course_id)->latest()->first();

        DB::table('reviews')->where('id', $id)->update([
            'marks' => $request->marks,    
            'updated_at' => now(),                    
        ]);
        return redirect()->to('/peer_reviews_show/' . $course_id->id);
    }

    public function student_review_marks($id)
    {   

        $marks_data = DB::table('reviews')->where('reviewer_id', $id)->whereNotNull('marks')->latest()->get();
        return view('peer_reviews.student_review_marks', compact('marks_data'))->with('i');

    }




    








    



}
