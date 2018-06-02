<?php

namespace Uhura\Http\Controllers;

use Illuminate\Http\Request;

//my uses
use Uhura\Think;

class ThinkController extends Controller
{
    public function getThinkings(){
        return Think::orderBy('id','DESC')->get();
    }

    public function store(Request $request){
        $this->validate($request, [
            'desc'=>'required'
        ]);

        Think::create($request->all());
        return;
    }
}
