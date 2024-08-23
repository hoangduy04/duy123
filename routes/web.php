<?php

use App\Events\UserRegisterd;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Jobs\SendMail;
use App\Models\Post;
use App\Models\User;
use App\Mail\PostPublished;
use App\DataTables\UsersDataTable;
//use App\Models\Customer;
//use App\Models\People;
use App\Models\NguyenHoangDuy;
use App\Models\Address;
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
Route::get('/nguyenhoangduy', [PeopleController::class, 'index']);
Route::get('/address', [AddressController::class, 'index']);
// Route::get('/', [PeopleController::class, 'index']);
//RRoute::get('/', function () {
    //$customers = Customer::all();
    //$nguyenhoangduy = People::all();

    //return view('ashop', ['nguyenhoangduy' => $nguyenhoangduy]); 
//});
