 <?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\ComediantController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*
// cum a fost inainte de inregi
 Route::get('/', function () {
     return view('control');
 });

//event
 Route::get('/control', [EventController::class, 'index'])->name('control'); // Schimbat ruta de aici
 Route::resource('events', EventController::class);

 //comediant
Route::get('/control', [ComediantController::class, 'index'])->name('control');
Route::resource('comedians', ComediantController::class); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => 'auth'], function(){
//      Route::get('/', function () {
//          return view('control');
//      });

//        //event
//     Route::get('/control/event', [EventController::class, 'index'])->name('control'); // Schimbat ruta de aici
//     Route::resource('events', EventController::class);
//     //comediant
//    Route::get('/control/comedian', [ComediantController::class, 'index'])->name('control');
//    Route::resource('comedians', ComediantController::class); 

// });

Route::get('/', function () {
    return redirect()->route('login'); // Redirecționează către pagina de login atunci când deschizi aplicația
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
 
    //EVENT//
    Route::get('/events', [EventController::class, 'index']);
    Route::resource('events', EventController::class);
 
    //COMEDIANT//
    Route::get('/comedians', [ComediantController::class, 'index']);
    Route::resource('comedians', ComediantController::class);
});