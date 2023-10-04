<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Http\Requests\StoreAudienceRequest;
use App\Http\Requests\UpdateAudienceRequest;
use App\Http\Resources\Audience as ResourcesAudience;
use App\Trait\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudienceController extends Controller
{
    use HttpResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audiences= Audience::all();
        
        return view('pages/audiences',[
            'audiences'=>$audiences,
            'user'=>'toto'
        ]);
    }

    /**
     * Add a newly created resource in storage.
     */
    function add() {
        return view('pages.audience');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->validated($request->all());
        $audience=Audience::create([
            'nom_patient'=>$request->nom_patient,
            'qualite'=>$request->qualite,
            'audience_type'=>$request->audience_type,
            'objet'=>$request->objet,
            'message'=>$request->message,
            'nom_personnel'=>$request->nom_personnel
        ]);

        return redirect('audience-add');

        // return $this->success([
        //     'audience'=>$audience
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return "Le paramètre id doit etre un nombre";
        } else {
            $audience= Audience::find($id);
            return new ResourcesAudience($audience);
        }
    }

    /**
     * Display the specified product by name.
     */
    public function showByName($name)
    {
        if (!is_string($name)) {
            return "Le paramètre nom doit etre un nom";
        } else {
            $audience= DB::table('audiences')->where('nom_patient', $name)->get();
            return new ResourcesAudience($audience);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validated($request->all());
        $audience= Audience::find($id);
        
        //$request->validated($request->all());
        $audience->update([
            'nom_patient'=>$request->nom_patient,
            'qualite'=>$request->qualite,
            'audience_type'=>$request->audience_type,
            'objet'=>$request->objet,
            'message'=>$request->message,
            'nom_personnel'=>$request->nom_personnel
        ]);

        return $this->success([
            'produit'=>$audience
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return "Le paramètre id doit etre un nombre";
        } else {
            $produit=Audience::destroy($id);
            return $this->success([
                'produit'=>$produit
                // 'token'=>$user->remo('API key token pour '.$user->name)->plainTextToken
            ]);
        }
    }
}
