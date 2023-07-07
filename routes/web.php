<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\CategoryController;


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
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/delivery', [Controller::class, 'delivery'])->name('delivery');
Route::get('/product-card', [Controller::class, 'productCard'])->name('product-card');
Route::get('/catalog', [Controller::class, 'catalog'])->name('catalog');
Route::get('/rent', [Controller::class, 'rent'])->name('rent');
Route::get('/repair', [Controller::class, 'repair'])->name('repair');
Route::get('/service-center', [Controller::class, 'serviceCenter'])->name('service-center');
Route::get('/uslugi', [Controller::class, 'uslugi'])->name('uslugi');
Route::get('/rent-detail', [Controller::class, 'rentDetail'])->name('rent-detail');
Route::get('/repair-detail', [Controller::class, 'repairDetail'])->name('repair-detail');
Route::get('/about', [Controller::class, 'about'])->name('about');

//get data from db
Route::post('/search-result', [Controller::class, 'get_offers'])->name('search-result');

#маршрут для обработки  ajax запроса
Route::get('/catalog/ajax', [Controller::class, 'catalogAjax'])->name('catalog-ajax');
Route::get('/rent/ajax', [Controller::class, 'rentAjaxDetail'])->name('rent-ajax');
Route::get('/data/offer/ajax', [Controller::class, 'getOffer'])->name('data-offer-ajax');
Route::get('/get-geo-data-ajax', [Controller::class,'getGeoDataAjax'])->name('get-geo-data-ajax');

// #post
Route::post('/send-order', [Controller::class, 'SendOrder'])->name('send.order');
Route::post('/send-quest', [Controller::class, 'SendQuest'])->name('send.quest');
Route::post('/send-modal-quest', [Controller::class, 'SendModalQuest'])->name('send.modal.quest');

// adminka ne trogal
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', [Controller::class, 'Dashboard'])->name('admin/dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('admin/loadimage', [Controller::class, 'LoadImage'])->name('admin/loadimage');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::resources([
        'admin/product' => ProductController::class, //Вики
        'admin/category' => CategoryController::class, //Категории
        // 'category' => WikiCategoryController::class, //Категории вики
        // 'tag' => WikiTagController::class, //Категории вики
        // 'digital-signatures' => ElSigController::class, //Эцп
    ]);
});

// Route::get('login', [Controller::class, 'Login'])->name('login');

// Route::get('/', function () {
//     // return Redirect::route('login');
//     return Inertia::render('Auth/Login', [
//         // 'orders' => $orders,
//         // 'order_items' => $order_items,
//         // 'clients' => $clients
//     ]);
//     // return Inertia::render('Pages/Auth/Login', [
//     //     'canLogin' => Route::has('login'),
//     //     'canRegister' => Route::has('register'),
//     //     'laravelVersion' => Application::VERSION,
//     //     'phpVersion' => PHP_VERSION,
//     // ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [OrderController::class, 'Dashboard'])->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/config/companies', [Controller::class, 'ConfigCompanies'])->name('config.companies');
// Route::middleware(['auth:sanctum', 'verified'])->get('/config/companies/get', [Controller::class, 'CompaniesGet'])->name('config.companies.get');
// Route::middleware(['auth:sanctum', 'verified'])->get('/config/companies/{id}', [Controller::class, 'ConfigCompany'])->name('config.company');
// Route::middleware(['auth:sanctum', 'verified'])->post('/config/company/edit', [Controller::class, 'ConfigCompanyEdit'])->name('config.company.edit');
// Route::middleware(['auth:sanctum', 'verified'])->get('/config/company/new', [Controller::class, 'ConfigCompanyNew'])->name('config.company.new');
// Route::middleware(['auth:sanctum', 'verified'])->post('/config/company/create', [Controller::class, 'ConfigCompanyCreate'])->name('config.company.create');

// Route::middleware(['auth:sanctum', 'verified'])->get('/config/common', [Controller::class, 'GetCommonConfig'])->name('config.common');
// Route::middleware(['auth:sanctum', 'verified'])->post('/config/common/edit', [Controller::class, 'EditCommonConfig'])->name('config.common.edit');

// Route::middleware(['auth:sanctum', 'verified'])->get('/orders', [OrderController::class, 'Orders'])->name('orders');
// Route::middleware(['auth:sanctum', 'verified'])->post('/order/add', [OrderController::class, 'AddOrder'])->name('order.add');
// Route::middleware(['auth:sanctum', 'verified'])->post('/order/edit', [OrderController::class, 'EditOrder'])->name('order.edit');
// Route::middleware(['auth:sanctum', 'verified'])->post('/order/delite', [OrderController::class, 'DeliteOrder'])->name('order.delite');


// Route::middleware(['auth:sanctum', 'verified'])->get('/clients', [Controller::class, 'GetClients'])->name('clients');
// Route::middleware(['auth:sanctum', 'verified'])->get('/clients/get', [OrderController::class, 'ClientsGet'])->name('clients.get');
// Route::middleware(['auth:sanctum', 'verified'])->get('/clients/{id}', [Controller::class, 'ClientDetail'])->name('client.detail');
// Route::middleware(['auth:sanctum', 'verified'])->post('/client/add', [Controller::class, 'AddClient'])->name('client.add');
// Route::middleware(['auth:sanctum', 'verified'])->post('/client/edit', [Controller::class, 'EditClient'])->name('client.edit');

// Route::middleware(['auth:sanctum', 'verified'])->get('/products', [ProductController::class, 'GetProducts'])->name('products');
// Route::middleware(['auth:sanctum', 'verified'])->get('/products/get', [OrderController::class, 'ProductsGet'])->name('products.get');
// Route::middleware(['auth:sanctum', 'verified'])->get('/products/new', [ProductController::class, 'ProductNew'])->name('product.new');
// Route::middleware(['auth:sanctum', 'verified'])->post('/products/add', [ProductController::class, 'AddProduct'])->name('product.add');
// Route::middleware(['auth:sanctum', 'verified'])->get('/products/{id}', [ProductController::class, 'ProductDetail'])->name('product.detail');
// Route::middleware(['auth:sanctum', 'verified'])->post('/products/edit', [ProductController::class, 'EditProduct'])->name('product.edit');

// Route::middleware(['auth:sanctum', 'verified'])->get('/prices', [PriceController::class, 'GetPrices'])->name('prices');
// Route::middleware(['auth:sanctum', 'verified'])->get('/prices/get', [OrderController::class, 'PricesGet'])->name('prices.get');
// Route::middleware(['auth:sanctum', 'verified'])->get('/prices/{id}', [PriceController::class, 'PriceDetail'])->name('price.detail');
// Route::middleware(['auth:sanctum', 'verified'])->post('/prices/add', [PriceController::class, 'AddPrice'])->name('price.add');
// Route::middleware(['auth:sanctum', 'verified'])->post('/prices/edit', [PriceController::class, 'EditPrice'])->name('price.edit');


// Route::middleware(['auth:sanctum', 'verified'])->get('/ui-kit', [PriceController::class, 'uiKit'])->name('uikit');


// Route::middleware(['auth:sanctum', 'verified'])->post('/order/new', [PriceController::class, 'EditPrice'])->name('price.edit');

