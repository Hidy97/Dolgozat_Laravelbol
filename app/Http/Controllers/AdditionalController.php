<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    //

    public function index(){
        return Additional::all();
    }

    public function show($id){
        return Additional::find($id);
    }

    public function destroy($id){
        Additional::find($id)->delete();
    }

    public function newView(){
        $additionals = Additional::all();
        return view('additional.new', ['additionals' => $additionals]);
    }

    public function editView(){
        $additionals = Additional::all();
        return view('additional.list', ['additional' => $additionals]);
    }
}
