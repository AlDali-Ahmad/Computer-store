<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copmueter;
class Compeuterscontroller extends Controller
{
    /*private static function getData(){
        return[
            ['id' => 1, 'name' => 'LG','origin'=>'Koria'],
            ['id' => 2, 'name' => 'HP','origin'=>'Shina'],
            ['id' => 3, 'name' => 'DEEL','origin'=>'USA'],
        ];
    }*/
    public function index()
    {
        return view('compeuters.index',[
            'compueters'=>Copmueter::all()
        ]);
    }
    public function create()
    {
        return view('compeuters.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'computer-name' =>'required',
            'computer-origin' =>'required',
            'computer-price' =>'required',
        ]);

        $computer =new Copmueter();
        $computer->name=$request->input('computer-name');
        $computer->origin=$request->input('computer-origin');
        $computer->price=$request->input('computer-price');
        $computer->save();
        return redirect()->route('compeuters.index');
    }
    public function show($id)
    {
        /*$compueters=self::getData();
        $index=array_search($id,array_column($compueters,'id'));
        if($index===false){
            abort(404);
        }*/

        return view('compeuters.show',[
            'compueters'=> Copmueter::findorfail($id)
        ]);
    }
    public function edit($id)
    {
        return view('compeuters.edit',[
           'compueters'=>Copmueter::findorfail($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'computer-name' =>'required',
            'computer-origin' =>'required',
            'computer-price' =>'required',
        ]);
        $to_update=Copmueter::findorfail($id);
        $to_update->name=$request->input('computer-name');
        $to_update->origin=$request->input('computer-origin');
        $to_update->price=$request->input('computer-price');
        $to_update->save();
        return redirect()->route('compeuters.index');
    }
    public function destroy($id)
    {
        $to_delete=Copmueter::findorfail($id);
        $to_delete->delete();
        return redirect()->route('compeuters.index');
    }
}
