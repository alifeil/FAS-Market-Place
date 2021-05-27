<?php

use App\Http\Controllers\API\v1\LoginController;
use App\Http\Controllers\API\v1\UserController;
use App\Http\Controllers\API\v1\CategoryController;
use App\Http\Controllers\API\v1\OrderController;
use App\Http\Controllers\API\v1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// //LoginController
// Route::post('/v1/login', [LoginController::class, 'login']);
// Route::middleware('auth:api')->post('/v1/logout', [
//     LoginController::class,
//     'logout'
// ]);
// Route::post('/v1/register', [LoginController::class, 'register']);

// //UserControler
// Route::middleware('auth:api')->get('/v1/user', [
//     UserController::class,
//     'show'
// ]);
// Route::middleware('auth:api')->post('/v1/user/store', [
//     UserController::class,
//     'store'
// ]);
// Route::middleware('auth:api')->put('/v1/user/update', [
//     UserController::class,
//     'update'
// ]);

// //CategoryController
// Route::middleware('auth:api')->get('/v1/categories', [
//     CategoryController::class,
//     'index'
// ]);

// //ProductController
// Route::middleware('auth:api')->get('/v1/products', [
//     ProductController::class,
//     'index'
// ]);
// Route::middleware('auth:api')->get('/v1/products/searchByKey', [
//     ProductController::class,
//     'searchByKey'
// ]);
// Route::middleware('auth:api')->get('/v1/products/{product}', [
//     ProductController::class,
//     'show'
// ]);
// Route::middleware('auth:api')->get('/v1/products/searchByCategory/{category}', [
//     ProductController::class,
//     'searchByCategory'
// ]);

// //OrderController
// Route::middleware('auth:api')->post('/v1/order', [
//     OrderController::class,
//     'store'
// ]);
// Route::middleware('auth:api')->post('/v1/order/delete', [
//     OrderController::class,
//     'destroy'
// ]);
// Route::middleware('auth:api')->get('/v1/order/cart', [
//     OrderController::class,
//     'cart'
// ]);
// Route::middleware('auth:api')->get('/v1/order/history', [
//     OrderController::class,
//     'history'
// ]);
// Route::middleware('auth:api')->post('/v1/order/checkout', [
//     OrderController::class,
//     'checkout'
// ]);
// Route::middleware('auth:api')->get('/v1/order/showByUser', [
//     OrderController::class,
//     'showByUser'
// ]);


//LoginController
Route::post('/v1/login', [LoginController::class, 'login']);
Route::middleware('auth:api')->post('/v1/logout', [
    LoginController::class,
    'logout'
]);
Route::post('/v1/register', [LoginController::class, 'register']);

//UserControler
Route::middleware('auth:api')->get('/v1/user', [
    UserController::class,
    'show'
]);
Route::middleware('auth:api')->post('/v1/user/store', [
    UserController::class,
    'store'
]);
Route::middleware('auth:api')->put('/v1/user/update', [
    UserController::class,
    'update'
]);

//CategoryController
Route::middleware('auth:api')->get('/v1/categories', [
    CategoryController::class,
    'index'
]);
Route::middleware('auth:api')->post('/v1/category', [
    CategoryController::class,
    'store'
]);

//ProductController
Route::middleware('auth:api')->get('/v1/products', [
    ProductController::class,
    'index'
]);
Route::middleware('auth:api')->post('/v1/product', [
    ProductController::class,
    'store'
]);
Route::middleware('auth:api')->get('/v1/products/searchByKey', [
    ProductController::class,
    'searchByKey'
]);
Route::middleware('auth:api')->get('/v1/products/{product}', [
    ProductController::class,
    'show'
]);
Route::middleware('auth:api')->get('/v1/products/searchByCategory/{category}', [
    ProductController::class,
    'searchByCategory'
]);

//CartController
Route::middleware('auth:api')->get('/v1/carts', [
    CartController::class,
    'index'
]);
Route::middleware('auth:api')->post('/v1/cart', [
    CartController::class,
    'store'
]);
Route::middleware('auth:api')->get('/v1/carts/showByUser', [
    CartController::class,
    'showByUser'
]);

//TransactionController
Route::middleware('auth:api')->post('/v1/transaction', [
    TransactionController::class,
    'store'
]);

//OrderController
Route::middleware('auth:api')->post('/v1/order', [
    OrderController::class,
    'store'
]);
Route::middleware('auth:api')->post('/v1/order/delete', [
    OrderController::class,
    'destroy'
]);
Route::middleware('auth:api')->get('/v1/order/cart', [
    OrderController::class,
    'cart'
]);
Route::middleware('auth:api')->get('/v1/order/history', [
    OrderController::class,
    'history'
]);
Route::middleware('auth:api')->post('/v1/order/checkout', [
    OrderController::class,
    'checkout'
]);

