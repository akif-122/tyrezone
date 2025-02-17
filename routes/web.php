<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TyreSizeController;
use App\Http\Middleware;


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
// routes/web.php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use Faker\Guesser\Name;


// Route::middleware(['auth'])->group(function () {
Route::get('/admin/products', [ProductController::class, 'showInfo'])->name("adminProducts");
Route::get('/admin/dashboard', [DashboardController::class, 'dash'])->name('adminDashboard');
Route::get("admin/tyre-pattren", [ManufacturerController::class, "tyre_pattern"])->name("adminTyrepattren");
// });

Route::get('/change_password', [UserController::class, 'changePassword'])->name("change-password");

Route::get('/addByAdmin', [ProductController::class, 'addPage'])->name('addByAdmin');
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/products', [ProductController::class, 'showInfoOnMain']);
Route::post('/updateProduct', [ProductController::class, 'update'])->name('updateProduct');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('editProduct');
// Route::post('/user_Dashboard', [RegisterController::class, 'userDash'])->name('userDashboard');

Route::get('/addManufacture', function () {
    return view('admin/add-manufacture');
});
Route::get('/adminIndex', function () {
    return view('admin/index');
})->name('adminIndex');
Route::get("/manufacturersHome", [ProductController::class, 'render'])->name("manufacturers");
Route::get("/manufacturers/{manufacturer}", [ProductController::class, 'category'])->name("manufacturer");
Route::get("/pattern/{pattern}", [ProductController::class, 'category_pattern'])->name("pattern");
Route::post("/addManufacturer", [ManufacturerController::class, 'addManufacturer'])->name("addManufacturer");
Route::get("/manufacturers", [ManufacturerController::class, 'index'])->name('adminManufacturers');
Route::delete('/manufacturers/delete', [ManufacturerController::class, 'destroy'])->name('delete_Manufacturer');
Route::delete('/admin/deleteUser', [RegisterController::class, 'destroy'])->name('delete_user');
Route::get('/editManufacturer/{id}', [ManufacturerController::class, 'edit'])->name('editManufacturer');
Route::get('/editAdminUser/{id}', [RegisterController::class, 'adminUser'])->name('editAdminUser');
Route::get('/edit_pattern/{id}', [ManufacturerController::class, 'edit_pattern'])->name('edit_pattern');
Route::post('/update_manufacturer', [ManufacturerController::class, 'update'])->name('update_manufacturer');
Route::post('/updateUserAdmin', [RegisterController::class, 'updateUserAdmin'])->name('updateUserAdmin');
Route::post('/update_pattern', [ManufacturerController::class, 'update_pattern'])->name('update_pattern');
Route::post('/add_pattern', [ManufacturerController::class, 'save_tyre_pattern'])->name('add_pattern');
Route::delete('/delete_pattern', [ManufacturerController::class, 'delete_tyre_pattern'])->name('delete_tyre_pattern');
Route::post('/dashboard', [AdminController::class, 'login'])->name('dashboard');
// Route::get('/dashIndex', [AdminController::class, 'dashIndex'])->name('dashIndex');
Route::get('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');
Route::get('/adminOrders', function () {
    return view('admin/orders');
});
Route::get('/editUser', function () {
    return view('admin/edit-user');
})->name('editUser');
Route::get('/adminAddProduct', [ManufacturerController::class, 'add_dynamic_options'])->name('adminAddProducts');
Route::delete('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/insert', [RegisterController::class, 'insert'])->name('insert');
Route::get('/render', [ProductController::class, 'render']);
Route::post('/add', [ProductController::class, 'add'])->name('add');
Route::post('/update', [ProductController::class, 'update'])->name('update');
Route::post('/profile', [RegisterController::class, 'profile'])->name('profile');
Route::get('/profile', [RegisterController::class, 'userDash'])->name('userDash');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

// PAYMENT ROUTES

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');


