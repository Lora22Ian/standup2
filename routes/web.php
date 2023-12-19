 <?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\ComediantController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EventContactController;
use App\Http\Controllers\PartnerSponsorController;
use App\Http\Controllers\SpContactController;
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

     //CONTACT//
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::resource('contacts', ContactController::class);

     //AGENDA//
    Route::get('/agendas', [AgendaController::class, 'index']);    
    Route::resource('agendas', AgendaController::class);

     //EVENTCONTACT//
     Route::get('/eventContacts', [EventContactController::class, 'index']);    
     Route::resource('eventContacts', EventContactController::class);

     //partnerSPONSOR//
     Route::get('/partnerSponsors', [PartnerSponsorController::class, 'index']);     
     Route::resource('partnerSponsors', PartnerSponsorController::class);

     //spCONTACT//
     Route::get('/spContacts', [SpContactController::class, 'index']);
     Route::resource('spContacts', SpContactController::class);

        //stripe
    Route::any('/session', 'App\Http\Controllers\StripeController@session')->name('session');
    Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
    Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');

        //cos
    Route::get('/ticket', [TicketsController::class, 'index']); //afisare pagina de start
    Route::get('cart', [TicketsController::class, 'cart']); //cos
    Route::get('add-to-cart/{id}', [TicketsController::class, 'addToCart']);//adaug in cos
    Route::patch('update-cart', [TicketsController::class, 'update']); //modific cos
    Route::delete('remove-from-cart', [TicketsController::class, 'remove']);//sterg din cos
});