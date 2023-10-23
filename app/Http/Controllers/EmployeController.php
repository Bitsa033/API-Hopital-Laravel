<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use Illuminate\Support\Facades\Auth;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::user()) {
           
            return redirect('/');
        }

        $employes = Employe::all();

        return view('pages.employes',[
            'employes'=>$employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()) {
           
            return redirect('/');
        }

        return view('pages.employe',['erreur'=>'']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeRequest $request)
    {
        try {
            //code...
            $request->validated($request->all());
            Employe::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
                'fonction' => $request->fonction,
            ]);
            return redirect('employes')->with('success','Donnée enregistrée avec sucès!');;

        } catch (\Throwable $th) {
            //throw $th;
            $erreur=$th->getMessage();
           
            return view('pages.employe',['erreur'=>$erreur]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $employe= Employe::findOrfail($id);
        
        return view('pages.showEmploye',['employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeRequest $request, $id)
    {
        $request->validated($request->all());
        $employe= Employe::findOrfail($id);
        $employe->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'fonction' => $request->fonction,
        ]);
        return redirect('employes')->with('success','Donnée modifiée avec sucès!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        dd('delete the employe');
    }
}
