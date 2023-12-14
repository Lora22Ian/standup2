 <?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\ComediantController; 
use Illuminate\Support\Facades\Route;

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

 Route::get('/', function () {
     return view('control');
 });
// Route::get('/', [EventController::class, 'index']); 

// Route::resource('events', EventController::class);

//event
 Route::get('/control', [EventController::class, 'index'])->name('control'); // Schimbat ruta de aici
 Route::resource('events', EventController::class);

 //comediant
Route::get('/control', [ComediantController::class, 'index'])->name('control');
Route::resource('comedians', ComediantController::class); 