<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Image;

class UsersController extends Controller
{
    //Método para guardar un usuario
    public function store(Request $request) {
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
            'type' => 'cliente'
        ]);

        $user->save();

        return redirect('home');
    }

    //Método para mostrar la vista al usuario según los permisos que tenga
    public function show(){
        $user = Auth::user();
        if($user->type == 'cliente'){
            return view('users.customers.show', (['user' => $user]));
        }
        else {
            return view('auth.login');
        }
    }
    
    //Método para recuperar el usuario autenticado y mostrarle la vista de editar perfil
    public function edit(){
		$user = Auth::user();
        if($user->type == 'cliente'){
            return view('users.customers.edit', (['user' => $user]));
        }
	}
    
    //Método para actualizar la información de un usuario
    public function update(Request $request){
        $user = Auth::user();

        $this->validate($request, [
			'nif' => 'max:9',
            'name' => 'max:20',
            'surname' => 'max:30',
            'address' => 'max:100',
            'province' => 'max:20',
            'city' => 'max:30',
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
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(300,300)->save(public_path('/uploads/avatars/' . $filename));
            $user->avatar = $filename;
        }
        $user->save();

        return redirect()->action('UsersController@show')->with('message', 'Perfil actualizado');
    }

    //Método para borrar a un usuario
    public function destroy($id){
        $userType = Auth::user()->type;
        $user = User::find($id);
        $user->delete();
        if($userType == 'cliente'){
            return redirect('home');
        }
    }

}
