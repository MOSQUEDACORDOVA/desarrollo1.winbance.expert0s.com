<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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






    Route::get('/',[HomeController::class, 'index'])->name('home.index');

    Route::get('/about',[HomeController::class, 'about'])->name('home.about');
    Route::get('/trading',[HomeController::class, 'trading'])->name('home.trading');
    Route::get('/faq',[HomeController::class, 'faq'])->name('home.faq');
    Route::get('/platform',[HomeController::class, 'platform'])->name('home.platform');
    Route::get('/leaderboard',[HomeController::class, 'leaderboard'])->name('home.leaderboard');
    Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');
    Route::get('/conditions',[HomeController::class, 'conditions'])->name('home.conditions');
    Route::get('/risks',[HomeController::class, 'risks'])->name('home.risks');
    Route::get('/privacy',[HomeController::class, 'privacy'])->name('home.privacy');
    Route::get('/blogDetails',[HomeController::class, 'blogDetails'])->name('home.blogDetails');
    Route::get('/faqDetails',[HomeController::class, 'faqDetails'])->name('home.faqDetails');
    Route::get('/partners',[HomeController::class, 'partners'])->name('home.partners');
    Route::get('/payment',[HomeController::class, 'payment'])->name('home.payment');
    Route::get('/blog1',[HomeController::class, 'blog1'])->name('home.blog1');
    Route::get('/blog2',[HomeController::class, 'blog2'])->name('home.blog2');
    Route::get('/blog3',[HomeController::class, 'blog3'])->name('home.blog3');
    Route::get('/blog4',[HomeController::class, 'blog4'])->name('home.blog4');
    Route::get('/blog5',[HomeController::class, 'blog5'])->name('home.blog5');
    Route::get('/blog6',[HomeController::class, 'blog6'])->name('home.blog6');
    Route::get('/blog7',[HomeController::class, 'blog7'])->name('home.blog7');
    Route::get('/blog8',[HomeController::class, 'blog8'])->name('home.blog8');
    Route::get('/blog9',[HomeController::class, 'blog9'])->name('home.blog9');
    Route::get('/blog10',[HomeController::class, 'blog10'])->name('home.blog10');
    Route::get('/blog11',[HomeController::class, 'blog11'])->name('home.blog11');
    Route::get('/blog12',[HomeController::class, 'blog12'])->name('home.blog12');
    Route::get('/blog13',[HomeController::class, 'blog13'])->name('home.blog13');
    Route::get('/blog14',[HomeController::class, 'blog14'])->name('home.blog14');
    Route::get('/blog15',[HomeController::class, 'blog15'])->name('home.blog15');
    Route::get('/blog16',[HomeController::class, 'blog16'])->name('home.blog16');
    Route::get('/blog17',[HomeController::class, 'blog17'])->name('home.blog17');

  /**Modified by @jochdev */
    Route::get('/landing',[LandingController::class, 'index'])->name('landing.index');
   /****/


    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

    Auth::routes();
    // Route::post('/mail',[HomeController::class, 'contact'])->name('contact');

    Route::post( '/contact', function (){
        $data = request(['name','country','phone', 'email', 'message']);
        \Illuminate\Support\Facades\Mail::to('contact@winbance.com')
        ->send (new App\Mail\ContactUs($data));

        return redirect('/contact')
        ->with('flash','Message Sent Successfully');

    });




/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
