<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Image;
use File;

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

    public function adminHome() {
        $user = Auth::user();
		return view('users.admin.home', (['user' => $user]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCustomer()
    {
        return view('users.customers.create');
    }

    public function createAdmin()
    {
        return view('users.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect('login')->with('afterregister', '¡Te acabas de registrar en nuestra web! Inicia sesión y disfruta de la música');
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

    public function storeAdmin(Request $request) {
        $user = new User;

        $this->validate($request, [
			'nif' => 'required|max:9',
            'name' => 'required|max:20',
            'surname' => 'required|max:30',
            'job_title' => 'required|max:30',
            'phoneNumber' => 'required|digits:9',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
		]);

        $user = new User([
            'nif' => $request->input('nif'),
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'job_title' => $request->input('job_title'),
            'phoneNumber' => $request->input('phoneNumber'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'type' => 'admin'
        ]);

        $user->save();

        return redirect()->action('UsersController@index')->with('admincreate', '¡Administrador creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::user()){
            $user = Auth::user();
            return view('users.customers.show', (['user' => $user]));
        }
        else {
            return view('auth.login');
        }
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
    public function edit()
    {
        $user = Auth::user();
        return view('users.customers.edit', (['user' => $user]));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('users.edit', (['user' => $user]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $user = Auth::user();

        $this->validate($request, [
			'nif' => 'max:9',
            'name' => 'max:20',
            'surname' => 'max:30',
            'address' => 'max:100',
            'zipCode' => 'max:5',
		]);

        if($request->input('nif') != ''){
            $user->nif = $request->input('nif');
        }
        if($request->input('name') != ''){
            $user->name = $request->input('name');
        }
        if($request->input('surname') != ''){
            $user->surname = $request->input('surname');
        }
        if($request->input('address') != ''){
            $user->address = $request->input('address');
        }
        if($request->input('province') != ''){
            $user->province = $request->input('province');
        }
        if($request->input('city') != ''){
            $user->city = $request->input('city');
        }
        if($request->input('zipCode') != ''){
            $user->zipCode = $request->input('zipCode');
        }
        if($request->input('phoneNumber') != ''){
            $this->validate($request, [
                'phoneNumber' => 'digits:9'
		    ]);
            $user->phoneNumber = $request->input('phoneNumber');
        }
        if($request->input('email') != ''){
            $this->validate($request, [
                'email' => 'email|max:255|unique:users',
		    ]);
            $user->email = $request->input('email');
        }
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = Auth::user()->name . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300,300)->save(public_path('/uploads/avatars/' . $filename));

            //Si el usuario tiene una foto distinta a la de por defecto,
            //la borramos y guardamos la nueva
            if (Auth::user()->avatar != "default.jpg") {
                $path = '/uploads/avatars/';
                $lastpath= Auth::user()->avatar;
                File::Delete(public_path( $path . $lastpath) );
            }

            $user->avatar = $filename;
        }
        $user->save();

        return redirect()->action('UsersController@show')->with('message', 'Perfil actualizado');
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if($user->type == 'customer'){
            $this->validate($request, [
                'nif' => 'max:9',
                'name' => 'max:20',
                'surname' => 'max:30',
                'address' => 'max:100',
                'zipCode' => 'max:5',
		    ]);
        }
        else{
            $this->validate($request, [
                'nif' => 'max:9',
                'name' => 'max:20',
                'surname' => 'max:30',
                'job_title' => 'max:50'
		    ]);
        }
        
        if($request->input('nif') != ''){
            $user->nif = $request->input('nif');
        }
        if($request->input('name') != ''){
            $user->name = $request->input('name');
        }
        if($request->input('surname') != ''){
            $user->surname = $request->input('surname');
        }

        if($user->type == 'customer') {
            if($request->input('address') != ''){
                $user->address = $request->input('address');
            }
            if($request->input('province') != ''){
                $user->province = $request->input('province');
            }
            if($request->input('city') != ''){
                $user->city = $request->input('city');
            }
            if($request->input('zipCode') != ''){
                $user->zipCode = $request->input('zipCode');
            }
        }
        else{
            if($request->input('job_title') != ''){
                $user->job_title = $request->input('job_title');
            }
        }
        
        if($request->input('phoneNumber') != ''){
            $this->validate($request, [
                'phoneNumber' => 'digits:9'
		    ]);
            $user->phoneNumber = $request->input('phoneNumber');
        }
        if($request->input('email') != ''){
            $this->validate($request, [
                'email' => 'email|max:255|unique:users',
		    ]);
            $user->email = $request->input('email');
        }
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = Auth::user()->name . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300,300)->save(public_path('/uploads/avatars/' . $filename));

            //Si el usuario tiene una foto distinta a la de por defecto,
            //la borramos y guardamos la nueva
            if (Auth::user()->avatar != "default.jpg") {
                $path = '/uploads/avatars/';
                $lastpath= Auth::user()->avatar;
                File::Delete(public_path( $path . $lastpath) );
            }
            $user->avatar = $filename;
        }

        $user->save();

        return redirect()->action('UsersController@index')->with('userupdate', '¡Usuario actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy() 
    {
        $user = Auth::user();

        Auth::logout();

        if($user->orders){
            foreach($user->orders as $order){
                $order->user()->dissociate();
                $order->save();
            }
        }

        $user->delete();

        return redirect('home')->with('myuser', 'Tu cuenta se ha borrado. Esperamos verte pronto');

    }

    public function destroyUser($id)
    {
        $user = User::find($id);

        if($user->orders){
            foreach($user->orders as $order){
                $order->user()->dissociate();
                $order->save();
            }
        }

        $user->delete();

        return redirect()->action('UsersController@index')->with('userdelete', '¡Usuario borrado!');
    }
}
