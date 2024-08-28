<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\FacilitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CircularController;
use App\Http\Controllers\FolderController;


Route::get('/notifications/circulars', [CircularController::class, 'getData'])->name('circulars.index');
Route::get('/notifications/circulars/{id}', [CircularController::class, 'cshow'])->name('circulars.show');
Route::get('/notifications/events', [CircularController::class, 'getDataCircular'])->name('events.index');
Route::get('/notifications/events/{id}', [CircularController::class, 'eshow'])->name('events.show');


// NEW UPDATE

Route::get('/', [PagesController::class, 'index']);
Route::get('/about/vision-and-mission', [PagesController::class, 'about']);
Route::get('/about/message-from-the-founder-and-chairman', [PagesController::class, 'message_from_founder_and_chairman']);
Route::get('/about/message-from-the-principal', [PagesController::class, 'message_from_principal']);
Route::get('/about/message-from-the-secretary', [PagesController::class, 'message_from_secretary']);
Route::get('/about/history', [PagesController::class, 'our_history']);

Route::get('/facilities/{facility}', 'App\Http\Controllers\FacilitiesController@showFacility');
Route::get('/contact', [PagesController::class, 'contact']);

Route::post('/app/sent-message', [PagesController::class, 'sentMessage'])->name('contact.submit');

Route::get('/academics/nursing', [PagesController::class, 'a_nursing']);
Route::get('/academics/diploma-general-nursing-midwifery', [PagesController::class, 'a_dgnm']);
Route::get('/academics/auxiliary-nurse-midwifery', [PagesController::class, 'a_anm']);

Route::get('/admissions', [PagesController::class, 'admissions']);

Route::get('/gallery', [FolderController::class, 'index'])->name('gallery');
Route::get('/folder/{id}', [FolderController::class, 'show'])->name('folder.show');



Route::get('departments/obstetrics-gynaecological-nursing', [PagesController::class, 'ogn']);
Route::get('departments/medical-surgical-nursing', [PagesController::class, 'msn']);
Route::get('departments/community-health-nursing', [PagesController::class, 'chn']);
Route::get('departments/child-health-nursing', [PagesController::class, 'chnDept']);
Route::get('departments/mental-health-nursing', [PagesController::class, 'mhn']);
