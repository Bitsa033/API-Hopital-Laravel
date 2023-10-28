<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequet;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Http\Resources\User as ResourcesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /**
     * Print all data users.
     */
    public function printUsers()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $users= User::all();
        
        return view('pages.printUsers',[
            'users'=>$users,
            
        ]);
    }

    /**
     * Print one data user.
     */
    public function printUser($id)
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $user= User::findOrfail($id);
        
        return view('pages.printUser',[
            'users'=>$user,
            
        ]);
    }

    /**
     * Show the loginForm
     */
    function loginForm()
    {
        if (Auth::user()) {
            return redirect('audiences');
        }

        return view('pages.loginForm',[ ]);
    }

    /**
     * Show the registerForm to Create a new user
     */
    function createUser() {
        
        return view('pages.registerForm');
    }

    /**
     * Show all data users
     */
    function index()
    {
        if (!Auth::user()) {
           
            return redirect('/');
        }

        $users = User::all();

        return view('pages.users',[
            'users'=>$users
        ]);
    }

    /**
     * Store a newly created user in database
     */
    function storeUser(StoreUsersRequest $request)
    {
        $request->validated($request->all());
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'type' => $request->type,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('users')->with('success','Donnée modifiée avec sucès!');;
        
    }

    /**
     * Show one data user.
     */
    public function showUser($id) {
        if (!Auth::user()) {
            return redirect('/');
        }

        $user= User::findOrfail($id);
        $pwd=Hash::check('plain-text',$user['password']);
        dd($pwd);
        return view('pages.showUser',['user'=>$user]);
    }

    /**
     * Update the specified user resource.
     */
    function updateUser(UpdateUsersRequest $request,$id){
        $request->validated($request->all());
        $user= User::findOrfail($id);
        $user->update([
            "name"=>$request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            "email"=>$request->email
        ]);

        return redirect('users')->with('success','Donnée modifiée avec sucès!');
        
    }

    public function deleteUser($id)
    {
        if (!Auth::user()) {
           
            return redirect('users')->with('erreur',"Vous ne pouvez pas supprimerl'utilisateur connecté !");
        }
        User::destroy($id);
        return redirect('users')->with('success','Donnée supprimmée avec sucès!');
        
        
    }

    function loginUser(Request $request)
    {
        $credentials=["email"=>$request->email, "password"=>$request->password];
        if (!Auth::attempt($credentials)) {
            return redirect('audiences')->with('erreur','email ou mot de passe incorects!');
        }

        User::where("email",$request->email)->first();
       

        return redirect('audiences');

    }

    // function logout()
    // {
    //     $user = Auth::user()->logout;
    //     return new ResourcesUsers($user);

    // }

}
