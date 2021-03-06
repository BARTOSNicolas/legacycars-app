<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Seller;

class BackOfficeController extends Controller
{
    //Affiche le back avec les la liste des voitures
    public function index()
    {
        $cars = Car::all();
        $sellers = Seller::all();
        return view('backoffice', ['cars' => $cars, 'sellers' => $sellers]);
    }

    //Recois le formulaire et Créer un vendeur et une voiture
    public function addCar(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'mail' => 'required|Email',
                'phone' => 'required',

                'marque' => 'required',
                'model' => 'required',
                'year' => 'required',
                'km' => 'required|min:1',
                'prix' => 'required|min:1',
                'picture' => 'required',
                'description' => 'required',
            ]);

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
            return redirect()->route('product-self', $car->id)->with('status', 'Création reussie');

        } catch (Exception $e) {
            $message_error = 'Oups, il y a eu un incident !!';

            return redirect('formulaire')->with('error', 'echec de la création');
        }

    }

    //Affiche le formulaire pour modifier
    public function update(Car $car)
    {
        return view('back-formulaire', ['car' => $car]);
    }

    //Recois les modification et les change SI il y en a
    public function updated_car(Car $car, Request $request)
    {
        try {
            $validated = $request->validate([
                'marque' => 'required',
                'model' => 'required',
                'year' => 'required',
                'km' => 'required|min:1',
                'prix' => 'required|min:1',
                'picture' => 'required',
                'description' => 'required',
            ]);

            $car->update($request->all());

            $car->save();

            return redirect('backoffice')->with('status', 'Mise à jour réussie');
        }
        catch(Exception $e)
        {
            return redirect('backoffice')->with('error', 'Mise à jour échouée');
        }

    }

    //Delete une voiture
    public function delete(Car $car)
    {
        $car->delete();
        return redirect('backoffice')->with('status', 'Effacement reussi');

    }

}
