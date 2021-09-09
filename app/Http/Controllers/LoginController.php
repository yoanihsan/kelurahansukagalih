<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoginController extends Controller
{
    //index page
    public function login()
    {
        //show to view
        return view('login/login');
    }

    //add page
    public function add($id){
        //show page
        if($id == 1){
            return view('schedule_service/add');
        }
        return view('schedule_service/add-service-kk');
    }

    //add page
    public function confirmation($id){
        //show page
        $schedule = DB::table('schedule_service')->where('id',$id)->get();

        return view('schedule_service/confirmation',['schedule' => $schedule]);
    }

    //save data
    public function create(Request $request){
        $last = DB::table('schedule_service')->where('book_date',$request->book_date)->orderBy('id', 'DESC')->first();
        $queue = 1;
        if(is_null($last)){
            $queue = 1;
        }else{
            $queue = $last->queue + 1;
        }
        // insert data ke table pegawai
        $id = DB::table('schedule_service')->insertGetId([
            'name' => $request->name,
            'book_date' => $request->book_date,
            'category' => $request->category,
            'queue' => $queue,
            'phone_number' => $request->phone_number,
            'service_id' => $request->service_id, //for pembuatan ktp
        ]);
        // $schedule = DB::table('schedule_service')->where('id',$id)->get();

        // alihkan halaman ke halaman
        // return view('/schedule_service/confirmation',['schedule' => $schedule]);
        // return redirect()->route('/schedule_service/confirmation/', ['id' => $id]);
        return redirect()->action(
            [ScheduleServiceController::class, 'confirmation'], ['id' => $id]
        );

        // return redirect('/schedule_service');
    }

}
