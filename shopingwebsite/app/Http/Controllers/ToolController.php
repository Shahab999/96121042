<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
    //
    public function index() {
        $tools = Tool::all();
        return view('Tools.index', ['tools'=>$tools]);
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
    public function destroy($id){
        $tool = Tool::find($id);
        $tool->delete();
        return redirect(route('Tools.index'));
    }
}
