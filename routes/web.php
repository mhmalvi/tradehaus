<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TrackOrderController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\admin\NewArrivalController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\admin\AdminOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/', [ProductController::class, 'show_all']);
Route::get('/product-details/{id}', [ProductController::class, 'show'])->name('product.details');
// Route::get('admin',[AdminCategoryController::class,'index']);
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/new-arrival', [NewArrivalController::class, 'index'])->name('admin.new_arrival');
    Route::post('/new-arrival', [NewArrivalController::class, 'store'])->name('store.arrival');
    Route::put('/new-arrival', [NewArrivalController::class, 'update'])->name('admin.update_arrival');
    Route::get('/new-arrival/{slug}', [NewArrivalController::class, 'edit'])->name('admin.edit_arrival');
    Route::get('/new-arrival/{id}', [NewArrivalController::class, 'destroy'])->name('admin.delete_arrival');

    Route::get('/add-product', [AdminProductController::class, 'index'])->name('add.product');
    Route::post('/add-product', [AdminProductController::class, 'store'])->name('store.product');
    Route::get('/edit-product', [AdminProductController::class, 'edit'])->name('edit.product');
    Route::put('/update-product/{id}', [AdminProductController::class, 'update'])->name('update.product');
    Route::get('/get-productList', [AdminProductController::class, 'product_list'])->name('product.list');
    Route::get('/add-category', [AdminCategoryController::class, 'index'])->name('add.category');
    Route::get('/edit-category', [AdminCategoryController::class, 'edit'])->name('edit.category');
    Route::get('/edit-subcategory', [AdminCategoryController::class, 'edit_subCategory'])->name('edit.sub-category');
    Route::put('/update-category', [AdminCategoryController::class, 'update'])->name('update.category');
    // Route::put('/update-subcategory', [AdminCategoryController::class, 'update'])->name('update.subcategory');
    Route::get('/delete-category', [AdminCategoryController::class, 'destroy'])->name('delete.category');
    Route::post('/add-category', [AdminCategoryController::class, 'store'])->name('store.category');
    Route::get('/add-sub-category', [AdminCategoryController::class, 'view_subcategory'])->name('add.subCategory');
    Route::get('/delete-product', [AdminProductController::class, 'destroy'])->name('delete.product');
    Route::get('/logout', [AuthController::class, 'logout_admin'])->name('admin.logout');
    // Route::post('/add-product-to-cart', [CartController::class, 'store'])->name('store.cart');
    Route::get('new-order', [AdminOrderController::class, 'index'])->name('new.order');
    Route::get('order-history', [AdminOrderController::class, 'order_history'])->name('order.history');
    Route::get('order-details/{id}', [AdminOrderController::class, 'show_order_details'])->name('order.details');
    Route::get('order-cancel/{id}', [AdminOrderController::class, 'order_cancel'])->name('order.cancel');
});
Route::get('/search-item', [ProductController::class, 'search'])->name('product.search');
Route::post('/add-product-to-cart', [CartController::class, 'store'])->name('store.cart');
Route::get('/cart-items', [CartController::class, 'index'])->name('items.cart');
Route::get('/product_by_category/{id}', [ProductController::class, 'product_category'])->name('product.category');
Route::get('/login-page', [AuthController::class, 'login'])->name('login.page');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register-page', [AuthController::class, 'register'])->name('register.page');
Route::post('/register-user', [AuthController::class, 'register_user'])->name('register.user');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
Route::get('/track-us', [TrackOrderController::class, 'index'])->name('track.us');
Route::get('/privacy-policy', [PolicyController::class, 'index'])->name('privacy.policy');
Route::get('/terms-condition', [TermsController::class, 'index'])->name('terms.condition');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::get('/wishlist', [Wishlist::class, 'index'])->name('wish.list');
Route::get('/checkout/{total}', [CheckoutController::class, 'index'])->name('checkout.view');
Route::post('place-order', [OrderController::class, 'store'])->name('place.order');
Route::get('show-all', [ProductController::class, 'show_all_products'])->name('show.all');
Route::get('blog-all', [BlogController::class, 'index'])->name('blog.view');
Route::get('blog-details', [BlogController::class, 'details'])->name('blog.details');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::post('/wishlist-store', [WishlistController::class, 'store'])->name('wishlist.store');
Route::get('/new-arrival/{slug}', [ProductController::class, 'new_arrival_details'])->name('new.arrival');
Route::get('/offer', [OfferController::class, 'index'])->name('offer.index');

Route::post('/cart-quantity', [CartController::class, 'update_quantity']);

Route::get('/get-cart', [CartController::class, 'get_cart']);

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::post('/add-comment', [CommentController::class, 'store'])->name('add.comment');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wish.list');
    Route::get('/checkout/{total}', [CheckoutController::class, 'index'])->name('checkout.view');
    Route::post('place-order', [OrderController::class, 'store'])->name('place.order');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});
Route::post(
    '/login-access',
    [AuthController::class, 'login_access']
)->name('login.access');
// Route::get('/product_change', [ProductController::class, 'product_change'])->name('product.change');
// ROute::get('/product-by-category',function(){
//     return view('productByCategory');
// });
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
