<?php

use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\BriefsController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\tachesController;
use App\Models\Apprenants;
use App\Models\promotion;
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


Route::get('/', function () {
    return view('welcome');
});

// Promotions routes 

Route::get('/index', [PromotionController::class ,'select']);

Route::get('/add', [PromotionController::class ,'add']);

Route::get('/insert', [PromotionController::class ,'insert']);

Route::get('/deletepromo', [ PromotionController::class,'deletepromo' ]);

Route::get('/update_promotion/{id}', [ PromotionController::class,'update_promotion' ]);

Route::get('/edit/{id}', [ PromotionController::class,'edit']);

Route::get('search/{name}',[PromotionController::class,'search']);

Route::get('search',[PromotionController::class,'search']);

// Apprenants routes 

Route::get('/addapprenants/{id}', [ApprenantsController::class , 'addapprenants' ]);

Route::get('/insertapprenants', [ApprenantsController::class ,'insertapprenants']);

Route::get('/deleteapprenants', [ ApprenantsController::class,'deleteapprenants' ]);

Route::get('searchapprenants/{id}/{name}',[PromotionController::class,'searchapprenants']);

Route::get('searchapprenants/{id}',[PromotionController::class,'searchapprenants']);

Route::get('/update_apprenants/{id}', [ ApprenantsController::class,'update_apprenants' ]);

Route::get('/edit_apprenants/{id}', [ ApprenantsController::class,'edit_apprenants' ]);

Route::get('/update_promotion',[ApprenantsController::class,'selectpromo']);

// briefs routes

Route::get('/briefs', [BriefsController::class,'index']);

Route::get('/addbrief', [BriefsController::class , 'add' ]);

Route::get('/add_brief', [BriefsController::class ,'insert']);

Route::get('/update_brief/{id}', [BriefsController::class,'update_brief']);

Route::get('/edit_brief/{id}', [BriefsController::class,'edit_brief']);

Route::get('/delete', [BriefsController::class,'delete']);

// taches routes

Route::get('/taches/{id}', [tachesController::class,'create_taches']);

Route::get('/addtaches', [tachesController::class,'addtaches']);

Route::get('/taches/{id}/delete/{id_task}',[tachesController::class,'delete']);

Route::get('/update_taches/{id}',[tachesController::class,'update_taches']);

Route::get('/taches/{id}/edit_tache/{id_task}',[tachesController::class,'edit_tache']);

// assigner routes

Route::get('/assigner/{id}',[AssignController::class,'index']);

Route::get("/assigner/{id}/assignerAuApprenant/{id_apprenant}",[AssignController::class,'AssignBrief']);

Route::get("/assigner/{id}/desassignerAuApprenant/{id_apprenant}",[AssignController::class,'DesAssignBrief']);

Route::get("/assignCLass/{id}",[AssignController::class,'assignCLass']);





