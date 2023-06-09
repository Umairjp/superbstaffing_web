<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Agency\Dashboard as AgencyDashboard;
use App\Http\Controllers\Jobs;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route


//Route::get('/admin', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics')->middleware('CustomAuth');

//Route::group(['middleware' => ['auth', 'CustomAuth']], function () {
//Route::get('/admin-dashboard',[Dashboard::class, 'index'])->name('admin.dashboard')->middleware('CustomAuth');
//});

Route::group(['prefix' => 'admin',  'middleware' => 'CustomAuth'], function () {
  Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
});

Route::group(['prefix' => 'agency',  'middleware' => 'CustomAuth'], function () {
  Route::get('/dashboard', [AgencyDashboard::class, 'index'])->name('agency.dashboard');
  Route::get('/profile', [AgencyDashboard::class, 'profile'])->name('agency.profile');
  Route::get('/profile/edit', [AgencyDashboard::class, 'profileEdit'])->name('edit.profile');
  Route::post('/profile/update', [AgencyDashboard::class, 'profileUpdate'])->name('update.profile');
  Route::resource('job', Jobs::class);

  // add form front end

  Route::get('/', function () {
    return view('agency.index');
  });

  Route::get('/profile', function () {
    return view('agency.profile.index');
  });

  Route::get('/jobs', function () {
    return view('agency.jobs.index');
  });

  Route::get('/messages', function () {
    return view('agency.messages.index');
  });

  Route::get('/employees', function () {
    return view('agency.employees.index');
  });

  Route::get('/employee-profile', function () {
    return view('agency.employee-profile.index');
  });

  Route::get('/payments', function () {
    return view('agency.payments.index');
  });

  Route::get('/settings', function () {
    return view('agency.settings.index');
  });

});




// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();
  return back()->with('message', 'Verification link sent!');
})->name('verification.send');

Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/');
})->name('verification.verify');

Route::get('/', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/signup-basic', $controller_path . '\authentications\SignupBasic@index')->name('auth-signup-basic');
Route::post('/auth/register-process', $controller_path . '\authentications\AuthController@RegisterProcess')->name('RegisterProcess');
Route::post('/auth/login-process', $controller_path . '\authentications\AuthController@LoginProcess')->name('LoginProcess');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/new-password', $controller_path . '\authentications\ForgotPasswordBasic@NewPassword')->name('NewPassword');
Route::get('/auth/logout', $controller_path . '\authentications\AuthController@logout')->name('logout');
//google
Route::get('/login/google', $controller_path . '\authentications\AuthController@redirectToGoogle')->name('login.google');
Route::get('/login/google/callback', $controller_path . '\authentications\AuthController@handleGoogleCallback');
//Facebook
Route::get('/login/facebook', $controller_path . '\authentications\AuthController@redirectToFacebook')->name('login.facebook');
Route::get('/login/facebook/callback', $controller_path . '\authentications\AuthController@handleFacebookCallback');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');


// Routes From Front End


// Company Routes

Route::prefix('company')->group(function () {


  Route::get('/', function () {
    return view('company.index');
  });

  Route::get('/profile', function () {
    return view('company.profile.index');
  });

  Route::get('/jobs', function () {
    return view('company.jobs.index');
  });

  Route::get('/messages', function () {
    return view('company.messages.index');
  });

  Route::get('/employees', function () {
    return view('company.employees.index');
  });

  Route::get('/employee-profile', function () {
    return view('company.employee-profile.index');
  });

  Route::get('/payments', function () {
    return view('company.payments.index');
  });

  Route::get('/settings', function () {
    return view('company.settings.index');
  });
});
