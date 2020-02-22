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


//Primera ruta: mensaje

Route::get('hola', function(){ 

    $ficha = 1753443;
    echo 'Hola madrugadores ' , $ficha ;

 });

//Ruta tratar arreglos
Route::get('arreglo' , function(){  });


 //Crear arreglo:

 $estudiantes = [ "C" => "Carlos" , 
                  "A" => "Ana" ,
                  "L" => "Lola"];
 //var_dump : analiza una variable

echo "<pre>";
 var_dump($estudiantes);
echo "</pre>";

//Acceder a otro elemento individual

/*
echo "<pre>";
echo $estudiantes["A"];
echo "<hr/>";
echo $estudiantes["C"];
echo "<hr/>";
echo $estudiantes["L"];
echo "<hr/>";
echo "</pre>";
*/

//Asignar valor a un elemento del arreglo

/*
$estudiantes ["L"]= "Leandro";
*/
//Imprimir el arreglo 

$estudiantes[] = "Fabio"; 

foreach($estudiantes as $clave => $estudiantes){

    echo "$clave - $estudiantes";
    echo "<hr/>";
    
}

//Porfavor no utilizar echo para imprimir arrelgos

