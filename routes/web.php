<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryCochController;
use App\Http\Controllers\Admin\ListCochingController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Student_Contact_Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


Auth::routes();

Route::group(['prefix' => 'admin/'], function (){

    Route::get('/', function () {  return view('login'); });


        // Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('/home');

         Route::get('/logged_out', [HomeController::class, 'logged_out'])->name('logged_out');


        Route::get('/home', [HomeController::class, 'index'])->name('admin/home');

        Route::post('/password.reset', [HomeController::class, 'password_edit'])->name('pass.reset');

        // Route::get('/country', [App\Http\Controllers\CountryController::class, 'contrylist'])->name('country');

        Route::get('/country', [CountryController::class, 'contrylist'])->name('country');

        Route::get('contry/data', [CountryController::class, 'data'])->name('serverSideDataTable');

        Route::post('/flag.upload', [CountryController::class, 'uploadflag'])->name('flag.upload');

        Route::post('/flag.edit.upload', [CountryController::class, 'upload_edit_flag'])->name('flag.edit.upload');

        Route::get('/get_country', [CountryController::class, 'get_data'])->name('get_country');

        Route::get('/deactivate', [CountryController::class, 'deactivate'])->name('deactivate');

        Route::get('/activate', [CountryController::class, 'activate'])->name('activate');

        Route::get('/specialization', [SpecializationController::class, 'specialization'])->name('specialization');

        Route::post('/upload.special', [SpecializationController::class, 'Upload_special'])->name('upload.special');

        Route::get('special/data', [SpecializationController::class, 'special_data'])->name('special_table');

        Route::post('/edit.special', [SpecializationController::class, 'edit_special'])->name('edit.special');

        Route::get('/get_special', [SpecializationController::class, 'get_sp_data'])->name('get_special');

        Route::get('/sp.deactivate', [SpecializationController::class, 'deactivate_special'])->name('sp.deactivate');

        Route::get('/sp.activate', [SpecializationController::class, 'activate_special'])->name('sp.activate');

        Route::get('/institute', [InstituteController::class, 'list_index'])->name('institute');

        Route::get('/institute/add', [InstituteController::class, 'list_add'])->name('ins.add');

        Route::Post('/ins_add', [InstituteController::class, 'upload_ins_list'])->name('ins.list.add');

        Route::get('ins/list/data', [InstituteController::class, 'data_list'])->name('inslisttableTable');

        Route::get('/Ins_deactivate', [InstituteController::class, 'Ins_list_deactivate'])->name('Ins_deactivate');

        Route::get('/Ins_activate', [InstituteController::class, 'Ins_list_activate'])->name('Ins_activate');

        Route::get('/edit-ins-list/{id}', [InstituteController::class, 'list_edit'])->name('ins.edit');

        Route::Post('/ins_edit', [InstituteController::class, 'update_ins_list'])->name('ins.list.edit');

        Route::get('/courses', [CourseController::class, 'course_index'])->name('courses');

        Route::get('/course/add', [CourseController::class, 'course_add'])->name('course.add');

        Route::Post('/course_add', [CourseController::class, 'upload_course_list'])->name('course.list.add.data');

        Route::get('course/list/data', [CourseController::class, 'data_course_list'])->name('courselisttableTable');

        Route::get('/course_deactivate', [CourseController::class, 'course_deactivate'])->name('course_deactivate');

        Route::get('/course_activate', [CourseController::class, 'course_activate'])->name('course_activate');

        Route::get('/edit-course-list/{id}', [CourseController::class, 'course_edit'])->name('ins.edit');

        Route::Post('/course_edit', [CourseController::class, 'edit_course_list'])->name('course.list.edit');

        Route::get('/ccategory', [CategoryCochController::class, 'CategoryCourse'])->name('ccategory');

        Route::post('/add.category', [CategoryCochController::class, 'add_course_cat'])->name('add.course.category');

        Route::get('category/data', [CategoryCochController::class, 'Category_data'])->name('categoryTable');

        Route::get('/category_deactivate', [CategoryCochController::class, 'course_cat_deactivate'])->name('category_deactivate');

        Route::get('/category_activate', [CategoryCochController::class, 'course_cat_activate'])->name('category_activate');

        Route::get('/get_category', [CategoryCochController::class, 'get_cat_data'])->name('get_category');

        Route::post('/category_edit_data', [CategoryCochController::class, 'upload_edit_category'])->name('category_edit_data');

        Route::get('/chighlight', [CategoryCochController::class, 'Course_highlight'])->name('chighlight');

        Route::post('/add.highlight', [CategoryCochController::class, 'upload_highlight'])->name('add.highlight');

        Route::get('highlight/data', [CategoryCochController::class, 'highlight_data'])->name('highlightTable');

        Route::get('/highlight_deactivate', [CategoryCochController::class, 'highlight_deactivate'])->name('highlight_deactivate');

        Route::get('/highlight_activate', [CategoryCochController::class, 'highlight_activate'])->name('highlight_activate');

        Route::get('/get_highlight', [CategoryCochController::class, 'get_highlight_data'])->name('get_highlight');

        Route::post('/highlight_edit_data', [CategoryCochController::class, 'upload_edit_highlight'])->name('highlight_edit_data');

        Route::get('/listcoaching', [ListCochingController::class, 'List_coching'])->name('listcoaching');

        Route::get('/list/coching/add', [ListCochingController::class, 'coching_add'])->name('list.coching.add');

        Route::get('coching/list/data', [ListCochingController::class, 'show_coching_data'])->name('coching_listtable_Table');

        Route::Post('/coching_data_add', [ListCochingController::class, 'coching_data_list'])->name('coching.list.add');

        Route::get('/coching_deactivate', [ListCochingController::class, 'coching_list_deactivate'])->name('coching_deactivate');

        Route::get('/coching_activate', [ListCochingController::class, 'coching_list_activate'])->name('coching_activate');

        Route::Post('/coching_data_edit', [ListCochingController::class, 'coching_data_edit_list'])->name('coching.list.edit');

         Route::get('/edit-coching-list/{id}', [ListCochingController::class, 'list_coching_edit'])->name('coching.list.detail');

        Route::post('/add.outline', [ListCochingController::class, 'outline_add'])->name('add.outline');

        Route::post('/add.outline.topic', [ListCochingController::class, 'outline_add_topic'])->name('add.outline.topic');

        Route::get('/add-course-outline-list/{id}', [ListCochingController::class, 'list_course_outline'])->name('course.add.outline');

        Route::get('/Student_index', [Student_Contact_Controller::class, 'Student_index'])->name('Student_index');

        Route::get('/student_details', [Student_Contact_Controller::class, 'Student_data'])->name('student_details');

        Route::get('/student/join', [Student_Contact_Controller::class, 'join_student_add'])->name('student.join.add');

        Route::get('/fetch_class_detail', [Student_Contact_Controller::class, 'fetch_class_name'])->name('fetch_class_detail');

         Route::Post('/join_student.add', [Student_Contact_Controller::class, 'join_student_detail'])->name('join_student.add');

         Route::get('/student_delete', [Student_Contact_Controller::class, 'student_data_delete'])->name('student_delete');

         Route::get('/enquiry', [Student_Contact_Controller::class, 'contact_index'])->name('enquiry');

         Route::get('/enquiry_details', [Student_Contact_Controller::class, 'Enquiry_data'])->name('enquiry_details');

         Route::get('/enqiry_delete', [Student_Contact_Controller::class, 'enqiry_data_delete'])->name('enqiry_delete');

});















