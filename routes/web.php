<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Animal;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-animais',function(Request $request){
    Animal::create([
        'nome'=>$request->nome,
        'idade'=>$request->idade,
        'tipo'=>$request->tipo
    ]);
    echo "Animal cadastrado com sucesso!";
});

Route::get('/listar-animais/{id}', function($id){
    $animal = Animal::find($id);
    return view('listar',['animal' => $animal]);
});

Route::get('/editar-animais/{id}', function($id){
    $animal= Animal::find($id);
    return view('editar',['animal' => $animal]);
});

Route::post('/editar-animais/{id}',function(Request $request, $id){
    $animal = Animal::find($id);

    $animal->update([
        'nome' => $request->nome,
        'idade' => $request->idade,
        'tipo' => $request->tipo
    ]);

    echo "Animal editado com sucesso!";
});

Route::get('/excluir-animais/{id}', function($id){
    $animal  = Animal ::find($id);
    $animal ->delete();

    echo "Animal excluído com sucesso!";
});
