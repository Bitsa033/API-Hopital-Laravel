<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Http\Requests\StoreAudienceRequest;
use App\Http\Requests\UpdateAudienceRequest;
use App\Http\Resources\Audience as ResourcesAudience;
use App\Trait\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AudienceController extends Controller
{
    use HttpResponse;
    /**
     * Display all data audiences.
     */
    public function index()
    {
        $audiences= Audience::all();
        if (!Auth::user()) {
            return redirect('/');
        }
        
        return view('pages/audiences',[
            'audiences'=>$audiences,
            'user'=>'toto'
        ]);
    }

    /**
     * Show one data audience.
     */
    public function showAudience($id) {
        if (!Auth::user()) {
            return redirect('/');
        }
        $audience= Audience::findOrfail($id);
        // dd($audience);
        return view('pages.showAudience',['audience'=>$audience]);
    }

    /**
     * Display the specified data audience by name.
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
     * Print all data audiences.
     */
    public function printAudiences()
    {
        $audiences= Audience::all();
        if (!Auth::user()) {
            return redirect('/');
        }
        
        return view('pages/printAudiences',[
            'audiences'=>$audiences,
            'user'=>'toto'
        ]);
    }
    
    /**
     * Create a newly audience.
     */
    public function createAudience() {

        if (!Auth::user()) {
            return redirect('/');
        }
        return view('pages.audience',['erreur'=>'']);
    }

    /**
     * Store a newly created audience in storage.
     */
    public function storeAudience(StoreAudienceRequest $request)
    {
        try {
            
            $request->validated($request->all());
            $message='';
            if ($request->message == null) {
                $message='Rien à signaler !';
            }
            else {
               $message=$request->message;
            }
            Audience::create([
                'nom_patient'=>$request->nom_patient,
                'qualite'=>$request->qualite,
                'audience_type'=>$request->audience_type,
                'objet'=>$request->objet,
                'message'=>$message,
                'nom_personnel'=>$request->nom_personnel
            ]);
    
            return redirect('createAudience');

        } catch (\Throwable $th) {
            // throw $th;
            $erreur=$th->getMessage();
            // dd($erreur);
            return view('pages/audience',['erreur'=>$erreur]);
            // die('érreur: '.$th->getMessage());
        }

    }

    /**
     * Update the specified data audience in storage.
     */
    public function updateAudience(UpdateAudienceRequest $request, $id)
    {
        $request->validated($request->all());
        $audience= Audience::find($id);
        
        $audience->update([
            'nom_patient'=>$request->nom_patient,
            'message'=>$request->message,
            'nom_personnel'=>$request->nom_personnel
        ]);

        return redirect('audiences');
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
