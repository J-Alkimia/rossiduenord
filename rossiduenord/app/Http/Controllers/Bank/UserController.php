<?php

namespace App\Http\Controllers\Bank;

use App\{User, Business};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('created_by', Auth::user()->name)->orderBy('created_at', 'DESC')->paginate(10);
        return view('bank.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
        $validated = $request->validate([
            'role' => 'required | string',
            'created_by' => 'nullable | string',
            'name' => 'required | string | min:3 | max:100',
            'referent' => 'required | string',
            'referent_phone' => 'required | string',
            'email' => 'required | string | email | max:100 | unique:users',
            'password' => 'required | string | min:8 | confirmed'
        ]);

        $created_by = Auth::user()->name;
        $validated['created_by'] = $created_by;
        
        $password = Hash::make($request->password);
        $validated['password'] = $password;

        User::create($validated);
        
        if($validated['role'] == 'business'){
            $user_id = Auth::user()->id;
            $validated['user_id'] = $user_id;
            Business::create($validated);
        }
        //dd($validated);
        return redirect()->route('bank.users.index')->with('message', "Nuovo utente inserito!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('bank.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('bank.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'role' => 'required | string',
            'name' => 'required | string | min:3 | max:100',
            'email' => 'required | string | email | max:100',
            'password' => 'required |string | min:8 | confirmed'
        ]);

        $password = Hash::make($request->password);
        $validated['password'] = $password;
        $user->update($validated);
        return redirect()->route('bank.users.index')->with('message', "utente modificato!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('message', "Utente $user->name e stato eliminato!");
    }
}
