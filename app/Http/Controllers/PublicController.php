<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circuit;
use App\Http\Controllers\provadb;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function homepage(){
    return view('welcome');
}



public function get_circuit(){
    $circuits = DB::table('circuits')->get();
    return view('circuits',['circuits'=>$circuits]);
}
public function store(Request $request){
    $circuit = new Circuit();

    $circuit->name = $request->Name;
    $circuit->email = $request->email;
    $circuit->description = $request->description;
    $circuit->price = $request->price;

    $circuit->save();

    return redirect()->back();
}

}
