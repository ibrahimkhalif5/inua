<?php


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Auth\VerificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// normal user without registration
Route::get('/',[HomeController::class,'home']);
Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/gallery/view',[HomeController::class,'gallery']);
Route::get('/contact',[HomeController::class,'contact']);
Route::post('/contact-us',[HomeController::class,'contactus']);


Auth::routes(['verify' => true]);

// Admin section .only admin and super admin
Route::group(['middleware' => ['auth', 'verified',AdminMiddleware::class]], function () {

    Route::get('/check-idno/{idno}', [AdminController::class,'checkIdno'])->name('idnumber');

    Route::get('/admin/dashboard', [AdminController::class,'index']);
    Route::get('/user/home', [AdminController::class,'userhome']);

    Route::get('/admin/opportunities', [AdminController::class,'create']);
    Route::post('/admin/opportunities', [AdminController::class,'store']);
    Route::get('/admin/opportunities/view', [AdminController::class,'view']);
    Route::get('/admin/opportunities/edit/{id}', [AdminController::class,'jobedit']);
    Route::put('/admin/opportunities/update/{id}', [AdminController::class,'jobupdate']);

    Route::get('/fetch-careers', [AdminController::class,'fetchCareers']);


    // application

    Route::get('/user/application', [AdminController::class,'application']);
    Route::post('user/application/create', [AdminController::class,'appstore']);
    Route::get('user/application/edit/{id}', [AdminController::class,'appview']);
    Route::put('user/application/update/{id}', [AdminController::class,'appupdate']);
   
    
    Route::get('/admin/gallery', [AdminController::class,'galleryview']);
    Route::post('/admin/gallery', [AdminController::class,'gallery']);
    Route::get('/admin/gallery/add', [AdminController::class,'galleryadd']);
    Route::get('/admin/gallery/edit/{id}', [AdminController::class,'galleryedit']);
    Route::put('/admin/gallery/update/{id}', [AdminController::class,'galleryupdate']);
    Route::get('/admin/gallery/delete/{id}', [AdminController::class,'galleryDelete']);
  



    Route::get('/admin/partner', [AdminController::class,'partner']);
    Route::get('/admin/partner/add', [AdminController::class,'partneradd']);
    Route::post('/admin/partner', [AdminController::class,'partnerstore']);
    Route::get('/admin/partner/edit/{id}', [AdminController::class,'partneredit']);
    Route::get('/admin/partner/delete/{id}', [AdminController::class,'partnerdelete']);
    Route::put('/admin/partner/update/{id}', [AdminController::class,'partnerupdate']);
    
    Route::get('/admin/add/users', [AdminController::class,'adduser']);
    Route::get('/admin/users', [AdminController::class,'viewuser']);
    Route::post('/admin/users', [AdminController::class,'userstore']);
    Route::get('/admin/user/role/{id}', [AdminController::class,'userview']);
    Route::put('/admin/user/update/{id}', [AdminController::class,'usersupdate']);
    Route::get('/admin/applicant/CV/{id}', [AdminController::class,'cv']);
   
    // Report links
    Route::get('/admin/youth/report', [AdminController::class,'youthregistration']);
    Route::get('/admin/postgraduate/report', [AdminController::class,'postg']);
    Route::get('/admin/undergraduate/report', [AdminController::class,'underg']);
    Route::get('/admin/college/report', [AdminController::class,'college']);
    Route::get('/admin/vocational/report', [AdminController::class,'vocational']);
    Route::get('/admin/secondary/report', [AdminController::class,'kcse']);
    Route::get('/admin/primary/report', [AdminController::class,'KCPE']);
    Route::get('/admin/madarasa/report', [AdminController::class,'madarasa']);
});
// Admin section ends here