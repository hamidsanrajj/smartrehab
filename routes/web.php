<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AppointmentController;

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
//     return view('index');
// });


Route::view('/','index')->name('home');
Route::view('/physiotherapy','include/services/physiotherapy')->name('physiotherapy');
Route::view('/doctor-visit','include/services/doctor-visit')->name('doctor-visit');
Route::view('/medicine-store','include/services/medicine-store')->name('medicine-store');
Route::view('/neutritionist','include/services/neutritionist')->name('neutritionist');
Route::view('/nursing-care','include/services/nursing-care')->name('nursing-care');
Route::view('/patient-attendant','include/services/patient-attendant')->name('patient-attendant');
Route::view('/psychotherapy','include/services/psychotherapy')->name('psychotherapy');

Route::view('/about-us','include/pages/about-us')->name('about-us');
Route::view('/services','include/pages/services')->name('services');
Route::view('/contact-us','include/pages/contact-us')->name('contact-us');
Route::view('/book-appointment','include/pages/book-appointment')->name('book-appointment');
Route::view('/news-and-events','include/pages/news-and-events')->name('news-and-events');
Route::view('/physio-packages','include/pages/physio-packages')->name('physio-packages');
Route::view('/our-team','include/pages/our-team')->name('our-team');
Route::view('/privacy-policy','include/pages/privacy-policy')->name('privacy-policy');
Route::view('/terms-and-condition','include/pages/terms-and-condition')->name('terms-and-condition');

Route::view('/remove-back-pain-while-working-on-physio','include/blogs/remove-back-pain')->name('remove-back-pain');
Route::view('/benefits-of-weekly-physiotherapy-sessions','include/blogs/benefits-of-weekly-physiotherapy-session')->name('benefits-of-weekly-physiotherapy');
Route::view('/regular-exercise-can-show-ageing-process','include/blogs/regular-exercise')->name('regular-exercise');


// Route::get('/query', [ContactController::class, 'index'])->name('query');
// Route::post('/query', [ContactController::class, 'query'])->name('query');


Route::get('/query-appointment', [AppointmentController::class, 'index'])->name('query');
Route::post('/query-appointment', [AppointmentController::class, 'query'])->name('query');





