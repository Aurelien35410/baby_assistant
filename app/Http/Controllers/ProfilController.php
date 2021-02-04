<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bottles;

class ProfilController extends Controller
{
    //
    public function editform () {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        return view('editprofil', compact('user'));
    }

    public function edit(Request $request, $id) {
        $data['name'] = $request->name;
        $data['email'] = $request->email;


        $user = User::where('id', $id)->update($data);

        return redirect('/')->with('success', 'Votre modification a bien été prise en compte');
    }

    public function delete($id) {

        $bottles = Bottles::where('id_user', $id)->delete();
        $user = User::where('id', $id)->delete();
        return redirect ('/register');

    }
}
