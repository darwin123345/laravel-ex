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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/
//**pages
Route::get('/missionvision', 'PagesController@missionvision');
Route::get('/history', 'PagesController@history');
Route::get('/plp_hymn', 'PagesController@plp_hymn');
Route::get('/logo_and_symbol', 'PagesController@logo_and_symbol');
Route::get('/academic_calendar', 'PagesController@academic_calendar');
Route::get('/map', 'PagesController@map');
Route::get('/rules_and_regulation', 'PagesController@rules_and_regulation');
Route::get('/arts_and_sciences', 'PagesController@arts_and_sciences');
Route::get('/business_accountancy', 'PagesController@business_accountancy');
Route::get('/computer_studies', 'PagesController@computer_studies');
Route::get('/education', 'PagesController@education');
Route::get('/engineering', 'PagesController@engineering');
Route::get('/international_hospitality_management', 'PagesController@international_hospitality_management');
Route::get('/nursing', 'PagesController@nursing');
Route::get('/student_council_(PSSC)', 'PagesController@student_council');
Route::get('/student_organization', 'PagesController@student_organization');
Route::get('/scholarship_programs', 'PagesController@scholarship_programs');
Route::get('/board_of_regents', 'PagesController@board_of_regents');
Route::get('/executive_officials', 'PagesController@executive_officials');
Route::get('/faculty', 'PagesController@faculty');
Route::get('/staff', 'PagesController@staff');
Route::get('/organizational_structure', 'PagesController@organizational_structure');
Route::get('/admission', 'PagesController@admission');
Route::get('/registrar', 'PagesController@registrar');
Route::get('/downloads', 'PagesController@downloads');
Route::get('/seal', 'PagesController@seal');


Route::resource('/', 'PostsController');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::resource('history', 'HistoryController');
Auth::routes();

Route::resource('mav', 'MavController');
Auth::routes();

Route::resource('rules', 'RulesController');
Auth::routes();

Route::resource('acads', 'AcadsController');
Auth::routes();

Route::resource('orgs', 'OrgsController');
Auth::routes();

Route::resource('scholars', 'ScholarshipsController');
Auth::routes();


Route::get('/dashboard', 'DashboardController@index');
Auth::routes();

Route::get('/ccs', 'CcsController@index');
Auth::routes();

Route::get('/ccsMav', 'CcsMavController@index');
Auth::routes();

Route::get('/cba', 'CbaController@index');
Auth::routes();

Route::get('/cbaMav', 'CbaMavController@index');
Auth::routes();

Route::get('/coe', 'CoeController@index');
Auth::routes();

Route::get('/coeMav', 'CoeMavController@index');
Auth::routes();

Route::get('/cee', 'CeeController@index');
Auth::routes();

Route::get('/ceeMav', 'CeeMavController@index');
Auth::routes();

Route::get('/cihm', 'CihmController@index');
Auth::routes();

Route::get('/cihmMav', 'CihmMavController@index');
Auth::routes();

Route::get('/cons', 'ConsController@index');
Auth::routes();

Route::get('/conMav', 'ConMavController@index');
Auth::routes();


Route::get('/historyDashboard', 'HistoryDashboardController@index');
Auth::routes();

Route::get('/rulesdashboard', 'RulesDashboardController@index');
Auth::routes();

Route::get('/acadsDashboard', 'AcadsDashboardController@index');
Auth::routes();

Route::get('/mavdashboard', 'MavDashboardController@index');
Auth::routes();

Route::get('/mavdashboard', 'MavDashboardController@index');
Auth::routes();

Route::get('/orgsdashboard', 'OrgsDashboardController@index');
Auth::routes();

Route::get('/scholardashboard', 'ScholarshipDashboardController@index');
Auth::routes();

Route::resource('/pread', 'PreAdmissionController');

Route::get('/pread', 'PreAdmissionController@loadAc');

Route::get('/prea/{cat_id}', 'PreAdmissionController@ajax');


Route::get('/plp-cat', 'PreAdmissionController@plp_cat');




