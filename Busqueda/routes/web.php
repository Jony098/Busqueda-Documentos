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


Route::get("/Busqueda_Titulo/{title}", function($title){


	$resultados = DB::select("SELECT authors.name AS name, authors.last_name, documents.title, documents.description, files.url, files.size, files.mime, directories.name AS Directory  from documents INNER JOIN authors ON documents.author_id = authors.id INNER JOIN files ON documents.id = files.document_id INNER JOIN directories ON directories.id = files.directory_id  Where title='$title'");
	return $resultados;

	/*

	foreach ($resultados as $documento) {
	
		echo "Autor: ".$documento->name." ".$documento->last_name."<br>";
		echo "Titulo: ".$documento->title."<br>";
		echo "Descripcion: ".$documento->description."<br>";
		echo "Url: ".$documento->url."<br>";
		echo "Peso: ".$documento->size." KB <br>";
		echo "MIME: ".$documento->mime."<br><br><br>";

	}*/

	 
}

);

Route::get("/Busqueda_Descripcion/{description}", function($description){

	$resultados = DB::select("SELECT authors.name AS name, authors.last_name, documents.title, documents.description, files.url, files.size, files.mime, directories.name AS Directory  from documents INNER JOIN authors ON documents.author_id = authors.id INNER JOIN files ON documents.id = files.document_id INNER JOIN directories ON directories.id = files.directory_id Where description like '%$description%'");

	return $resultados;

	/*foreach ($resultados as $documento) {
	
		echo "Autor: ".$documento->name." ".$documento->last_name."<br>";
		echo "Titulo: ".$documento->title."<br>";
		echo "Descripcion: ".$documento->description."<br>";

	}
*/


});


Route::get("/Busqueda_Autor/{name}/{last_name}", function($name, $last_name){


	$resultados = DB::select("SELECT authors.name AS name, authors.last_name, documents.title, documents.description, files.url, files.size, files.mime, directories.name AS Directory from documents INNER JOIN authors ON documents.author_id = authors.id INNER JOIN files ON documents.id = files.document_id INNER JOIN directories ON directories.id = files.directory_id Where authors.name='$name' AND last_name='$last_name'");

	return $resultados;

	/*foreach ($resultados as $documento) {
	
		echo "Autor: ".$documento->name." ".$documento->last_name."<br>";
		echo "Titulo: ".$documento->title."<br>";
		echo "Descripcion: ".$documento->description."<br>";

	}*/


});


Route::get('elastic/reindex/{id}', 'ElasticController@reindex');
Route::get('elastic/search/{id}/{query}', 'ElasticController@search');


