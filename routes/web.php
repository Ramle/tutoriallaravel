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

Route::get('/', function () {
    return view('welcome');
});

Route::get('holamundo', function(){
    return "Hola mundo";
});


/*Route::get('matriz', function(){
    for($i=1; $i<=4; $i++)
    {$o="OXOXOXO";
     $x='XOXOXOX';
     echo $o."<br>".$x."<br>";
    }
});*/

    /*Route::get('numerospar/{number}', function($number){
        if($number%2==0)
          {echo "numero par";
          }
        else
          { echo "numero impar";
          }
    });*/

    Route::get('matriz',  [
        'as' => 'matrix','uses' =>  'ControllerEjemplo@Matriz']);

    Route::get('numerospar/{number}',  [
            'as' => 'numeros','uses' =>  'ControllerEjemplo@numeropar']);
    
    

    
