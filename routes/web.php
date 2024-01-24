<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyFaqController;
use App\Http\Controllers\CompanyTeamController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CompanyProjectController;
use App\Http\Controllers\CompanyExcellenceController;
use App\Http\Controllers\CompanyServiceController;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\QuestionCompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('Auth.login');
})->name('login');

Route::get('/register', function () {
    return view('Auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('company_profiles', CompanyProfileController::class);
    Route::resource('company_excellences', CompanyExcellenceController::class);
    Route::resource('company_service', CompanyServiceController::class);
    Route::resource('company_faqs', CompanyFaqController::class);
    Route::resource('company_histories', CompanyHistoryController::class);
    Route::resource('company_projects', CompanyProjectController::class);
    Route::resource('company_teams', CompanyTeamController::class);

    Route::post('question_company', [QuestionCompanyController::class, 'store'])->name('question_company.store');
    Route::put('question_company/{questionCompany}', [QuestionCompanyController::class, 'changeStatusQuestion'])->name('question_company.changeStatusQuestion');


    // Route Sidebar
    Route::get('CompanyProfile', [CompanyProfileController::class, 'index'])->name('Profil Perusahaan');
    Route::get('CompanyExcellence', [CompanyExcellenceController::class, 'index'])->name('Keunggulan Perusahaan');
    Route::get('CompanyService', [CompanyServiceController::class, 'index'])->name('Service Perusahaan');
    Route::get('CompanyFaq', [CompanyFaqController::class, 'index'])->name('Pertanyaan Perusahaan');
    Route::get('CompanyHistory', [CompanyHistoryController::class, 'index'])->name('Sejarah Perusahaan');
    Route::get('CompanyProject', [CompanyProjectController::class, 'index'])->name('Proyek Perusahaan');
    Route::get('CompanyTeam', [CompanyTeamController::class, 'index'])->name('Team Perusahaan');
    Route::get('CompanyQuestion', [QuestionCompanyController::class, 'index'])->name('Pertanyaan User');
});



// Route Front End
Route::get('/', [FrontEnd::class, 'index'])->name('homepage.index');

//Detail Portofolio
Route::get('/{companyProject}', [FrontEnd::class, 'showDetailProject']);

require __DIR__ . '/auth.php';
