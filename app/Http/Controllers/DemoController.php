<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use function compact;
// use function redirect;
// use function view;

class DemoController extends Controller
{
    
    public function index(){
        // $demos = Demo::all();
        return view('demo');
    }

    public function dashboard(){
        $demo = Demo::all();
        return view('index', compact('demo'));
    }

    public function create (Request $request){
        $this->validate($request, [
            "name" => "required",
            "description" => "required"
        ]);
    

        $demo = new Demo();
        $demo->name = $request->input('name');
        $demo->description = $request->input('description');
        $demo->save();
        return redirect()->back();
    }

    public function edit($id){
        $demo = Demo::find($id);
        return view('edit', compact('demo'));
    }

    public function update(Request $request, $id){
        $demo = Demo::find($id);
        $demo->name = $request->input('name');
        $demo->description = $request->input('description');
        $demo->update();
        return view('demo');

    }

    public function destroy($id){
        $demo = Demo::find($id);
        $demo->delete();
        return view('demo');
    }
}
