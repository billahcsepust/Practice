<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function index(){
        $page_name='Country Page';
        $data = Country::all();
        return view('country.list',compact('data','page_name'));
    }
    public function create(){
        return view('country.create');
    }
    public function store(Request $request){
          $this->validate($request,[
              'name'=>'required',
              'code'=>'required'
          ]);
        $country=new Country();
        $country->name=$request->name;
        $country->code=$request->code;
        $country->currency=$request->currency;
        $country->phone_extension=$request->phone_extension;
        $country->save();
        return redirect()->action('CountryController@index');
    }
    public function edit($id){
        $country=Country::find($id);
        return view('country.edit',compact('country'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required'
        ]);
        $country=Country::find($id);
        $country->name=$request->name;
        $country->code=$request->code;
        $country->currency=$request->currency;
        $country->phone_extension=$request->phone_extension;
        $country->save();
        return redirect()->action('CountryController@index');
    }
    public function destroy($id){
        Country::where('id',$id)->delete();
        return redirect()->action('CountryController@index');
    }
}
