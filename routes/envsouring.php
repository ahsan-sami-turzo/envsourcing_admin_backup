<?php



use App\Http\Controllers\Envsourcing\SisterConcernController;
use Illuminate\Support\Facades\Route;

/*****************************************************
*  mics creation
*
*****************************************************/

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
    //All the routes that belongs to the group goes here
   Route::get('company',[SisterConcernController::class,'index'])->name('company.index');

});


