<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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
     * Show one data user.
     */
    public function show($id) {
        if (!Auth::user()) {
            return redirect('/');
        }

        $user= User::findOrfail($id);
        return view('pages.showUser',['user'=>$user]);
    }

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
    function login()
    {
        if (Auth::user()) {
            return redirect('audiences');
        }

        return view('pages.loginForm',[ ]);
    }

    /**
     * Show the registerForm
     */
    function register() {
        
        return view('pages.registerForm');
    }

    /**
     * Update the specified user resource after a valid registration.
     */
    function update(UpdateUsersRequest $request,$id){

        $request->validated($request->all());
        $user= User::findOrfail($id);
       
        $user->update([
            "name"=>$request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            "email"=>$request->email,
            "type"=>$request->type
        ]);

        return redirect('users')->with('success','Donnée modifiée avec sucès!');
        
    }

    /**
     * Update the specified user resource after a valid registration.
     */
    function delete($id){
        $user= User::destroy($id);
       
        return redirect('users')->with('success','Donnée suppriméé avec sucès!');
        
    }
}
