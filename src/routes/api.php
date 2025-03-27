<?php

use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TradeController;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/explorers', [ExplorerController::class, 'index']);
Route::post('/explorers', [ExplorerController::class, 'store']);
Route::put('/explorers/{explorer}', [ExplorerController::class, 'updateLocation']);
Route::post('/items', [ItemController::class, 'item']);
Route::post('/trade',[TradeController::class, 'store']);
Route::get('/history', [HistoryController::class, 'history']);
