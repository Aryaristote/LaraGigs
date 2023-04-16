<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listing/{listing}', [ListingController::class, 'show']);

// --------------------All this simular to this above
// Route::get('/listing/{id}', function($id){
//     //Handle if the id of the item does not exist
//     $existingId = Listing::find($id);
//     if($existingId){
//         return view('listing', [
//             'listing' => $existingId;
//         ]);
//     }else{
//         abort('404');
//     }
// })->where('id', '[0-9]+');
//******************************************** */
