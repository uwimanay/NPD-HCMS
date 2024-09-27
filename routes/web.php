<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProjectController;
Route::get('/', [LandingPageController::class, 'index']);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\HomeownerController;
use App\Http\Controllers\EngineerController;
use App\Http\Controllers\CompanyController;

use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BidController;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Hash;



Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::middleware(['web'])->group(function () {
   
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    //Route::post('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
    //Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');
    Route::get('/post-project', [ProjectController::class, 'create'])->name('post-project.create');
    Route::post('/post-project', [ProjectController::class, 'store'])->name('post-project.store');


    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
    Route::get('/post-project', [ProjectController::class, 'create'])->name('post-project.create');
    Route::post('/post-project', [ProjectController::class, 'store'])->name('post-project.store');
    Route::get('/view-bids', [ProjectController::class, 'viewBids'])->name('view-bids');
    Route::get('/manage-project', [ProjectController::class, 'manageProject'])->name('manage-project');

    // Review posted project

    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/review', [ProjectController::class, 'review'])->name('projects.review');
    //Post all project and edit it
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');


    Route::get('/projects/review', [ProjectController::class, 'review'])->name('projects.review');
    Route::get('/projects/review', [ProjectController::class, 'review'])->name('projects.review')->middleware('auth');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
    //Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/projects/review/{id}', [ProjectController::class, 'review'])->name('projects.review');

    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

    Route::resource('projects', ProjectController::class);

    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');

    Route::get('projects/assign/{id}', [ProjectController::class, 'assign'])->name('projects.assign');
    Route::post('projects/assign', [ProjectController::class, 'storeAssignment'])->name('projects.storeAssignment');


    Route::get('/homeowner/dashboard', [HomeownerController::class, 'index'])->name('homeowner.dashboard');
   // Route::get('/engineer/dashboard', [EngineerController::class, 'index'])->name('engineer.dashboard');

    Route::get('/engineer/dashboard', [EngineerController::class, 'engineerDashboard'])->name('engineer.dashboard');

    Route::get('/company/dashboard', [CompanyController::class, 'companyDashboard'])->name('company.dashboard');
    //Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/services-page', [ServicesPageController::class, 'index'])->name('services-page');
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

    // Route to show bids for a specific project
    Route::get('/projects/{id}/bids', [BidController::class, 'showBids'])->name('projects.bids');

    // Route to submit a new bid
    Route::post('/bids', [BidController::class, 'store'])->name('bids.store');

    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    

});


