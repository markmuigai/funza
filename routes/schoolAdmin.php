<?php

/*
|--------------------------------------------------------------------------
| School Admin Routes
|--------------------------------------------------------------------------
|
| Register the School admin routes for the application.
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// School Admin Dashboard
Route::get('/', 'AppController@dashboard')->name('dashboard');

// Teachers
Route::resource('teachers', 'TeacherController');

// Export teachers  csv
Route::get('csv/teachers/export', 'TeacherController@export')->name('teachers.export');

// Export teachers csv template
Route::get('csv/teachers/csv-template', 'TeacherController@exportCSVTemplate')->name('teachers.export.csv-template');

// Import teachers csv
Route::post('csv/teachers/import', 'TeacherController@import')->name('teachers.import');

// Assignment classes and subjects to teachers
Route::get('teachers/{teacher}/classAssignment', 'TeacherController@classAssignment')->name('teachers.class-assignment');

// Fetch classes based on a grade ajax
Route::get('teachers/classAssignment/fetchClasses/{grade}', 'TeacherController@fetchGradeClasses')->name('teachers.class-assignment.fetch-classes');

// Fetch subjects based on a grade ajax
Route::get('teachers/classAssignment/fetchSubjects/{class}/{teacher_id}', 'TeacherController@fetchClassSubjects')->name('teachers.class-assignment.fetch-subjects');

// Assignment classes and subjects to teachers post
Route::post('teachers/{teacher}/classAssignment', 'TeacherController@storeClassAssignment')->name('teachers.class-assignment.store');

// Remove teacher from a subject and class
Route::delete('teachers/{teacher}/classAssignment/{classroomSubject}', 'TeacherController@deleteClassAssignment')->name('teachers.class-assignment.destroy');

// Students
Route::resource('students', 'StudentController');

// Export students csv
Route::get('csv/students/export', 'StudentController@export')->name('students.export');

// Export students csv template
Route::get('csv/students/csv-template', 'StudentController@exportCSVTemplate')->name('students.export.csv-template');

// Import students csv
Route::get('csv/students/import', 'StudentController@import')->name('students.import');

// Grades
Route::resource('grades', 'GradeController');

// Show classroom teachers
Route::get('grade/{grade}/classroom/{classroom}/teachers', 'ClassroomController@showTeachers')->name('grades.classroom.teacher.index');

// Show classroom students
Route::get('grade/{grade}/classroom/{classroom}/students', 'ClassroomController@showStudents')->name('grades.classroom.student.index');

// Performance metrics
Route::name('performance.results.')->namespace('Performance')->prefix('/performance/results')->group(function () {
    Route::resource('students', 'StudentController');
    Route::resource('subjects', 'SubjectController');
    Route::name('students.')->prefix('/students/{student}/')->group(function () {
        Route::resource('strands', 'StrandController');
    });

    // Subject performance by substrand
    Route::name('subjects.strand.')->prefix('/subject/{subject}/strand/{strand}/')->group(function () {
        Route::resource('substrands', 'SubstrandController');
    });
});

// Subject Performance metrics
Route::name('performance.subjects.')->namespace('subject')->prefix('/performance/subjects')->group(function () {
    Route::resource('results', 'ResultController');
});

// Ajax fetch selected subjects for chart
Route::get('performance/subjects/chartFilter', 'Performance\SubjectController@ClassSubjectChartScores')->name('performance.subjects.chartFilter');