<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use Illuminate\Support\Facades\Auth;

class ToolController extends Controller
{
    //
    public function index() {
        if(Auth::check()){
            $tools = Tool::all();
            return view('Tools.tools', ['tools'=>$tools]);
        }
        #abort(401);
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function create() {
        return view('Tools.create');
    }
    public function store(Request $request) {
        $data = $request->all();
        Tool::create([
            'title'=>$data['title'],
            'price'=>$data['price'],
            'image'=>$data['image']
        ]);
        return redirect(route('Tools.index'));
    }
    public function update($id){
        $tool = Tool::find($id);
        return view('Tools.update',['tool'=>$tool]);
    }
    public function edit(Request $request) {
        $tool = Tool::find($request->id);
        $tool->title = $request->title;
        $tool->price = $request->price;
        $tool->image = $request->image;
        $tool->save();
        return redirect(route('Tools.index'));
    }
    public function show($id){
        $tool = Tool::find($id);
        return view('Tools.show',['tool'=>$tool]);
    }
    public function destroy($id){
        $tool = Tool::find($id);
        $tool->delete();
        return redirect(route('Tools.index'));
    }
}
