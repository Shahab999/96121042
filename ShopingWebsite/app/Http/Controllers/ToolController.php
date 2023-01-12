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
    public function insert() {
        return view('Tools.insert');
    }
    public function create(Request $request) {
        $data = $request->all();
        Tool::create(['title'=>$data['title'],'price'=>$data['price'],'image'=>$data['image']]);
    }
}
