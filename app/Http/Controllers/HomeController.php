<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index() {
    	return view('welcome');
    }
    public function test(){
    	$name = "jiratchaya";
	    return view('test')->with('name',$name);
    }
    public function home(){
    	$name = "pin";
	    $pp = "Coe";
	//return view('index' compact('name'));
	return view('index')->with('name',$name)->with('pp',$pp);
    }
    public function report(Request $request) {
    	

    	$validator = Validator::make($request->all(),$this->rules(),$this->messages());
         
         if($validator->passes()){
         	return view('index')->with('name',$request->name)->with('age',$request->age);
         } else {
         	return back()->withErrors($validator)->withInput();
         }

    }
    public function rules(){
    	return [
    	 'name'=> 'required|alpha',
    	 'age' => 'required|numeric'
    	 ];
    }
    public function messages() {
    	 return [
    	     'name.required' => 'ห้ามเป็นช่องว่าง',
    	     'name.alpha' => 'ต้องเปลี่ยนเป็นตัวอักษรเท่านั้น',
    	     'age.required' => 'ห้ามเป็นช่องว่าง',
    	     'age.numeric' => 'ต้องเป็นตัวเลขเท่านั้น',
    	     ];
    }
}
