<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marke;
use App\Models\automobiliai;

class CarsController extends Controller
{
    public function index()
    {
        $markes = marke::all();
        return view('cars_form', compact('markes'));
    }

    public function submit(request $request)
    {
        $validatedData = [
            'model' => 'required|max:40',
            'year' => 'required'
        ];
        $customMessages = [
            'required' => ':attribute laukas yra privalomas.',
        ];
        $this->validate($request, $validatedData, $customMessages);


        $new_car = new automobiliai();
        $new_car->marke_id = $request->input('marke_id');
        $new_car->model = $request->input('model');
        $new_car->year = $request->input('year');
        $new_car->save();

        return redirect()->route('home')->with('message', 'Automobilis sėkmingai pridėtas.');
    }

    public function home()
    {
        $cars = automobiliai::with('marke')->get();
        return view('welcome', compact('cars'));
    }

    public function delete(automobiliai $car)
    {
        automobiliai::find($car->id)->delete();
        return redirect()->back()->with('message', 'Automobilis sėkmingai ištrintas.');
    }

    public function edit(automobiliai $car)
    {
        $markes = marke::all();
        return view('car_edit', compact('car', 'markes'));
    }

    public function update(automobiliai $car, request $request)
    {
        $car->marke_id = $request->input('marke_id');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->save();

        return redirect()->route('home')->with('message', 'Automobilio informacija sėkmingai atnaujinta.');
    }
}
