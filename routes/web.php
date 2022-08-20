<?php

use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TicketController;
use App\Models\BankAccount;
use App\Models\Destination;
use App\Models\Packet;
use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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
    return redirect()->route('home');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::prefix('/home')->group(function(){
    Route::prefix('/destination')->name('destination.')->group(function(){
        Route::get('/', [DestinationUserController::class, 'index'])->name('index');
        Route::get('/{destination:slug}', [DestinationUserController::class, 'show'])->name('show');
    });
    Route::prefix('/packet')->name('packet.')->group(function(){
        Route::get('/',[PacketController::class, 'index'])->name('index');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:Administrator'])
    ->group(function(){
        Route::prefix('/admin')->name('admin.')->group(function () {
            Route::get('/getDestination', function (Request $request) {
                if ($request->ajax()) {
                        $data = Destination::latest()->get();
                        return DataTables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                $actionBtn = '
                                <form onsubmit="return confirm('."'Apakah Anda Yakin ?'".');"
                                    action="'.route("admin.destination.destroy", $row->slug).'" method="POST">
                                    <input type="hidden" name="_token" value="'.csrf_token().'">
                                    <input type="hidden" name="_method" value="delete" />
                                    <a href="'.route('admin.destination.edit', $row->slug).'" class="edit btn btn-success btn-sm">Edit</a>
                                    <a href="'.route('admin.destination.packet.index', $row->slug).'" class="show btn btn-dark btn-sm">Lihat Paket</a>
                                    <button type="submit" class="delete btn btn-danger btn-sm" >Delete</button>
                                </form>';
                                return $actionBtn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                    }
            })->name('getDestination');

            Route::get('/{destination:slug}/getPacket', function (Request $request, Destination $destination) {
                if ($request->ajax()) {
                        $data = $destination->packets();
                        return DataTables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                $actionBtn = '
                                <form onsubmit="return confirm('."'Apakah Anda Yakin ?'".');"
                                    action="'.route("admin.destination.packet.destroy", $row->slug).'" method="POST">
                                    <input type="hidden" name="_token" value="'.csrf_token().'">
                                    <input type="hidden" name="_method" value="delete" />
                                    <a href="'.route('admin.destination.packet.edit', [Packet::find($row->id)->destination->slug, $row->slug]).'" class="edit btn btn-success btn-sm">Edit</a>
                                    <button type="submit" class="delete btn btn-danger btn-sm" >Delete</button>
                                </form>';
                                return $actionBtn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                    }
            })->name('destination.getPacket');

            Route::get('/getBankAccount', function (Request $request) {
                if ($request->ajax()) {
                        $data = BankAccount::all();
                        return DataTables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                $actionBtn = '
                                <form onsubmit="return confirm('."'Apakah Anda Yakin ?'".');"
                                    action="'.route("admin.bank.destroy", $row->id).'" method="POST">
                                    <input type="hidden" name="_token" value="'.csrf_token().'">
                                    <input type="hidden" name="_method" value="delete" />
                                    <a href="'.route('admin.bank.edit', $row->id).'" class="edit btn btn-success btn-sm">Edit</a>
                                    <button type="submit" class="delete btn btn-danger btn-sm" >Delete</button>
                                </form>';
                                return $actionBtn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                    }
            })->name('getBankAccount');

            Route::prefix('/destinations')->name('destination.')->group(function () {
                Route::get('/', [DestinationController::class, 'index'])->name('index');
                Route::get('/create', [DestinationController::class, 'create'])->name('create');
                Route::post('/', [DestinationController::class, 'store'])->name('store');
                Route::get('/{destination:slug}/edit', [DestinationController::class, 'edit'])->name('edit');
                Route::put('/{destination:slug}/update', [DestinationController::class, 'update'])->name('update');
                Route::delete('/{destination:slug}/destroy', [DestinationController::class, 'destroy'])->name('destroy');

                Route::get('/{destination:slug}', [DestinationController::class, 'show'])->name('show');

                Route::get('/{destination:slug}/packets', [DestinationController::class, 'packetIndex'])->name('packet.index');
                Route::get('/{destination:slug}/packets/create', [DestinationController::class, 'packetCreate'])->name('packet.create');
                Route::post('/{destination:slug}/packets/store', [DestinationController::class, 'packetStore'])->name('packet.store');
                Route::get('/{destination:slug}/{packet:slug}/edit', [DestinationController::class, 'packetEdit'])->name('packet.edit');

                Route::put('/packets/{packet:slug}/update', [DestinationController::class, 'packetUpdate'])->name('packet.update');
                Route::delete('/packets/{packet:slug}/destyoy', [DestinationController::class, 'packetDestroy'])->name('packet.destroy');

            });

            Route::prefix('/order')->name('order.')->group(function(){
                Route::get('/', [AdminOrderController::class, 'index'])->name('index');
                Route::put('/{order}/reject', [AdminOrderController::class, 'reject'])->name('reject');
                Route::put('/{order}/accept', [AdminOrderController::class, 'accept'])->name('accept');
            });

            Route::get('/storage',function(){
              ddd(Artisan::call('optimize:clear'));
            });

            Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
            Route::put('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

            Route::prefix('/bank')->name('bank.')->group(function(){
                Route::get('/', [BankAccountController::class, 'index'])->name('index');
                Route::get('/create', [BankAccountController::class, 'create'])->name('create');
                Route::get('/{bankAccount}/edit', [BankAccountController::class, 'edit'])->name('edit');
                Route::post('/store', [BankAccountController::class, 'store'])->name('store');
                Route::put('/{bankAccount}/update', [BankAccountController::class, 'update'])->name('update');
                Route::delete('/{bankAccount}/destroy', [BankAccountController::class, 'destroy'])->name('destroy');
            });

        });
    });
    Route::prefix('/user')->name('user.')->group(function(){
        Route::prefix('/order')->name('order.')->group(function(){
            Route::get('/',[OrderController::class, 'index'])->name('index');
            Route::get('/create',[OrderController::class, 'create'])->name('create');
            Route::post('/store',[OrderController::class, 'store'])->name('store');
            Route::get('/{order}/pay',[OrderController::class, 'edit'])->name('edit');
            Route::put('/{order}/update',[OrderController::class, 'update'])->name('update');
            Route::put('/{order}/cancel',[OrderController::class, 'cancel'])->name('cancel');
        });

        Route::get('/ticket/{order}', [TicketController::class, 'index'])->name('ticket.index');
        Route::get('/ticket/download/{order}', [TicketController::class, 'download'])->name('ticket.donwload');
    });
});


