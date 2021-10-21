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

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'AdminLTE 3 | Dashboard'
    ]);
});
Route::get('/dashboard2', function () {
    return view('dashboard2', [
        'title' => 'AdminLTE 3 | Dashboard 2'
    ]);
});
Route::get('/dashboard3', function () {
    return view('dashboard3', [
        'title' => 'AdminLTE 3 | Dashboard 3'
    ]);
});



Route::get('/widgets', function () {
    return view('pages/widgets', [
        'title' => 'AdminLTE 3 | Widgets'
    ]);
});
Route::get('/calender', function () {
    return view('pages/calender', [
        'title' => 'AdminLTE 3 | Calender'
    ]);
});
Route::get('/gallery', function () {
    return view('pages/gallery', [
        'title' => 'AdminLTE 3 | Gallery'
    ]);
});
Route::get('/kanban', function () {
    return view('pages/kanban', [
        'title' => 'AdminLTE 3 | Kanban'
    ]);
});


// Charts

Route::get('/chartjs', function () {
    return view('pages/charts/chartjs', [
        'title' => 'AdminLTE 3 | Chart Js'
    ]);
});
Route::get('/uplot', function () {
    return view('pages/charts/uplot', [
        'title' => 'AdminLTE 3 | uPlot'
    ]);
});
Route::get('/inline', function () {
    return view('pages/charts/inline', [
        'title' => 'AdminLTE 3 | Inline'
    ]);
});
Route::get('/flot', function () {
    return view('pages/charts/flot', [
        'title' => 'AdminLTE 3 | Flot'
    ]);
});



// Example
