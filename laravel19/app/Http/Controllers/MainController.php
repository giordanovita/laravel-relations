<?php

namespace App\Http\Controllers;
use App\Car;
use App\Pilot;
use App\Brand;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $cars = Car::all();
        return view('pages.home', compact('cars'));
    }

    public function pilots($id){
        $pilot = Pilot::findOrFail($id);
        return view('pages.pilots', compact('pilot'));
    }

    public function create(){

        $brands = Brand::all();
        $pilots = Pilot::all();
        
        return view('pages.create', compact('brands','pilots'));
    }

    public function store(Request $request){
        
        $validated = $request -> validate([
            'name' => 'required|string',
            'model' => 'required|string',
            'kW' => 'required|integer',
            'brand_id' => 'required|exists:brands,id|integer',
        ]);
        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car = Car::make($validated);
        $car -> brand() -> associate($brand);
        $car -> save();
        /* $car -> pilots() -> attach($request -> get('pilot_id'));
        $car -> save(); */
        
       

        return redirect() -> route('home');
    }
}
