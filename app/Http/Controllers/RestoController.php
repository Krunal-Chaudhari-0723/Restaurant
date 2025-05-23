<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restaurants;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data = restaurants::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $request)
    {
        // return $request->input();
        $resto = new restaurants();
        $resto->name=$request->input('name');
        $resto->email=$request->input('email');
        $resto->address=$request->input('address');
        $resto->save();
        $request->session()->flash('status','Restaturant Submited successfully');
        return redirect('list');
    }
function delete($id)
{
    $restaurant = restaurants::find($id)->delete();
}

}
