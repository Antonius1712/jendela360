<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index(){
        return view('pages.report.index');
    }
}
