<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\move;

class moveController extends Controller
{
    //
    public function index(){
        $moves=move::all();
        return view('move.index',['moves'=>$moves]);
       

    }
    public function create(){
        return view('move.create');

    }
    public function store(Request $request){
       //dd($request);
       $data=$request->validate([
        'name'=>'required',
        'url'=>'required',
        'urll'=>'required'


       ]);
       $newmove=move::create($data);
       
       return redirect(route('move.index'));


    }
}
