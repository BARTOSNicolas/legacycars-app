<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Seller;

class BackOfficeController extends Controller
{
    //Affiche le back avec les la liste des voitures
    public function show(){
        $cars = Car::all();
        return view('backoffice', ['cars' => $cars]);
    }

    //Recois le formulaire et Créer un vendeur et une voiture
    public function addCar(Request $request){
        try{
            $car = new Car;
            $seller = new Seller;

            $seller->firstname = $request->input('first_name');
            $seller->lastname = $request->input('last_name');
            $seller->mail = $request->input('mail');
            $seller->phone = $request->input('phone');

            $seller->save();

            $car->marque = $request->input('marque');
            $car->model = $request->input('model');
            $car->year = $request->input('year');
            $car->km = $request->input('km');
            $car->prix = $request->input('prix');
            $car->picture = $request->input('picture');
            $car->description = $request->input('description');
            $car->seller_id = $seller->id;

            $car->save();

            $message_error = "Cest bon ta voiture est sur le site";

            return view('backoffice-result', ['message_error' => $message_error, 'help'=>'created']);
        }
        catch(Exception $e){
            $message_error = 'Oups, il y a eu un incident !!';
            return view('backoffice-result', ['message_error' => $message_error, 'help'=>'created']);
        }

    }
    //Affiche le formulaire pour modifier
    public function update($id){
        $car = Car::find($id);
        return view('back-formulaire', ['id' => $id, 'car' => $car]);
    }
    //Recois les modification et les change SI il y en a
    public function updated_car($id, Request $request ){

        $car = Car::find($id);

        if($request->filled('marque')){
            $car->marque = $request->input('marque');
        }
        if($request->filled('model')){
            $car->model = $request->input('model');
        }
        if($request->filled('year')){
        $car->year = $request->input('year');
        }
        if($request->filled('km')){
        $car->km = $request->input('km');
        }
        if($request->filled('prix')){
        $car->prix = $request->input('prix');
        }
        if($request->filled('picture')){
            $car->picture = $request->input('picture');
        }
        if($request->filled('description')){
            $car->description = $request->input('description');
        }

        $car->save();

        return view('backoffice-result', ['help' => 'updated']);
    }

    //Delete une voiture
    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return view('backoffice-result', ['help' => 'deleted']);

    }

}
