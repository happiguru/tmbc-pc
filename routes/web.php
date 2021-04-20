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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about-us', function()
{
    return View::make('pages.about-us');
});
Route::get('gallery', function()
{
    return View::make('pages.gallery');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
Route::get('faq', function()
{
    return View::make('pages.faq');
});
Route::get('clients', function()
{
    return View::make('pages.clients');
});

Route::get('cleaning-services/building-cleaning-services', function()
{
    return View::make('cleaning-services.building-cleaning-services');
});

