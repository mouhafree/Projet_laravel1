<?php
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\EtudiantController;

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
Route::get('/',function()
{
return view('welcome');
}
);
   
Route::get('/delete-etudiant/{id}',[EtudiantController::class ,'delete_etudiant']);
Route::get('/update-etudiant/{id}',[EtudiantController::class ,'update_etudiant']);

Route::get('/ajouter',[EtudiantController::class ,'ajout_etudiant']);
Route::get('/etudiant',[EtudiantController::class ,'liste_etudiant']);
Route::post('/ajouter/traitrement', [EtudiantController::class, 'ajout_etudiant_traitement']);
Route::post('/update/traitrement', [EtudiantController::class, 'update_etudiant_traitement']);











// Route::post('/ajouter/traitrement',[EtudiantController::class ,'ajout_etudiant_traitement']);

// Route::get('/',[PostController::class ,'home'])->name('welcome');
// Route::get('/posts/{$id}',[PostController::class ,'show'])->WhereNumber('id');
// Route::get('/contact/',[PostController::class ,'contact'])->name('contact');