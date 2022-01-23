<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marke;

class ModelsController extends Controller
{
    public function index()
    {
        return view('model_index');
    }

    public function submit(request $request)
    {
        $validatedData = [
            'marke' => 'required|unique:markes|max:40'
        ];
        $customMessages = [
            'required' => ':attribute laukas yra privalomas.',
            'unique' => 'Ši markė jau egzistuoja.'
        ];
        $this->validate($request, $validatedData, $customMessages);

        $new_marke = new marke();
        $new_marke->marke = $request->input('marke');
        $new_marke->save();

        return redirect()->route('markes_index')->with('message', 'Marke sėkmingai pridėta.');
    }

    public function view()
    {
        $markes = marke::all();
        return view('markes_index', compact('markes'));
    }

    public function delete(marke $marke)
    {
        Marke::find($marke->id)->delete();
        return redirect()->back()->with('message', 'Marke sėkmingai ištrinta.');
    }

    public function edit(marke $marke)
    {
        return view('marke_edit', compact('marke'));
    }

    public function update(marke $marke, Request $request)
    {
        $validatedData = [
            'marke' => 'required|unique:markes|max:40'
        ];
        $customMessages = [
            'required' => ':attribute laukas yra privalomas.',
        ];
        $this->validate($request, $validatedData, $customMessages);

        $marke->marke = $request->input('marke');
        $marke->save();

        return redirect('markes')->with('message', 'Marke sėkmingai atnaujinta.');
    }
}
