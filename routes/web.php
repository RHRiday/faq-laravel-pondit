<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\View\ViewController;
use Illuminate\Support\Facades\Auth;

//=============View site=================

Route::get('/', [ViewController::class, 'index']);

// Route::get('/search-faq/{search}', [ViewController::class, 'faq_search']);

//=============Admin site=================
Auth::routes();
Route::get('/home', [FAQController::class, 'index']);
Route::get('/home/manage', [FAQController::class, 'manage']);

Route::post('/add_faq', [FAQController::class, 'faq_add']);
Route::post('/update_faq', [FAQController::class, 'faq_update']);
Route::get('/edit_faq/{id}', [FAQController::class, 'faq_edit']);
Route::get('/delete_faq/{id}', [FAQController::class, 'faq_delete']);

Route::get('/unpublished_faq/{id}', [FAQController::class, 'unpublished_faq']);

Route::get('/published_faq/{id}', [FAQController::class, 'published_faq']);

Route::get('/priority-set/', [FAQController::class, 'priority_set']);
