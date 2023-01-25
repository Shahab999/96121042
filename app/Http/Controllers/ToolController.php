<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use Illuminate\Support\Facades\Auth;

class ToolController extends Controller
{
    //
    public function index() {
        if(Auth::check() && Auth::user()->role == 'admin'){
            $tools = Tool::cursorPaginate(4)->fragment('tools');#all();
            $user = \Auth::user();
            return view('Tools.tools', ['tools'=>$tools], ['user' => $user]);
        }
        else{
            $tools = Tool::cursorPaginate(4)->fragment('tools');#all();
            $user = \Auth::user();
            return view('Tools.Ctools', ['tools'=>$tools], ['user' => $user]);
        }
        #abort(401);
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function create() {
        $user = \Auth::user();
        return view('Tools.create', ['user' => $user]);
    }
    public function store(Request $request) {
        $user = \Auth::user();
        $data = $request->all();
        Tool::create([
            'title'=>$data['title'],
            'price'=>$data['price'],
            'image'=>$data['image']
        ]);
        return redirect(route('Tools.index', ['user' => $user]));
    }
    public function update($id){
        $user = \Auth::user();
        $tool = Tool::find($id);
        return view('Tools.update',['tool'=>$tool], ['user' => $user]);
    }
    public function edit(Request $request) {
        $user = \Auth::user();
        $tool = Tool::find($request->id);
        $tool->title = $request->title;
        $tool->price = $request->price;
        $tool->image = $request->image;
        $tool->save();
        return redirect(route('Tools.index', ['user' => $user]));
    }
    public function show($id){
        $user = \Auth::user();
        $tool = Tool::find($id);
        return view('Tools.show',['tool'=>$tool], ['user' => $user]);
    }
    public function destroy($id){
        $user = \Auth::user();
        $tool = Tool::find($id);
        $tool->delete();
        return redirect(route('Tools.index'), ['user' => $user]);
    }
}
