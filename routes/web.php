<?php

use App\Http\Controllers\ActiviteCtrl;
use App\Http\Controllers\CandidatureCtrl;
use App\Http\Controllers\DiplomeCtrl;
use App\Http\Controllers\EtudeCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AbonnementCtrl;
use App\Http\Controllers\PaysCtrl;
use App\Http\Controllers\PostulerCtrl;
use App\Http\Controllers\SuperCtrl;
use App\Http\Controllers\UserCtrl;
use App\Http\Controllers\UserEditor;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsletterCtrl;

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

    Auth::routes();
 //============maintenance=================================
//Route::get('/', function () {
  
   // return view('welcome');
 //});
 //=======================================================  
    Route::get('/auth', function () {
        return view('auth.login');
       // return view('welcome');
    })->name('auths');

    Route::resource('/', PostulerCtrl::class);
    Route::resource('/Abonnement', AbonnementCtrl::class);

// User Route
    Route::middleware(['auth', 'user-role:user'])->group(function () {
        Route::get("/home", [HomeController::class, 'userHome'])->name('home');
    });

// Editor Route
    Route::middleware(['auth', 'user-role:editor'])->group(function () {
        Route::get("/editor/home", [HomeController::class, 'editorHome'])->name('home.editor');

    //User
    Route::resource('/user', UserEditor::class);
    Route::put("/update_user", [UserEditor::class, 'update'])->name('update-user');
    Route::delete("/delete_user", [UserEditor::class, 'destroy'])->name('delete-user');

    //Cadidature
    Route::resource('/Candidature', CandidatureCtrl::class);
    Route::delete("/delete_Candidature", [CandidatureCtrl::class, 'destroy'])->name('delete-candidature');
    Route::Post("/check{id}", [CandidatureCtrl::class, 'store'])->name('stores');
    //Activite
    Route::resource('/Activite', ActiviteCtrl::class);
    Route::put("/update_activite", [ActiviteCtrl::class, 'update'])->name('update-activite');
    Route::delete("/delete_activite", [ActiviteCtrl::class, 'destroy'])->name('delete-activite');


    //Diplome
    Route::resource('/Diplome', DiplomeCtrl::class);
    Route::put("/update_diplome", [DiplomeCtrl::class, 'update'])->name('update-diplome');
    Route::delete("/delete_diplome", [DiplomeCtrl::class, 'destroy'])->name('delete-diplome');



    //Etude
    Route::resource('/Etude', EtudeCtrl::class);
    Route::put("/update_etude", [EtudeCtrl::class, 'update'])->name('update-etude');
    Route::delete("/delete_etude", [EtudeCtrl::class, 'destroy'])->name('delete-etude');

    //Pays
    Route::resource('/Pays', PaysCtrl::class);
    Route::put("/update_pays", [PaysCtrl::class, 'update'])->name('update-pays');
    Route::delete("/delete_pays", [PaysCtrl::class, 'destroy'])->name('delete-pays');

    //Newsletter
    Route::resource('/Newsletter', NewsletterCtrl::class);
    Route::put("/update_Newsletter", [NewsletterCtrl::class, 'update'])->name('update-newsletter');
    Route::delete("/delete_Newsletter", [NewsletterCtrl::class, 'destroy'])->name('delete-newsletter');
});



// Admin Route
    Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');

    //USER

});
