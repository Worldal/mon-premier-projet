<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientsController extends Controller
{
    function liste(){
        return response()->json(Client::all());
    }
    function detail($id){
        return response()->json(Client::find($id));
    }
    function ajouter(Request $request){

        $client = new Client();
        $client->id_twitter = $request->id_twitter;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->save();
        return response()->json($client);
    }
}
