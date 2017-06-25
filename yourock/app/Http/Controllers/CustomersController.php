<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Customer;
use DB;

class CustomersController extends Controller
{
    //Método para guardar un usuario (de tipo customer)
    public function store(Request $request) {
        $user = new Customer;

        $user->nif = $request->input('nif');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->zipCode = $request->input('zipCode');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('home');
    }

    public function show() {
        $user = Auth::user();
        if(Auth::guest()){
            return view('auth.login');
        }
        else {
            return view('users.customers.show', (['user' => $user]));
        }
    }

    //Método para recuperar el usuario autenticado (de tipo customer)
    //y mostrarle la vista de editar perfil
    public function edit(){
		$user = Auth::user();
        return view('users.customers.edit', (['user' => $user]));
	}

    //Método para actualizar la información de un usuario (de tipo customer)
    public function update(Request $request){
        $user = Auth::user();
        if($request->input('nif') != ''){
            $this->validate($request, [
			    'nif' => 'required'
		    ]);
            $user->nif = $request->input('nif');
        }
        if($request->input('name') != ''){
            $this->validate($request, [
			    'name' => 'required'
		    ]);
            $user->nif = $request->input('name');
        }
        if($request->input('surname') != ''){
            $this->validate($request, [
			    'surname' => 'required'
		    ]);
            $user->nif = $request->input('surname');
        }
        if($request->input('address') != ''){
            $this->validate($request, [
			    'address' => 'required'
		    ]);
            $user->nif = $request->input('address');
        }
        if($request->input('city') != ''){
            $this->validate($request, [
			    'city' => 'required'
		    ]);
            $user->nif = $request->input('city');
        }
        if($request->input('province') != ''){
            $this->validate($request, [
			    'province' => 'required'
		    ]);
            $user->nif = $request->input('province');
        }
        if($request->input('zipCode') != ''){
            $this->validate($request, [
			    'zipCode' => 'required'
		    ]);
            $user->nif = $request->input('zipCode');
        }
        if($request->input('phoneNumber') != ''){
            $this->validate($request, [
			    'phoneNumber' => 'required'
		    ]);
            $user->nif = $request->input('phoneNumber');
        }
        if($request->input('email') != ''){
            $this->validate($request, [
			    'email' => 'required'
		    ]);
            $user->nif = $request->input('email');
        }
        $user->save();

        return redirect()->action('CustomersController@show');
    }

    //Método para borrar a un usuario (de tipo customer)
    public function destroy($id){
        $user = Customer::find($id);
        $user->delete();
        return redirect()->action('HomeController@index');
    }
}
