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

Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function () {

    Route::namespace('Project')->prefix('Project')->middleware('auth')->group(function () {


        Route::get('dashboard', 'DashboardController@index')->name('pm.dashboard');


        Route::get('engineering/index', 'EngineeringController@index')->name('engineering.index');
        Route::get('engineering/create', 'EngineeringController@create')->name('engineering.create');

        Route::get('engineering/dcc', 'DciController@index')->name('dci.index');
        Route::get('engineering/dcc/create', 'DciController@create')->name('dcc.create');
        Route::post('engineering/dcc/store', 'DciController@store')->name('dcc.store');
        Route::get('engineering/dcc/edit', 'DciController@edit')->name('dcc.edit');
        Route::post('engineering/dcc/update', 'DciController@update')->name('dcc.update');

        Route::get('engineering/vpis', 'VpisController@index')->name('vpis.index');
        Route::get('engineering/vpis/create', 'VpisController@create')->name('vpis.create');
        Route::post('engineering/vpis/store', 'VpisController@store')->name('vpis.store');



        Route::get('procurement/dashboard', 'ProcurementController@dashboard')->name('procurement.dashboard');
        Route::get('procurement/sefareshgozari', 'ProcurementController@sefareshgozari')->name('procurement.sefareshgozari');
        Route::get('procurement/tasribakhshi', 'ProcurementController@tasribakhshi')->name('procurement.tasribakhshi');
        Route::get('procurement/avl', 'AvlController@index')->name('procurement.avl');
        Route::get('procurement/rci/create', 'RciController@create')->name('rci.create');
        Route::post('procurement/rci/store', 'RciController@store')->name('rci.store');


        Route::get('construction/dashboard', 'ConstructionController@dashboard')->name('construction.dashboard');


    });

    Route::namespace('PM')->prefix('PM')->middleware('auth')->group(function () {
        Route::resource('risk', 'RiskController');
        Route::resource('hse', 'HseController');
        Route::resource('tenders', 'TenderController');
        Route::resource('contracts', 'ContractController');

        // Tdl
        Route::resource('tdl', 'TdlController');
        Route::get('/tdl/delete/{id}','TdlController@destroy')->name('tdl.remove');

    });


    Route::namespace('Km')->prefix('Km')->middleware('auth')->group(function () {
        Route::resource('gallery', 'GalleryController');
        Route::post('gallery/upload','GalleryController@store')->name('galleryStore');
        Route::get('gallery/delete/{photo}', 'GalleryController@destroy')->name('gallery.delete');
        Route::post('gallery/search', 'GalleryController@search')->name('gallery.search');
    });




    Route::namespace('Connections')->prefix('connections')->middleware('auth')->group(function () {

        Route::get('video', function(){
            return view('connections.video');
        })->name('video');

    });



    Route::get('/', function ()    {
        return view('index');
    });

    Route::get('/glance', 'GlanceController@index')->name('glance');

    Route::get('/calendar', 'CalendareventController@index')->name('calendar');

    Route::get('/weather', function ()    {
        return view('weather');
    })->name('weather');



    Route::get('edms/index', 'EdmsController@index')->name('edms.index');
    Route::get('edms/engineering', 'EdmsController@engineering')->name('edms.engineering');
    Route::get('edms/procurement', 'EdmsController@procurement')->name('edms.procurement');
    Route::get('edms/construction', 'EdmsController@construction')->name('edms.construction');
    Route::get('edms/precommissioning', 'EdmsController@precommissioning')->name('edms.precommissioning');
    Route::get('edms/startup', 'EdmsController@startup')->name('edms.startup');
    Route::get('edms/operation', 'EdmsController@operation')->name('edms.operation');
    Route::get('edms/time', 'EdmsController@time')->name('edms.time');
    Route::get('edms/cost', 'EdmsController@cost')->name('edms.cost');
    Route::get('edms/resource', 'EdmsController@resource')->name('edms.resource');
    Route::get('edms/qaqc', 'EdmsController@qaqc')->name('edms.qaqc');
    Route::get('edms/scope', 'EdmsController@scope')->name('edms.scope');
    Route::get('edms/hse', 'EdmsController@hse')->name('edms.hse');
    Route::get('edms/stakeholder', 'EdmsController@stakeholder')->name('edms.stakeholder');
    Route::get('edms/risk', 'EdmsController@risk')->name('edms.risk');
    Route::get('edms/public', 'EdmsController@publicc')->name('edms.public');
    Route::get('edms/km', 'EdmsController@km')->name('edms.km');


    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile', 'ProfileController@update')->name('profile.update');
    Route::post('profile/avatar', 'ProfileController@updateAvatar')->name('profile.updateAvatar');
    Route::post('profile/password', 'ProfileController@updatePassword')->name('profile.updatePassword');


    Route::get('under', 'ProfileController@under')->name('under');

    Route::get('contacts', 'ProfileController@contacts')->name('contacts');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('uploadData', 'DataentryController@index')->name('Dataentry.index');


    Route::get('Dataentry/events', 'DataentryController@events')->name('Dataentry.events');
    Route::post('Dataentry/event', 'DataentryController@eventStore')->name('Dataentry.event.store');
    Route::get('Dataentry/event/delete', 'DataentryController@eventDelete')->name('Dataentry.event.delete');


    Route::prefix('administration')->middleware('auth')->group(function () {
        Route::get('wbs', 'WbsController@index')->name('wbs.index');
    });





    Route::prefix('datatables')->middleware('auth')->group(function () {
        Route::get('/project/engineering/vpis', 'DatatablesController@vpis')->name('datatables.vpis');
        Route::get('/wbs', 'DatatablesController@wbs')->name('datatables.wbs');
    });





});


