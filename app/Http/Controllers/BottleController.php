<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Bottles;

class BottleController extends Controller
{
    //

    public function addform () {
        return view('newbottle');
    }

    public function add(Request $request) {
        $bottle = new Bottles;
        $bottle->id_user = Auth::id();
        $bottle->quantity = $request->quantity;
        $bottle->pipi = $request->pipi;
        $bottle->caca = $request->caca;
        $bottle->save();
        return redirect('/');
    }

    public function editform ($id) {

        $bottle = Bottles::where('id', $id)->first();
        return view('editbottle', compact('bottle'));
    }

    public function edit (Request $request,$id) {

        $data['created_at'] = $request->created_at;
        $data['quantity'] = $request->quantity;
        $data['pipi'] = $request->pipi;
        $data['caca'] = $request->caca;

        $bottle = Bottles::where('id', $id)->update($data);

        return redirect('/')->with('success', 'Votre modification a bien été prise en compte');
    }

    public function delete($id) {

        $bottles = Bottles::where('id', $id)->delete();
        return redirect ('/');

    }

}
