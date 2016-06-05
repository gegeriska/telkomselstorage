<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;

class BarangController extends Controller
{
    //
    public function index(){

      return view('');
    }

    public function view(){
      //
    }

    public function create(){
      return view('barang.create');
    }
    public function store(BarangFormRequest $request){
      //
      return $request->all();
    }
    public function show($id){
      //
    }


    public function edit($id){
      //
    }
    public function update($id){
      //
    }
    public function destroy($id){
      //
    }
}
