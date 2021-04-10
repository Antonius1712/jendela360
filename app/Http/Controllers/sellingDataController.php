<?php

namespace App\Http\Controllers;

use App\Models\car_data;
use App\Models\selling_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\sellingDataRequest;

class sellingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carData = car_data::where('carStock', '>', 0)->get();
        $selling_data = selling_data::with('getCarData')->orderby('id','desc')->get();

        return view('pages/selling-data/index', compact('selling_data','carData'));
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
    public function store(sellingDataRequest $request)
    {
        $selling_data = selling_data::create($request->validated());

        $car_data = car_data::where('id',$request->purchasedCar)->first();
        $car_data->carStock = $car_data->carStock - 1;
        $car_data->save();

        $sendMail = Mail::send(
            'layouts.email-template', 
            array('selling_data'=>$selling_data), 
            function ($mail) 
                use ($selling_data) 
            {
                $mail->from(env('NO_REPLY_EMAIL'));
                $mail->to($selling_data->customerEmail);
                $mail->subject('Testing Email');
        });

        return $sendMail;
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        selling_data::FindOrFail($id)->delete();

        return 'sukses';
    }
}
