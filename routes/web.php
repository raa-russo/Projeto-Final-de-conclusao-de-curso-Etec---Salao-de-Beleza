<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Models\Profissional;
use App\Http\Controllers\CalendarController;


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

//teste calendario novo


Route::get('/calendar.index', [CalendarController::class, 'index'])->name('calendar.index');

Route::get('/listar-profissionais', function () {
    $profissionais = Profissional::all();
    return view('listar-profissionais', ['profissionais' => $profissionais]);
});//listar os profissionais cadastrados no banco

Route::get('/', [UserController::class, 'index']);

Route::post('/save_client', [UserController::class, 'store_cliente']);

Route::post('/save_profissional', [UserController::class, 'store_profissional']);


Route::get('/exibir-codigo', function () {
    return view('exibir-codigo');
});

Route::get('/agenda-profissional', function () {
    return view('agenda-profissional');
});

Route::get('/agendamento', function () {
    return view('agendamento');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/cliente', [UserController::class, 'create_cliente']);

Route::get('/cliente-logado', function () {
    return view('cliente-logado');
});

Route::get('/contato', function () {
    return view('contato');
});

// Route::get('/logado', function () {
//     return view('logado');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/pesquisa-profissional', function () {
    return view('pesquisa-profissional');
});

Route::get('/profissional', [UserController::class, 'create_profissional']);

Route::get('/servico-profissional', function () {
    return view('servico-profissional');
});

Route::get('/servico-profissional', function () {
    return view('servico-profissional');
})->name('servico-profissional');

Route::get('/servico-profissional2', function () {
    return view('servico-profissional2');
})->name('servico-profissional2');

Route::get('/servico-profissional3', function () {
    return view('servico-profissional3');
})->name('servico-profissional3');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/sucesso', function () {
    return view('sucesso');
});

Route::get('/listar-profissionais', function () {
    return view('listar-profissionais');
});

Route::get('/listar-profissionais', [ProfissionalController::class, 'index']);


Route::get('/welcome', function () {
    return view('welcome');
});
//login com banco de dados

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class,'login'])->name('login.submit');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/cadastro', 'AuthController@cadastro')->name('cadastro.submit');

Route::middleware('auth')->group(function () {
    Route::get('/logado', function () {
        return view('logado');
    })->name('logado');
});

Route::get('/profissionais', [ProfissionalController::class, 'index'])->name('profissionais.index');

// rota do boot
Route::get('/boot', function () {
    return view('boot');
})->name('boot');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');



Route::get('/calendario', [CalendarController::class, 'index'])->name('calendario');




