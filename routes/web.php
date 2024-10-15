<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PeerReviewController;


Route::get('/', [CourseController::class, 'landing'])->name('landing');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth']], function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('courses', CourseController::class);
    Route::get('/course_self_enroll/{id}', [CourseController::class, 'course_self_enroll'])->name('course_self_enroll');
    Route::get('/course_allocation', [CourseController::class, 'course_allocation'])->name('course_allocation');
    Route::get('/course_student_enroll/{id}', [CourseController::class, 'course_student_enroll'])->name('course_student_enroll');
    Route::get('/checkEnrollment/{id1}/{id2}', [CourseController::class, 'checkEnrollment']);
    Route::post('/course_student_enroll_store/{id}', [CourseController::class, 'course_student_enroll_store'])->name('course_student_enroll_store');

    // In routes/web.php
    Route::get('/peer_reviews', [PeerReviewController::class, 'index'])->name('peer_reviews.index');
    Route::get('/peer_reviews/create/{courseId}', [PeerReviewController::class, 'create'])->name('peer_reviews.create');
    Route::post('/peer_reviews/store', [PeerReviewController::class, 'store'])->name('peer_reviews.store');
    Route::get('/peer_reviews/{id}', [PeerReviewController::class, 'show'])->name('peer_reviews.show');
    Route::get('/peer_reviews/{id}/edit', [PeerReviewController::class, 'edit'])->name('peer_reviews.edit');
    Route::put('/peer_reviews/{id}', [PeerReviewController::class, 'update'])->name('peer_reviews.update');
    Route::delete('/peer_reviews/{id}', [PeerReviewController::class, 'destroy'])->name('peer_reviews.destroy');
    Route::get('/my_profile/{id}', [HomeController::class, 'my_profile'])->name('my_profile');
    Route::get('/enrolled_course', [CourseController::class, 'enrolled_course'])->name('enrolled_course');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    Route::post('/peer_reviews/submit/{id}', [PeerReviewController::class, 'submitReview'])->name('reviews.submit');
    Route::get('/peer_reviews_edit/{id}', [PeerReviewController::class, 'peer_reviews_edit'])->name('peer_reviews_edit');
    Route::put('/peer_reviews_update/{id}', [PeerReviewController::class, 'peer_reviews_update'])->name('peer_reviews_update.update');
    Route::post('/review_submit/{id}', [PeerReviewController::class, 'review_submit'])->name('review_submit.update');



    Route::get('/check', [PeerReviewController::class, 'check']);


    Route::get('/peer_reviews/{assessmentId}/details', [PeerReviewController::class, 'assessmentDetails'])->name('peer_reviews.details');
    Route::put('/peer_reviews/{assessmentId}/student/{studentId}/score', [PeerReviewController::class, 'updateStudentScore'])->name('peer_reviews.updateStudentScore');
    Route::get('/peer_reviews/{assessmentId}/student/{studentId}/reviews', [PeerReviewController::class, 'studentReviews'])->name('peer_reviews.student_reviews');

    Route::get('/peer_reviews_show/{id}', [PeerReviewController::class, 'peer_reviews_show'])->name('peer_reviews_show');
    Route::get('/peer_reviews_marks/{id}', [PeerReviewController::class, 'peer_reviews_marks'])->name('peer_reviews_marks');
    Route::post('/peer_reviews_marks_update/{id}', [PeerReviewController::class, 'peer_reviews_marks_update'])->name('peer_reviews_marks_update');
    Route::get('/student_review_marks/{id}', [PeerReviewController::class, 'student_review_marks'])->name('student_review_marks');

    Route::get('/upload_file', [CourseController::class, 'upload_file']);


});