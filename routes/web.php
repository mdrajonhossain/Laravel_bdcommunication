<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('main');

Route::get('/MC', [App\Http\Controllers\SmtpsController::class, 'messagestatus'])->name('messagestatus');
Route::get('/MCCom', [App\Http\Controllers\SmtpsController::class, 'MCCom'])->name('MCCom');
Route::get('/UC', [App\Http\Controllers\SmtpsController::class, 'userstatus'])->name('userstatus');
Route::get('/limit', [App\Http\Controllers\SmtpsController::class, 'limit'])->name('limit');
Route::get('/from/{id}', [App\Http\Controllers\EmailListController::class, 'from'])->name('from');
Route::post('/from_user_post/{id}', [App\Http\Controllers\EmailListController::class, 'from_user_post'])->name('from_user_post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/Users_list', [App\Http\Controllers\UserController::class, 'Users_list'])->name('Users_list');
Route::get('/user_make', [App\Http\Controllers\UserController::class, 'user_make'])->name('user_make');
Route::post('/user_post', [App\Http\Controllers\UserController::class, 'user_post'])->name('user_post');
Route::get('/user_edit/{id}', [App\Http\Controllers\UserController::class, 'user_edit'])->name('user_edit');
Route::post('/user_edit_post/{id}', [App\Http\Controllers\UserController::class, 'user_edit_post'])->name('user_edit_post');
Route::get('/delete_user/{id}', [App\Http\Controllers\UserController::class, 'delete_user'])->name('delete_user');
Route::get('/loginAsUser/{id}', [App\Http\Controllers\UserController::class, 'loginAsUser'])->name('loginAsUser');


Route::get('/invoice', [App\Http\Controllers\UserController::class, 'invoice'])->name('invoice');
Route::get('/invoice_make', [App\Http\Controllers\UserController::class, 'invoice_make'])->name('invoice_make');
Route::post('/invoice_post', [App\Http\Controllers\UserController::class, 'invoice_post'])->name('invoice_post');
Route::get('/invoice_view/{id}', [App\Http\Controllers\UserController::class, 'invoice_view'])->name('invoice_view');
Route::post('/invoice_edit_post/{id}', [App\Http\Controllers\UserController::class, 'invoice_edit_post'])->name('invoice_edit_post');
Route::get('/invoice_view_admin', [App\Http\Controllers\UserController::class, 'invoice_view_admin'])->name('invoice_view_admin');
Route::get('/invoice_admin_edit/{id}', [App\Http\Controllers\UserController::class, 'invoice_admin_edit'])->name('invoice_admin_edit');
Route::post('/invoice_admin_edit_post/{id}', [App\Http\Controllers\UserController::class, 'invoice_admin_edit_post'])->name('invoice_admin_edit_post');

Route::post('/invoice_edit_post_user/{id}', [App\Http\Controllers\UserController::class, 'invoice_edit_post_user'])->name('invoice_edit_post_user');
Route::get('/my_profile', [App\Http\Controllers\UserController::class, 'my_profile'])->name('my_profile');
Route::post('/my_profile_post', [App\Http\Controllers\UserController::class, 'my_profile_post'])->name('my_profile_post');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
Route::post('/changePassword_post', [App\Http\Controllers\UserController::class, 'changePassword_post'])->name('changePassword_post');
Route::get('/out', [App\Http\Controllers\UserController::class, 'out'])->name('out');

Route::get('/Email_list', [App\Http\Controllers\EmailListController::class, 'Email_list'])->name('Email_list');
Route::get('/Email_list_make', [App\Http\Controllers\EmailListController::class, 'Email_list_make'])->name('Email_list_make');
Route::post('/Email_list_post', [App\Http\Controllers\EmailListController::class, 'Email_list_post'])->name('Email_list_post');
Route::get('/Email_list_delall', [App\Http\Controllers\EmailListController::class, 'Email_list_delall'])->name('Email_list_delall');
Route::get('/Email_edit/{id}', [App\Http\Controllers\EmailListController::class, 'Email_edit'])->name('Email_edit');
Route::post('/Email_edit_post/{id}', [App\Http\Controllers\EmailListController::class, 'Email_edit_post'])->name('Email_edit_post');
Route::get('/Email_del/{id}', [App\Http\Controllers\EmailListController::class, 'Email_del'])->name('Email_del');
Route::post('/txt_emails', [App\Http\Controllers\EmailListController::class, 'txt_emails'])->name('txt_emails');
Route::get('/backup', [App\Http\Controllers\EmailListController::class, 'backup'])->name('backup');
Route::get('/from_list', [App\Http\Controllers\EmailListController::class, 'from_list'])->name('from_list');
Route::get('/from_make', [App\Http\Controllers\EmailListController::class, 'from_make'])->name('from_make');
Route::post('/from_post', [App\Http\Controllers\EmailListController::class, 'from_post'])->name('from_post');


