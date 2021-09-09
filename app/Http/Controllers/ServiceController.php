<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //index page
    public function index()
    {
        //get data
        $services = DB::table('services')->get();

        //show to view
        return view('service/index',['services' => $services]);
    
    }
}