// PAGES VIEWS ROUTES
Route::get("/", [UserController::class, 'main'])->name("home");
Route::get('/filter-sizes', [UserController::class, 'filter'])->name('filter.sizes');
Route::view("/login", "login")->name("login");
Route::view("/UserSignup", "register")->name("register");
Route::view("/about", "about")->name("about");
Route::view("/blog-detail", "blog-detail")->name("blog-detail");
Route::view("/blogs", "blogs")->name("blogs");
Route::view("/booking", "booking")->name("booking");
Route::get("/checkout", [ProductController::class, 'checkout'])->name("checkout");
Route::view("/contact", "contact")->name("contact");
Route::view("/edit-profile", "edit-profile")->name("edit-profile");
Route::view("/forget-password", "forget-password")->name("forget-password");
Route::view("/gallery", "gallery")->name("gallery");
// Route::view("/manufacturers", "manufacturers")->name("manufacturers");
Route::view("/orders", "orders")->name("orders");
Route::view("/search", "search")->name("search");
Route::view("/services", "services")->name("services");
// Route::view("/tyre-pattern", [ManufacturerController::class,'tyre-pattern'])->name("tyre-pattern");
Route::get("/index-pattern", [ManufacturerController::class, 'render_pattern'])->name("index-pattern");
Route::get("MainCart/{id}", [ProductController::class, 'viewCart'])->name("MainCart");
Route::delete('/cart/remove/{id}', [ProductController::class, 'removeFromCart'])->name('cart.remove');
// Route::post("MainCart/{id}", [ProductController::class, 'viewCart'])->name("MainCart");
Route::view('/cart', 'cart')->name('cart');
Route::post('/cart/update', [ProductController::class, 'updateCart'])->name('cart.update');
// Route to fetch the current cart
Route::get('/fetch-cart', [ProductController::class, 'fetchCart'])->name('fetchCart');

// Route to update cart (increase or decrease quantity)
Route::post('/update-cart', [ProductController::class, 'updateSideCart'])->name('updateCart');
Route::post('/fetch-user-data', [UserController::class, 'fetchUserData'])->name('fetch.user.data');
Route::post('/checkoutValidate', [UserController::class, 'validateCredentials'])->name('checkoutValidate');


// Route to remove an item from the cart
Route::post('/remove-from-cart', [ProductController::class, 'removeFromSideCart'])->name('removeFromCart');



Route::view("shop", "shop")->name("shop");
Route::view("shop-detail", "shop-detail")->name("shop-detail");



// ADMIN ROUTES
Route::view("admin/add-product", "admin.add-product")->name("adminAddProduct");


Route::get("admin/edit-product", [ManufacturerController::class, 'edit_product'])->name("adminEditProduct");





// Route::view("admin/manufacturers", "admin.manufacturers")->name("adminManufacturers");
Route::view("admin/add-manufacturer", "admin.add-manufacture")->name("adminAddManufacturers");
Route::view("admin/edit-manufacturer", "admin.edit-manufacture")->name("adminEditManufacturers");
Route::get("admin/add-pattren", [ManufacturerController::class, "dynamic_manufactuer_option"])->name("adminAddTyrepattren");
// Route::get("admin/edit-pattren",[ProductController::class,'editPattern'])->name("adminEditTyrepattren");
Route::get("admin/users", [RegisterController::class, 'viewAllUsers'])->name("adminUsers");
Route::view("admin/add-users", "admin.add-user")->name("adminAddUsers");
Route::view("admin/edit-users", "admin.edit-user")->name("adminEditUsers");
Route::view("admin/orders", "admin.orders")->name("adminOrder");
Route::view("admin/profile", "admin.profile")->name("adminProfile");

Route::prefix("admin")->group(function () {
    Route::view("/", "admin.index");
    // Route::view("/products", "admin.products")->name("products");
    Route::view("/tyrePattern", "admin.tyre-Patteren")->name("tyrePattern");
});

Route::post('/add-tyre-size', [TyreSizeController::class, 'saveSize'])->name('save-tyre-size');

// TYRE SIZES ROUTES

Route::get("tyre-sizes",[TyreSizeController::class,'showTyreSizes'])->name("tyre-sizes");
// routes/web.php

Route::delete('/TyreSize/{id}', [TyreSizeController::class, 'deleteSize'])->name('size.delete');

Route::view("add-sizes", "admin.add-tyre-size")->name("add-tyre-size");
Route::view("edit-size", "admin.edit-tyre-size")->name("edit-tyre-size");
// Route to display the edit form
Route::get('/tyre-sizes/{id}/edit', [TyreSizeController::class, 'edit'])->name('size.edit');

// Route to handle the update request
Route::post('/tyre-sizes/{id}', [TyreSizeController::class, 'update'])->name('size.update');
