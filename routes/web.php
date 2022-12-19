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


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('announcements')->name('announcements/')->group(static function() {
            Route::get('/',                                             'AnnouncementsController@index')->name('index');
            Route::get('/create',                                       'AnnouncementsController@create')->name('create');
            Route::post('/',                                            'AnnouncementsController@store')->name('store');
            Route::get('/{announcement}/edit',                          'AnnouncementsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AnnouncementsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{announcement}',                              'AnnouncementsController@update')->name('update');
            Route::delete('/{announcement}',                            'AnnouncementsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('calendars')->name('calendars/')->group(static function() {
            Route::get('/',                                             'CalendarController@index')->name('index');
            Route::get('/create',                                       'CalendarController@create')->name('create');
            Route::post('/',                                            'CalendarController@store')->name('store');
            Route::get('/{calendar}/edit',                              'CalendarController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CalendarController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{calendar}',                                  'CalendarController@update')->name('update');
            Route::delete('/{calendar}',                                'CalendarController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('polls')->name('polls/')->group(static function() {
            Route::get('/',                                             'PollController@index')->name('index');
            Route::get('/create',                                       'PollController@create')->name('create');
            Route::post('/',                                            'PollController@store')->name('store');
            Route::get('/{poll}/edit',                                  'PollController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PollController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{poll}',                                      'PollController@update')->name('update');
            Route::delete('/{poll}',                                    'PollController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('communicates')->name('communicates/')->group(static function() {
            Route::get('/',                                             'CommunicateController@index')->name('index');
            Route::get('/create',                                       'CommunicateController@create')->name('create');
            Route::post('/',                                            'CommunicateController@store')->name('store');
            Route::get('/{communicate}/edit',                           'CommunicateController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CommunicateController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{communicate}',                               'CommunicateController@update')->name('update');
            Route::delete('/{communicate}',                             'CommunicateController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('manage-courses')->name('manage-courses/')->group(static function() {
            Route::get('/',                                             'ManageCoursesController@index')->name('index');
            Route::get('/create',                                       'ManageCoursesController@create')->name('create');
            Route::post('/',                                            'ManageCoursesController@store')->name('store');
            Route::get('/{manageCourse}/edit',                          'ManageCoursesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ManageCoursesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{manageCourse}',                              'ManageCoursesController@update')->name('update');
            Route::delete('/{manageCourse}',                            'ManageCoursesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('solves')->name('solves/')->group(static function() {
            Route::get('/',                                             'SolveController@index')->name('index');
            Route::get('/create',                                       'SolveController@create')->name('create');
            Route::post('/',                                            'SolveController@store')->name('store');
            Route::get('/{solve}/edit',                                 'SolveController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SolveController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{solve}',                                     'SolveController@update')->name('update');
            Route::delete('/{solve}',                                   'SolveController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('academics-administrations')->name('academics-administrations/')->group(static function() {
            Route::get('/',                                             'AcademicsAdministrationController@index')->name('index');
            Route::get('/create',                                       'AcademicsAdministrationController@create')->name('create');
            Route::post('/',                                            'AcademicsAdministrationController@store')->name('store');
            Route::get('/{academicsAdministration}/edit',               'AcademicsAdministrationController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AcademicsAdministrationController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{academicsAdministration}',                   'AcademicsAdministrationController@update')->name('update');
            Route::delete('/{academicsAdministration}',                 'AcademicsAdministrationController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cafeteria-menus')->name('cafeteria-menus/')->group(static function() {
            Route::get('/',                                             'CafeteriaMenuController@index')->name('index');
            Route::get('/create',                                       'CafeteriaMenuController@create')->name('create');
            Route::post('/',                                            'CafeteriaMenuController@store')->name('store');
            Route::get('/{cafeteriaMenu}/edit',                         'CafeteriaMenuController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CafeteriaMenuController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{cafeteriaMenu}',                             'CafeteriaMenuController@update')->name('update');
            Route::delete('/{cafeteriaMenu}',                           'CafeteriaMenuController@destroy')->name('destroy');
        });
    });
});