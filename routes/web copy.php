<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){

    Route::get('/admin', function(){
        return view('backend.layouts.master');
    });
    Route::get('/home', function(){
        return view('backend.deshboard');
    });
    
    //Categories route start
    
    Route::get('/home',[HomeController::class, 'home'])->name('home');
    Route::get('/categories',[CategoryController::class, 'index'])->name('categories.list');
    Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/create',[CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}',[CategoryController::class, 'show'])->name('categories.show');
    Route::get('/category-products/{category}',[CategoryController::class, 'productsList'])->name('category.product-list');
    //GET	/photos/{photo}/edit	edit	photos.edit
    Route::get('/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
    //PUT/PATCH	/comments/{comment}	update	comments.update
    Route::patch('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');
    //DELETE	/comments/{comment}	destroy	comments.destroy
    Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.destroy');
    //For PDF 
    Route::get('/categories-pdf',[CategoryController::class, 'categoryPdf'])->name('categories.pdf');
    // For Excel
    Route::get('/categories-excel',[CategoryController::class, 'export'])->name('categories.excel');
    Route::post('/categories-import',[CategoryController::class, 'import'])->name('categories.import');

    //Categories route end
    
    //Products route start
    Route::get('/products', [ProductController::class, 'index'])->name('products.list');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/create',[ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}',[ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/products/{product}',[ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/trash-products',[ProductController::class, 'trash'])->name('products.trash');
    Route::get('/trash-products/{product}/restore',[ProductController::class, 'restore'])->name('products.restore');
    Route::delete('/trash-products/{product}/delete',[ProductController::class, 'delete'])->name('products.delete');
    
    //Products route end
    
    // User route
    Route::get('/user', [UserController::class, 'index'])->name('user.list');
    Route::get('/users-pdf',[UserController::class, 'userPdf'])->name('users.pdf');
    Route::get('/users-excel',[UserController::class, 'userExport'])->name('users.excel');

    // Role route start
    Route::get('/role', [UserController::class, 'roleList'])->name('users.role');
    Route::get('/role-users/{role}', [UserController::class, 'usersList'])->name('role.user-list');
    Route::get('/roles-pdf',[UserController::class, 'rolePdf'])->name('roles.pdf');
    Route::get('/roles-excel',[UserController::class, 'roleExport'])->name('roles.excel');
    // Role route end

    //Profile route
    Route::get('/profile/{user}',[UserProfileController::class, 'profileEdit'])->name('profiles.edit');

    //For Slider
    Route::get('/Slider', [ProductController::class, 'create'])->name('products.create');
});

// Frontend route

Route::get('/chocotreat',[FrontendController::class, 'index'])->name('frontend.index');
Route::get('/single-product/{product}',[FrontendController::class, 'singleProduct'])->name('single.product');
Route::get('/single-product/{product}',[FrontendController::class, 'cartProduct'])->name('single.cart');




