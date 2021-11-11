<?php

use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/', 'Homecontroller@home');
Route::get('/event/detail/{event}', 'Homecontroller@event');
Route::get('/about', 'Homecontroller@about');
Route::get('/about/hitara/{aboutHitara}', 'Homecontroller@about');
Route::get('/gallery', 'Homecontroller@gallery');
Route::get('/contact', 'Homecontroller@contact');
Route::get('/recipe', 'Homecontroller@recipe');
Route::get('/recipe/detail/{recipe}', 'Homecontroller@detail_recipe');
Route::post('/contact/message', 'Homecontroller@message');
Route::get('/brochure', 'Homecontroller@brochure');

//Admin
Route::get('/backend-panel', 'Authcontroller@login')->name('login');
Route::get('/backend-panel/logout', 'Authcontroller@logout');
Route::post('/postlogin', 'Authcontroller@postlogin');
Route::group(['middleware' => 'auth'], function(){
    //Dashboard
    Route::get('/backend-panel/auth', 'Admincontroller@dashboard');

    //About Hitara
    Route::get('/backend-panel/about/hitara', 'Admincontroller@about_hitara');
    Route::get('/backend-panel/about/hitara/{aboutHitara}/detail', 'Admincontroller@detail_hitara');
    Route::get('/backend-panel/about/hitara/{aboutHitara}/edit', 'Admincontroller@edit_hitara');
    Route::post('/backend-panel/about/hitara/{aboutHitara}/update', 'Admincontroller@update_hitara');
    Route::post('/backend-panel/about/hitara/post', 'Admincontroller@postabout_hitara');
    Route::delete('/backend-panel/about/hitara/{aboutHitara}/delete', 'Admincontroller@delete_hitara');
    
    //Gallery
    Route::get('/backend-panel/gallery', 'Admincontroller@gallery');
    Route::post('/backend-panel/postgallery', 'Admincontroller@postgallery');
    Route::delete('/backend-panel/gallery/{gallery}/delete', 'Admincontroller@delete_gallery');

    //Event
    Route::get('backend-panel/event', 'Admincontroller@event');
    Route::post('backend-panel/postevent', 'Admincontroller@postevent');
    Route::get('backend-panel/event/{event}/detail', 'Admincontroller@detail_event');
    Route::delete('backend-panel/event/{event}/delete', 'Admincontroller@delete_event');
    Route::get('backend-panel/event/{event}/edit', 'Admincontroller@edit_event');
    Route::post('backend-panel/event/{event}/update', 'Admincontroller@update_event');

    //Recipe
    Route::get('/backend-panel/recipe', 'Admincontroller@recipe');
    Route::post('/backend-panel/postrecipe', 'Admincontroller@postrecipe');
    Route::get('/backend-panel/recipe/{recipe}/detail', 'Admincontroller@detail_recipe');
    Route::delete('/backend-panel/recipe/{recipe}/delete', 'Admincontroller@delete_recipe');
    Route::get('/backend-panel/recipe/{recipe}/edit', 'Admincontroller@edit_recipe');
    Route::post('/backend-panel/recipe/{recipe}/update', 'Admincontroller@update_recipe');

    //Contact Us
    Route::get('/backend-panel/contactUs', 'Admincontroller@contactUs');
    Route::delete('/backend-panel/contactUs/{contactUs}/delete', 'Admincontroller@delete_contact');
    Route::post('/detail', 'Admincontroller@detail_contact');

    //Setting
    Route::get('/backend-panel/setting', 'Admincontroller@setting');

    //Contact
    Route::post('/backend-panel/setcontact/{ourContact}', 'Admincontroller@setcontact');

    //Store
    Route::post('/backend-panel/setstore/{store}', 'Admincontroller@setstore');
    
    //Banner
    Route::post('/backend-panel/setbanner/{banner}', 'Admincontroller@setbanner');

    //Video
    Route::post('/backend-panel/setvideo/{video}', 'Admincontroller@setvideo');

    //About Garlic
    Route::post('/backend-panel/about/garlic/{aboutGarlic}', 'Admincontroller@setabout_garlic');
});