Route::get('/group_list', [App\Http\Controllers\EmailListController::class, 'group_list'])->name('group_list');
Route::get('/group_make', [App\Http\Controllers\EmailListController::class, 'group_make'])->name('group_make');
Route::post('/group_post', [App\Http\Controllers\EmailListController::class, 'group_post'])->name('group_post');
Route::get('/group_edit/{id}', [App\Http\Controllers\EmailListController::class, 'group_edit'])->name('group_edit');
Route::post('/group_edit_post/{id}', [App\Http\Controllers\EmailListController::class, 'group_edit_post'])->name('group_edit_post');
Route::get('/group_delete/{id}', [App\Http\Controllers\EmailListController::class, 'group_delete'])->name('group_delete');

Route::get('/Smtp_list', [App\Http\Controllers\SmtpsController::class, 'Smtp_list'])->name('Smtp_list');
Route::get('/Smtp_list_make', [App\Http\Controllers\SmtpsController::class, 'Smtp_list_make'])->name('Smtp_list_make');
Route::post('/Smtp_list_post', [App\Http\Controllers\SmtpsController::class, 'Smtp_list_post'])->name('Smtp_list_post');
Route::get('/Smtp_Sent', [App\Http\Controllers\SmtpsController::class, 'Smtp_Sent'])->name('Smtp_Sent');
Route::get('/Smtp_edit/{id}', [App\Http\Controllers\SmtpsController::class, 'Smtp_edit'])->name('Smtp_edit');
Route::post('/Smtp_edit_post/{id}', [App\Http\Controllers\SmtpsController::class, 'Smtp_edit_post'])->name('Smtp_edit_post');
Route::get('/Smtp_delete/{id}', [App\Http\Controllers\SmtpsController::class, 'Smtp_delete'])->name('Smtp_delete');
Route::get('/Smtp_status/{id}', [App\Http\Controllers\SmtpsController::class, 'Smtp_status'])->name('Smtp_status');
Route::get('/sender_info', [App\Http\Controllers\SmtpsController::class, 'sender_info'])->name('sender_info');
Route::post('/sender_info_post', [App\Http\Controllers\SmtpsController::class, 'sender_info_post'])->name('sender_info_post');

Route::get('/Test_Smtp/{id}', [App\Http\Controllers\SmtpsController::class, 'Test_Smtp'])->name('Test_Smtp');
Route::post('/Test_Smtp_post', [App\Http\Controllers\SmtpsController::class, 'Test_Smtp_post'])->name('Test_Smtp_post');
Route::get('/Test_Camp/{id}', [App\Http\Controllers\SmtpsController::class, 'Test_Camp'])->name('Test_Camp');
Route::post('/Test_Camp_post', [App\Http\Controllers\SmtpsController::class, 'Test_Camp_post'])->name('Test_Camp_post');

Route::get('/track-email/{emailId}', [App\Http\Controllers\SmtpsController::class, 'trackEmail'])->name('track.email');

Route::get('/campaign', [App\Http\Controllers\MessageController::class, 'campaign'])->name('campaign');
Route::get('/campaign_make', [App\Http\Controllers\MessageController::class, 'campaign_make'])->name('campaign_make');
Route::post('/campaign_post', [App\Http\Controllers\MessageController::class, 'campaign_post'])->name('campaign_post');
Route::get('/campaign_edit/{id}', [App\Http\Controllers\MessageController::class, 'campaign_edit'])->name('campaign_edit');
Route::post('/campaign_edit_post/{id}', [App\Http\Controllers\MessageController::class, 'campaign_edit_post'])->name('campaign_edit_post');
Route::get('/campaign_delete/{id}', [App\Http\Controllers\MessageController::class, 'campaign_delete'])->name('campaign_delete');
Route::get('/campaign_report/{id}', [App\Http\Controllers\MessageController::class, 'campaign_report'])->name('campaign_report');
Route::get('/image_del/{id}', [App\Http\Controllers\MessageController::class, 'image_del'])->name('image_del');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


Route::get('/clear', function() {

Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});


Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});


