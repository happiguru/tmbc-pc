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

// Building Cleaning routes

Route::get('cleaning-services/building-cleaning-service', function()
{
    return View::make('cleaning-services.building-cleaning-services');
});

Route::get('cleaning-services/office-cleaning-services', function()
{
    return View::make('cleaning-services.office-cleaning-services');
});

Route::get('cleaning-services/banks-cleaning-services', function()
{
    return View::make('cleaning-services.banks-cleaning-services');
});

Route::get('cleaning-services/deep-cleaning-services', function()
{
    return View::make('cleaning-services.deep-cleaning-services');
});

Route::get('cleaning-services/kitchen-cleaning-services', function()
{
    return View::make('cleaning-services.kitchen-cleaning-services');
});

Route::get('cleaning-services/house-cleaning-services', function()
{
    return View::make('cleaning-services.house-cleaning-services');
});

Route::get('cleaning-services/school-cleaning-services', function()
{
    return View::make('cleaning-services.school-cleaning-services');
});

Route::get('cleaning-services/nursery-cleaning-services', function()
{
    return View::make('cleaning-services.nursery-cleaning-services');
});

Route::get('cleaning-services/floor-waxing-and-marble-care', function()
{
    return View::make('cleaning-services.floor-waxing-and-marble-care');
});

Route::get('cleaning-services/sofa-shampooing', function()
{
    return View::make('cleaning-services.sofa-shampooing');
});

Route::get('cleaning-services/medical-cleaning-services', function()
{
    return View::make('cleaning-services.medical-cleaning-services');
});

Route::get('cleaning-services/carpet-cleaning', function()
{
    return View::make('cleaning-services.carpet-cleaning');
});

Route::get('cleaning-services/water-tank-cleaning', function()
{
    return View::make('cleaning-services.water-tank-cleaning');
});

Route::get('cleaning-services/shopping-mall-cleaning-services', function()
{
    return View::make('cleaning-services.shopping-mall-cleaning-services');
});

Route::get('cleaning-services/disinfection-and-sanitization-services', function()
{
    return View::make('cleaning-services.disinfection-and-sanitization-services');
});

Route::get('cleaning-services/hospitality-cleaning-services', function()
{
    return View::make('cleaning-services.hospitality-cleaning-services');
});

Route::get('cleaning-services/carpet-shampooing', function()
{
    return View::make('cleaning-services.carpet-shampooing');
});

Route::get('cleaning-services/restaurant-cleaning-services', function()
{
    return View::make('cleaning-services.restaurant-cleaning-services');
});

Route::get('cleaning-services/sports-leisure-cleaning-services', function()
{
    return View::make('cleaning-services.sports-leisure-cleaning-services');
});

// Pest control routes

Route::get('pest-control-services/bed-bug-control', function()
{
    return View::make('pest-control-services.bed-bug-control');
});

Route::get('pest-control-services/cockroach-control', function()
{
    return View::make('pest-control-services.cockroach-control');
});
Route::get('pest-control-services/rat-control', function()
{
    return View::make('pest-control-services.rat-control');
});
Route::get('pest-control-services/termite-control', function()
{
    return View::make('pest-control-services.termite-control');
});
Route::get('pest-control-services/snake-control', function()
{
    return View::make('pest-control-services.snake-control');
});
Route::get('pest-control-services/ants-control', function()
{
    return View::make('pest-control-services.ants-control');
});
Route::get('pest-control-services/bird-control', function()
{
    return View::make('pest-control-services.bird-control');
});
Route::get('pest-control-services/control-of-flying-insect-pests', function()
{
    return View::make('pest-control-services.control-of-flying-insect-pests');
});
Route::get('pest-control-services/bees-control', function()
{
    return View::make('pest-control-services.bees-control');
});
Route::get('pest-control-services/spider-control', function()
{
    return View::make('pest-control-services.spider-control');
});
Route::get('pest-control-services/post-construction-anti-termite-control', function()
{
    return View::make('pest-control-services.post-construction-anti-termite-control');
});


