<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\postController;
use App\Http\Controllers\userController;
use App\Http\Controllers\E_videoController;
use App\Http\Controllers\webfunctionController;

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

Route::get('/text', function () {
    return view('pages.videoUpload');
});

route::get('/textdemo',[webfunctionController::class,'text']);




Route::get('/e-learning',[pageController::class,'Elearning']);
route::get('/videoUpload',[E_videoController::class,'index'])->middleware('auth');

route::post('/uploadvideo',[E_videoController::class,'create']);
  


Route::get('/',[pageController::class, 'index'])->name('home');
Route::get('/file',[pageController::class, 'file']);
Route::get('/view/{id}/description',[pageController::class, 'viewdesc']);
Route::get('/login',[pageController::class, 'login']);
Route::get('/profile',[pageController::class, 'profile'])->middleware('auth');
Route::get('/register',[pageController::class, 'register']);
// Route::get('/adminRegister',[pageController::class, 'adminRegister']);

Route::get('/blog',[pageController::class, 'blog']);
Route::get('/postForm',[postController::class, 'index']);




route::post('/post/create',[postController::class,'create'])->middleware('auth');
route::get('/show/{id}/blog',[postController::class,'show']);
route::get('/postmanage',[postController::class,'postmanage'])->middleware('auth');
route::get('/post/{id}/edit',[postController::class,'edit'])->middleware('auth');
route::put('/posts/{id}/update',[postController::class,'update'])->middleware('auth');
route::post('/posts/delete',[postController::class,'destroy'])->middleware('auth');




Route::get('/fileupload',[FileController::class, 'index'])->middleware('auth');
Route::post('/getCategories',[FileController::class, 'getCategories']);
Route::get('/school',[FileController::class, 'getfile']);
route::post('/createpost',[FileController::class,'create']);
route::put('/post/{id}/update',[FileController::class,'update']);
route::delete('/file/delete',[FileController::class,'destroy']);
route::post('/file/SelectedDelete',[FileController::class,'SelectedDelete']);
route::get('/getdbfile',[FileController::class,'getdbfile']);
route::get('/getdbfile2',[FileController::class,'getdbfile2']);
route::get('/searchfile',[FileController::class,'filtersearch']);
route::get('/dbfile',[FileController::class,'dbfile']);
route::get('/manage',[FileController::class,'manage'])->middleware('auth');
route::get('/file/{id}/edit',[FileController::class,'edit']);





route::get('/logout',[userController::class, 'logout'])->middleware('auth');
route::post('/authenticate',[userController::class, 'authenticate'])->middleware('guest');
route::post('/admincreate',[userController::class, 'Create']);
route::post('/user/destroy',[userController::class, 'destroy'])->middleware('auth');
route::post('/user/updateprofile',[userController::class, 'updateprofile'])->middleware('auth');






route::get('/saveDraft/{id}',[webfunctionController::class,'saveDraft']);
route::get('/usermanage',[webfunctionController::class,'usermanage'])->middleware('auth');
route::get('/draft',[webfunctionController::class,'viewDraft'])->middleware('auth');
route::delete('/draft/remove/{id}',[webfunctionController::class,'removeDraft'])->middleware('auth');