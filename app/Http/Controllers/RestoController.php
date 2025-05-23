<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\restaurants;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
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
    function delete(Request $request,$id)
    {
        $restaurant = restaurants::find($id);

    if ($restaurant) {
        $restaurant->delete();
        $request->session()->flash('status', 'Restaurant Deleted Successfully');
    } else {
        $request->session()->flash('error', 'Restaurant Not Found');
    }

    return redirect('list');
    }

    function edit($id){
            $data = restaurants::find($id);
            return view('edit',["data"=>$data]);
    }
    function update(Request $request){
        $resto =restaurants::find($request->input('id'));
        $resto->name=$request->input('name');
        $resto->email=$request->input('email');
        $resto->address=$request->input('address');
        $resto->save();
        $request->session()->flash('status','Restaturant Updated successfully');
        return redirect('list');
    }
    function register(Request $request)
    {
            //  echo Crypt::encrypt('123@');
            // return $request->input();
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password =Crypt::encrypt($request->input('password'));
            $user->number = $request->input('number');
            $user->save();
            $request->session()->put('user',$request->input('name'));
            return redirect('/');
    }
}
