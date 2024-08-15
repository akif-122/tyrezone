<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
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
use Faker\Guesser\Name;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/products', [ProductController::class, 'showInfo'])->name("adminProducts");
    Route::get('/admin/dashboard', [DashboardController::class, 'dash'])->name('adminDashboard');
    Route::get("admin/tyre-pattren", [ManufacturerController::class, "tyre_pattern"])->name("adminTyrepattren");
});

Route::get('/change_password', function(){
    return view('change_password');
})->name("change-password");

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

Route::get('/addManufacture', function () {
    return view('admin/add-manufacture');
});
Route::get('/adminIndex', function () {
    return view('admin/index');
});
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
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/adminOrders', function () {
    return view('admin/orders');
});
Route::get('/editUser', function () {
    return view('admin/edit-user');
})->name('editUser');
Route::get('/adminAddProduct',[ManufacturerController::class,'add_dynamic_options'])->name('adminAddProducts');
Route::delete('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/insert', [RegisterController::class, 'insert'])->name('insert');
Route::get('/render', [ProductController::class, 'render']);
Route::post('/add', [ProductController::class, 'add'])->name('add');
Route::post('/update', [ProductController::class, 'update'])->name('update');
Route::post('/profile', [RegisterController::class, 'profile']);
// Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');



// PAGES VIEWS ROUTES
Route::view("/", "index")->name("home");
Route::view("/login", "login")->name("login");
Route::view("/register", "register")->name("register");
Route::view("/about", "about")->name("about");
Route::view("/blog-detail", "blog-detail")->name("blog-detail");
Route::view("/blogs", "blogs")->name("blogs");
Route::view("/booking", "booking")->name("booking");
Route::view("/checkout", "checkout")->name("checkout");
Route::view("/contact", "contact")->name("contact");
Route::view("/edit-profile", "edit-profile")->name("edit-profile");
Route::view("/forget-password", "forget-password")->name("forget-password");
Route::view("/gallery", "gallery")->name("gallery");
// Route::view("/manufacturers", "manufacturers")->name("manufacturers");
Route::view("/orders", "orders")->name("orders");
Route::view("/search", "search")->name("search");
Route::view("/services", "services")->name("services");
// Route::view("/tyre-pattern", [ManufacturerController::class,'tyre-pattern'])->name("tyre-pattern");
Route::get("/index-pattern", [ManufacturerController::class,'render_pattern'])->name("index-pattern");
Route::get("MainCart/{id}", [ProductController::class, 'viewCart'])->name("MainCart");
Route::post("MainCart/{id}", [ProductController::class, 'viewCart'])->name("MainCart");




// ADMIN ROUTES

// Route::view("admin/dashboard", "admin.dashboard")->name("adminDashboard");
// Route::view("admin/products", "admin.products")->name("adminProducts");
Route::view("admin/add-product", "admin.add-product")->name("adminAddProduct");


Route::get("admin/edit-product",[ManufacturerController::class,'edit_product'])->name("adminEditProduct");





// Route::view("admin/manufacturers", "admin.manufacturers")->name("adminManufacturers");
Route::view("admin/add-manufacturer", "admin.add-manufacture")->name("adminAddManufacturers");
Route::view("admin/edit-manufacturer", "admin.edit-manufacture")->name("adminEditManufacturers");
Route::get("admin/add-pattren", [ManufacturerController::class,"dynamic_manufactuer_option"])->name("adminAddTyrepattren");
Route::view("admin/edit-pattren", "admin.edit-patteren")->name("adminEditTyrepattren");
Route::get("admin/users", [RegisterController::class,'viewAllUsers'])->name("adminUsers");
Route::view("admin/add-users", "admin.add-user")->name("adminAddUsers");
Route::view("admin/edit-users", "admin.edit-user")->name("adminEditUsers");
Route::view("admin/orders", "admin.orders")->name("adminOrder");
Route::view("admin/profile", "admin.profile")->name("adminProfile");

Route::prefix("admin")->group(function () {
    Route::view("/", "admin.index");
    // Route::view("/products", "admin.products")->name("products");
    Route::view("/tyrePattern", "admin.tyre-Patteren")->name("tyrePattern");
});
