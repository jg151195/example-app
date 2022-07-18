<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FarmController extends Controller
{
    public function index()
    {
        $farms = Farm::select('name','id')->get();

        return view('farm.index',[
            'farms'=>$farms
        ]);
    }

    public function create()
    {
        return view('farm.create');
    }

    public function edit($id){
        $farm = Farm::find($id);
        return view('farm.edit',[
            'id'=> $id,
            'farm'=>$farm
        ]);
    }

    public function insert(Request $request){


        $validator = Validator::make($request->all(),[
            'name' =>'required|string|max:50'
        ]);

        if($validator->fails()){
            return redirect('/farm/create')->withErrors($validator);
        }

        $farm = new Farm;
        $farm->name = $request->name;
        $farm->save();

        return redirect('/farm');

    }

    public function update(Request $request){
        
        $validator = Validator::make($request->all(),[
            'id'=> 'required|numeric',
            'name' =>'required|string|max:50'
        ]);

        if($validator->fails()){
            return redirect('/farm')->withErrors($validator);
        }

        $farm = Farm::find($request->id);
        $farm->name = $request->name;
        $farm->save();


        return redirect('/farm');
    }

    public function delete(Request $request){
        Farm::destroy($request->id);
        return redirect('/farm');
    }
}
