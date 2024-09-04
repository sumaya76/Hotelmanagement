<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.index');
});
route:: get('/',[AdminController::class,'home']);

route:: get('/home',[AdminController::class,'index'])->name('home');

route:: get('/create_room',[AdminController::class,'create_room']);
route:: post('/add_room',[AdminController::class,'add_room']);
route:: get('/view_room',[AdminController::class,'view_room']);
route::get('/room_delete/{id}',[AdminController::class,'room_delete']);
route::get('/room_update/{id}',[AdminController::class,'room_update']);
route::post('/edit_room/{id}',[AdminController::class,'edit_room']);
route::get('/room_details/{id}',[HomeController::class,'room_details']);
route::Post('/add_booking/{id}',[HomeController::class,'add_booking']);
route::get('/bookings',[AdminController::class,'bookings']);
route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);
route::get('/approve_booking/{id}',[AdminController::class,'approve_booking']);
route::get('/reject_booking/{id}',[AdminController::class,'reject_booking']);
route::get('/view_gallery',[AdminController::class,'view_gallery']);
route::post('/upload_gallary',[AdminController::class,'upload_gallary']);
route::get('/delete_gallary/{id}',[AdminController::class,'delete_gallary']);
route::post('/contact',[HomeController::class,'contact']);
route::get('/all_messages',[AdminController::class,'all_messages']);
route::get('/send_email/{id}',[AdminController::class,'send_email']);
route::post('/mail/{id}',[AdminController::class,'mail']);
route::get('/our_rooms',[HomeController::class,'our_rooms']);
route::get('/hotel_gallary',[HomeController::class,'hotel_gallary']);
route::get('/contact_us',[HomeController::class,'contact_us']);
