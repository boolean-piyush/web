<?php
use App\Data;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exams/{exam}', 'RouteController@exam_router' );
Route::get('/category/{exam}', 'RouteController@dept_router' );

// [START] Routes for database management

$str = url('/');

if (str_is($str, 'https://localhost')) {

    Route::get('/list-exams', 'ExamController@index');      //shows list of all exams from table
    Route::get('/today-updation', 'ExamController@updation'); //shows list of all exams that needs updation
    Route::get('/edit/{update}', 'ExamController@edit');  //receives updated values to store
    Route::patch('/update/{update}', 'ExamController@update');  //receives updated values to store

    Route::get('/sm', function () {
        return view('develop.sm');
    });

    Route::get('/filter-data','SearchController@filter');
    Route::get('/filter',function () {
        return view('develop.filter');
    });

    Route::get('/page_maker', function () {
        return view('develop.page_maker');
    });
    Route::post('/page_maker', 'ExamCreator@creator');

    Route::get('/test', function () {
        return view('develop.test');
    });
    Route::post('/test', "ExamCreator@test");


    Route::get('/test1', function () {
        return view('develop.test1');
    });

    Route::get('/suspended', function () {
        return view('develop.suspended');
    });

    Route::get('/cagr', function () {
        return view('develop.cagr');
    });

    Route::get('/get-depts', "SearchController@get_depts");
    
}
else {
}

// [END] Routes for database management
Route::get('/live_search','SearchController@liveSearch');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});