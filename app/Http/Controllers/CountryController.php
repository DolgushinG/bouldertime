<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country_form', ['countries' => $countries]);
    }

    public function selectCity(Request $request){
        if($request->ajax()){
            $cities = City::where('id_country',$request->id_country)->get()->pluck("name","id");
            $data = view('selectcity',['cities' => $cities])->render();
            return response()->json(['options'=>$data]);
        }
    }
}
