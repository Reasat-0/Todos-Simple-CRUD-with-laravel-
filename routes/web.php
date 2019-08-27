<?php

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

//----------Home of Laravel-------------//

Route::get('/', function () {
    return view('welcome');
});

//---------New's Router-------//
Route::get('/new',function(){

   return view('new');

});


//-----------Todos Router-------//
Route::get('/todos', [

        'uses' => 'TodosController@index',
        'as'   => 'todo'
    ]

    );

//-----------Storing Todos (Route)---------//

Route::post('/create/todo',[

    'uses' => 'TodosController@storeTodos'

]);

//---------Deleting Todos (Route)------//
Route::get('/todos/delete/{id}',[

    'uses' => 'TodosController@deleteTodos',
    'as'   => 'todo.delete'

]);


Route::get('/todos/update/{id}',[

    'uses'  => 'TodosController@updateTodos',

    'as'    => 'todo.update'

    ]);




Route::post('todo/save/{id}',[

    'uses'  => 'TodosController@saveUpdates',
    'as'    => 'saveUpdate'

]);

Route::get('todos/completed/{id}',[

   'uses'   => 'TodosController@markCompleted',
    'as'    => 'todo.completed'

]);

