<?php

namespace App\Http\Controllers;

use App\Http\Requests\carDataRequest;
use App\Models\car_data;
use Illuminate\Http\Request;

class carDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carDatas = car_data::all();
        return view('pages/car-data/index', compact('carDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(carDataRequest $request)
    {
        $car_data = car_data::create($request->validated());

        return $car_data;
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
        $car_data = car_data::FindOrFail($id);

        return $car_data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(carDataRequest $request, $id)
    {
        $car_data = car_data::FindOrFail($id);
        $car_data->carName = $request->carName;
        $car_data->carPrice = $request->carPrice;
        $car_data->carStock = $request->carStock;
        $car_data->save();

        return $car_data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_data = car_data::FindOrFail($id)->delete();
    
        return 'sukses';
    }

    public function getCarData(){
        $carData = car_data::all();

        foreach( $carData as $key => $val ){
            $data['carName'][$key] = $val->carName;
            $data['carPrice'][$key] = $val->carPrice;
            $data['carStock'][$key] = $val->carStock;
        }

        return $data;
    }
}
