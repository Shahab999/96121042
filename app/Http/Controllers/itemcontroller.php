<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemcontroller extends Controller
{
    //
    public function itemlist() {
        return view('items');
    }
}
