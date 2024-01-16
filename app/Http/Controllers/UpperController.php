<?php

namespace App\Http\Controllers;

use App\Models\Upper;
use Illuminate\Http\Request;

class UpperController extends Controller
{
    //
    public function index(){
        return Upper::all();
    }

    public function show($id){
        return Upper::find($id);
    }

    public function destroy($id){
        Upper::find($id)->delete();
    }
}
