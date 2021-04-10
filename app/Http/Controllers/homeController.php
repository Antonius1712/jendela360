<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\selling_data;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    public function index(){

        // DAILY
        $sellingDataDaily = selling_data::with('getCarData')
                        ->whereBetween('created_at', [today(), today()->addDays(1)])
                        ->get();
        $totalEarningDaily = 0;
        foreach( $sellingDataDaily as $key => $val ){
            $totalEarningDaily += $val->getCarData->carPrice;
        }
        $totalSellingDaily = count($sellingDataDaily);


        //YESTERDAY
        $sellingDataYesterday = selling_data::with('getCarData')
                        ->whereBetween('created_at', [today()->subDays(1), today()])
                        ->get();
        $totalEarningYesterday = 0;
        foreach( $sellingDataYesterday as $key => $val ){
            $totalEarningYesterday += $val->getCarData->carPrice;
        }
        $totalSellingYesterday = count($sellingDataYesterday);

        //PERCENTAGE
        if( $totalSellingYesterday > $totalSellingDaily ){
            $percentageDaily = number_format((($totalSellingYesterday - $totalSellingDaily) / $totalSellingYesterday) * 100, 2);
            $increaseDecreaseDaily = '-';
        }else{
            $percentageDaily = number_format((($totalSellingDaily - $totalSellingYesterday) / $totalSellingYesterday) * 100,2);
            $increaseDecreaseDaily = '+';
        }
        
        // dd( $totalSellingYesterday, $totalSellingDaily, today()->subDays(1), today(), today()->addDays(1) );



        $sellingDataWeekly = selling_data::with('getCarData')
                        ->whereBetween('created_at', [today()->subDay(7), today()])
                        ->get();

        $totalEarningWeekly = 0;
        foreach( $sellingDataWeekly as $key => $val ){
            $totalEarningWeekly += $val->getCarData->carPrice;
        }
        $totalSellingWeekly = count($sellingDataWeekly);

        

        return view('index', compact('sellingDataDaily','totalEarningDaily','totalSellingDaily',
                                    'totalEarningWeekly','totalSellingWeekly','percentageDaily',
                                    'increaseDecreaseDaily'));
    }

    public function getLogin(){
        return view('layouts.login');
    }

    public function getRegister(){
        return view('layouts.register');
    }

    public function register(userRequest $request){
        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('index');
    }

    public function login(request $request){
        if (Auth::guard()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended(route('index'));
        }

        return redirect()->back()->withInput($request->only('username'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
