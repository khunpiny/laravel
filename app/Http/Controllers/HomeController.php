<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Human;

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
        $age = "20";
        $bmi = "ยังไม่คำนวณ";
	//return view('index' compact('name'));
	return view('index')->with('name',$name)->with('pp',$pp)->with('age',$age)->with('bmi',$bmi);
    }
    public function report(Request $request) {
    	
        $weight = $request->get('weight');
        $height = $request->get('height');

        $heights = $height/100;
        $bmi = $weight/($heights*$heights);

    	$validator = Validator::make($request->all(),$this->rules(),$this->messages());
         
         if($validator->passes()){
         	return view('index')->with('name',$request->name)->with('age',$request->age)->with('bmi',$bmi);
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
    public function humans() {
        $humans = Human::all();
        return view('human',['humans' => $humans]);
    }
    public function create() {
        return view('create');
    }

    public function createAction(Request $request) {
        $name = $request->name;
        $age = $request->age;

        $human = new Human;
        $human->name = $name;
        $human->age = $age;
        $human->save();

        return redirect('/humans');
    }
    public function update($id) {
        $human = Human::find($id);
        return view('update')->with('human',$human);
    }

    public function updateAction(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $age = $request->age;

        $human = Human::find($id);
        $human->name = $name;
        $human->age = $age;
        $human->save();

        return redirect('/humans');

    }
    public function delete($id) {
        Human::destroy($id);
        return redirect('/humans');
    }
}
