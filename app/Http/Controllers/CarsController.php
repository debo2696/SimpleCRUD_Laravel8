<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $st=microtime(true);
        $cars= Car::all();
        /*$cars=Car::where('name', '=', '')
        ->get();*/
        /*$cars = Car::chunk(2, function ($cars){
            foreach($cars as $car){print_r($car);}
        });*/
        /*$cars= Car::where('name', '=', 'Audi')
        ->findOrFail();*/
        Car::sum('founded'); //adds all under founded
        Car::avg('founded'); //avg all under founded
        $et=microtime(true);
        $t=$et-$st;
        //dd($cars, $t);
        return view('index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$car = new Car;
        $car->name= $request->name;
        $car->description= $request->description;
        $car->founded= $request->founded;
        $car->save();*/

        $car=Car::create([
            'name' => $request->name,
            'description' => $request->description,
            'founded' => $request->founded,
        ]);

        return redirect('cars'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car= Car::find($id)->first(); //find returns collection hence needs to loop over however first will send object 
        return view('cars.edit')->with('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $car = Car::where('id',$id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'founded' => $request->founded,
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return redirect('/cars');
    }
}
