<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mytime = Carbon::now();
        $curdate = Carbon::createFromFormat('Y-m-d H:i:s', $mytime->toDateTimeString())->format('Y-m-d');
        //get data
        // $schedule = DB::table('schedule_service')->get();

        $schedule = DB::table('schedule_service')->where('book_date',$curdate)->get();

        return view('home',['schedule' => $schedule]);
    }

    public function search()
    {
        $mytime = Carbon::now();
        $curdate = Carbon::createFromFormat('Y-m-d H:i:s', $mytime->toDateTimeString())->format('Y-m-d');
        //get data
        // $schedule = DB::table('schedule_service')->get();
        $book_date = Request::get('book_date', $curdate);
        $name = Request::get('name', '');
        $service = Request::get('service', '');
        $where = "";
        $query = DB::table('schedule_service');
        
        if(!empty($book_date)){
            $query = $query->where('book_date', '=', $book_date);

            // $where = [
            //     ['book_date', '=', $book_date],
            //     ['service', '=', $service],
            //     ['name', 'LIKE', '%' . $name . '%']
            // ];
        }
        if(!empty($service)){
            $query = $query->where('service', '=', $service);
            // $where = [
            //     ['name', 'LIKE', '%' . $name . '%']
            // ]; 
        }
        if(!empty($name)){
            $query = $query->where('name', 'LIKE', '%' . $name . '%');
            // $where = [
            //     ['name', 'LIKE', '%' . $name . '%']
            // ]; 
        }
        // $schedule = DB::table('schedule_service')
        // ->where($where)->get();

        $schedule = $query->get();

        // return view('home',['schedule' => $schedule]);
        return view('home',['schedule' => $schedule]);
    }
}
