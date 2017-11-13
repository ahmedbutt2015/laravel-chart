<?php

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


use ConsoleTVs\Charts\Facades\Charts;

Route::get('/', function (){

    $a[0] = Charts::create('temp', 'canvas-gauges')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->values([65,0,100])
        ->responsive(false)
        ->height(500)
        ->width(200);

    $a[1] = Charts::create('gauge', 'canvas-gauges')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->values([65,0,100])
        ->responsive(false)
        ->height(300)
        ->width(0);

    $c = Charts::multi('line', 'highcharts')
        ->title('My nice chart')
        ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
        ->colors(['#2196F3', '#F44336'])
        ->dataset('John', [3, 4, 3, 5, 4, 10, 12])
        ->dataset('Jane',  [1, 3, 4, 3, 3, 5, 4])
        ->dataset('sJane',  [3, 2, 1, 5, 9, 5, 4])
        ->dataset('asd',  [5, 6, 8, 7, 3, 5, 4]);
    return view('d3')->with('c',$c)->with('a',$a);
});
