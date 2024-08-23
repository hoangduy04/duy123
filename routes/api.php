<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraphQLController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ShippingMethodController;

Route::apiResource('address', AddressController::class);
Route::apiResource('shipping_methods', ShippingMethodController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/graphql', [GraphQLController::class, 'handle']);
});