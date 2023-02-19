<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialShareButtonsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\EvenementController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index');
Route::get('services', 'ServiceController@index');
Route::get('maintenance', function () { return view('maintenance'); });
Route::get('media', function () { return view('media.index');});
Route::get('media-dossier', function (){return view('media.categoryMedia');});
Route::get('media-detail', function (){return view('media.detailGallery');});
// Route::get('/actualites', function () {
//     return view('actualites')->name('actualites');;
// });


// Route::get('contact', function () { return view('contact.index'); });

Route::get('contact',[ContactController::class,'contact']);

Route::post('send-message',[ContactController::class,'sendEmail'])->name('contact.send');

// Route::get('show', function () { return view('annonces.show'); });


// Route::get('article-anglais', function () { return view('annonces.annonceangl'); });

// Route::get('search', function () { return view('search.index'); });

Route::get('single', function () { return view('single.index'); });



Route::get('service-indisponible', function () { return view('services.unvailable'); });

Route::get('cabinet', function () { return view('abouts.index'); });

Route::get('ministre', function () { return view('abouts.ministre'); });


Route::get('le-vice-ministre', function () { return view('abouts.vice-ministre'); });

Route::get('vice-ministre', function () { return view('abouts.vice-ministre'); });

Route::get('histoire', function () { return view('abouts.histoire'); });

Route::get('anciens-minitres', function () { return view('abouts.anciens-ministres'); });

// Route::get('gallerie', function () { return view('documents.media'); });

Route::get('documents', function () { return view('documents.index'); });


// Route::prefix('media')->group(function () {
//     Route::get('/', function () {
//         return view('media.index');
//     });
//     Route::get('/categorie', function () {
//         return view('media.categoryMedia');
//     });

// });

// Route::get('histoire', function () { return view('abouts.histoire'); });



// Route::get('documents', function () { return view('documents.index'); });

// Route::get('programme', function () { return view('programmes.index'); });

Route::resource('actualites', 'AnnonceController');

Route::resource('medias', 'MediaController');

Route::resource('show', 'ShowController');

Route::resource('annonces', 'AnnonceController');

Route::get('article-par-categorie/{id}',[AnnonceController::class,'viewcatbyart'])->name('filtrcat');

Route::get('media-categorie/{categorie}','EvenementController@show')->name('media.categoryMedia');

Route::get('media-categorie-details/{date}','EvenementController@mediafilre')->name('media.detailGallery');

Route::resource('article-anglais', 'AnnonceAnglController');

// Route::resource('/searchs', 'SearchController')->name('searchs.search');

Route::get('/searchs', 'SearchController@search')->name('searchs.search');

Route::get('/documents-search', 'DocumentController@searchdoc')->name('documents.resultdoc');

// Route::resource('actualites', 'ActualiteController');

Route::resource('categories', 'CategorieController');

Route::resource('documents', 'DocumentController');

Route::resource('programme', 'ProgrammeController');

Route::resource('media', 'EvenementController');

// Route::get('mediacat/{id}', [EvenementController::class,'show'])->name('media.categoryMedia');

Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
