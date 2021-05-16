<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(){
        return Division::all();
    }

    public function show($id) {
        return Division::find($id);
    }

    public function store(Request $request) {
        return Division::create($request->all());
    }

    public function update(Request $request, $id){
        $division = Division::findOrFail($id);
        $division->update($request->all());
        return $division;
    }

    public function delete($id){
        Division::find($id)->delete();
        return 204;
    }

    public function list_divisions($id) {
        return Division::find($id)->divisions;
    }

    public function  upper_division($id) {
        return Division::find($id)->parent;
    }
}
