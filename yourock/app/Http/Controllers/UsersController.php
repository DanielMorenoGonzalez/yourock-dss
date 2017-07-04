<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', (['users' => $users]));
    }

    public function adminIndex() {
        $user = Auth::user();
		return view('users.admin.index', (['user' => $user]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function storeCustomer(Request $request) {
        $user = new User;

        $this->validate($request, [
			'nif' => 'required|max:9',
            'name' => 'required|max:20',
            'surname' => 'required|max:30',
            'address' => 'required|max:100',
            'province' => 'required|max:20',
            'city' => 'required|max:30',
            'zipCode' => 'required|max:5',
            'phoneNumber' => 'required|digits:9',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
		]);

        $user = new User([
            'nif' => $request->input('nif'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'province' => $request->input('province'),
            'city' => $request->input('city'),
            'zipCode' => $request->input('zipCode'),
            'phoneNumber' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'type' => 'customer'
        ]);

        $user->save();

        return redirect()->action('UsersController@index')->with('customercreate', '¡Cliente creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    public function showUser($id)
    {
        $user = User::find($id);
        return view('users.show', (['user' => $user]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
