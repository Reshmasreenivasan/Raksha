<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\WarriorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Admin Panel APIs

Route::get('adminLogin', [AdminController::class, 'loginCheck']);
Route::get('/adminRegister', [AdminController::class, 'Register']);
Route::post('/adminProfile/{user_id}', [AdminController::class, 'updateProfile']);
Route::post('/adminProfileImage/{user_id}', [AdminController::class, 'UpdateProfilePic']);
Route::delete('/adminProfileImage/{user_id}', [AdminController::class, 'RemoveProfilePic']);
Route::patch('/adminChangePassword/{user_id}', [AdminController::class, 'changePassword']);
Route::get('/adminDownloadImage/{id}', [AdminController::class, 'downloadFile']);
Route::get('/adminProfile/{user_id}', [AdminController::class, 'profileView']);

//FrontEnd APIs

Route::post('/login', [WarriorController::class, 'loginCheck']);
Route::post('/register', [WarriorController::class, 'Register']);
Route::post('/profile/{warrior_id}', [WarriorController::class, 'updateProfile']);
Route::post('/profileImage/{warrior_id}', [WarriorController::class, 'UpdateProfilePic']);
Route::delete('/profileImage/{warrior_id}', [WarriorController::class, 'RemoveProfilePic']);
Route::patch('/changePassword/{warrior_id}', [WarriorController::class, 'changePassword']);
Route::get('/downloadImage/{id}', [WarriorController::class, 'downloadFile']);
Route::get('/profile/{warrior_id}', [WarriorController::class, 'profileView']);