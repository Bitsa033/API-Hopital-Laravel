<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequet;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Http\Resources\User as ResourcesUsers;
use App\Models\User;
use App\Trait\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponse;

    function index()
    {
        $users = User::all();
        return view('pages/utilisateurs',[
            'users'=>$users
        ]);
    }

    function loginForm()
    {
        return view('pages/loginForm',[ ]);
    }

    /**
     * Display the specified animal resource.
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return "Le paramètre id doit etre un nombre";
        } else {
            $user= User::find($id);
            return new ResourcesUsers($user);
        }
        
    }

    /**
     * Add a newly created resource in storage.
     */
    function add() {
        return view('pages.utilisateur');
    }

    function store(Request $request)
    {
        
        // $request->validated($request->all());
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'type' => $request->type,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('user-add');
        
    }

    function update(UpdateUsersRequest $request,$id){
        $request->validated($request->all());
        $user= User::find($id);
        $user->update([
            "name"=>$request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            "email"=>$request->email
        ]);

        return $this->success([
            'user'=>$user
        ]);
        
    }

    public function delete($id)
    {
        if (!is_numeric($id)) {
            return "Le paramètre id doit etre un nombre";
        } else {
            $user=User::destroy($id);
            return $this->success([
                'user'=>$user
                // 'token'=>$user->remo('API key token pour '.$user->name)->plainTextToken
            ]);
        }
        
    }

    function login(Request $request)
    {
        dd('lo');
        $credentials=["name"=>$request->name2, "password"=>$request->password];
        if (!Auth::attempt($credentials)) {
            return $this->erreur($credentials,'Nom ou mot de passe incorect',201);
        }

         User::where("name",$request->name2)->first();
        //dd($user);

        return redirect('audiences');

        
    }

    function logout()
    {
        $user = Auth::user();

        return $this->logoutUser($user,'Vous etes déconnecté',205);
    }

}
