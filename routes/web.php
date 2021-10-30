<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [App\Http\Controllers\Frontend\FrontController::class, 'index']);
Route::get('/shop', [App\Http\Controllers\Frontend\FrontController::class, 'shop']);
Route::get('/blog', [App\Http\Controllers\Frontend\FrontController::class, 'blog']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontController::class, 'about']);
Route::get('/faq', [App\Http\Controllers\Frontend\FrontController::class, 'faq']);
Route::get('/cart', [App\Http\Controllers\Frontend\FrontController::class, 'cart'])->name('cart');
Route::get('/wishlist', [App\Http\Controllers\Frontend\FrontController::class, 'wishlist']);
Route::get('/orders/track', [App\Http\Controllers\Frontend\FrontController::class, 'track']);
Route::get('/checkout', [App\Http\Controllers\Frontend\FrontController::class, 'checkout']);
Route::get('/product/{id}', [App\Http\Controllers\Frontend\FrontController::class, 'single'])->name('single');
Route::get('/products/category/{id}', [App\Http\Controllers\Frontend\FrontController::class, 'productsByCategory'])->name('categoryWise');
Route::get('/products/brands/{id}', [App\Http\Controllers\Frontend\FrontController::class, 'productsByBrands'])->name('brandWise');

//cart
Route::post('/cart/store', [App\Http\Controllers\Frontend\CartController::class, 'cartStore'])->name('cart.store');


Auth::routes([
  //  'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin/','middleware'=>'auth'],function(){
    Route::get('/',[App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    // Banner
    Route::resource('banner',App\Http\Controllers\BannerController::class);
     // Banner
     Route::resource('category',App\Http\Controllers\CategoryController::class);
     Route::post('category/{id}/child',[App\Http\Controllers\CategoryController::class,'getChildByParentId']);
    // Brand
    Route::resource('brand',App\Http\Controllers\BrandController::class);
    // product
      Route::resource('product',App\Http\Controllers\ProductController::class);
      // user
      Route::resource('user',App\Http\Controllers\UserController::class);
});