<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Document;
use App\Author;

class ElasticController extends Controller
{
    public function reindex($id){

    	$user = User::find($id);

    	if($user!=null&&$user->is_admin==1){

    		$documents = Document::all();
    		$documents->addToIndex();
    		dd("Indexacion realizada");

    	} else{

    		dd("No tienes los permisos necesarios");

    	}

    }

    public function search($id, $query){

    	$user = User::find($id);

    	if($user!=null){

    		/*$documents = Document::search($query);
    		dd($documents);
*/
    		
    		$documents = Document::searchByQuery(array('match'=>array('title'=>$query)));
	dd($documents);
			

    		

    	}

    }
}
