<?php

namespace App\Http\Controllers;

use App\Bottles;
use App\UserNotifications;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Psy\debug;


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
        $id = Auth::id();
        $todayBegin = Carbon::today()->format('Y-m-d').' 00:00:00';
        $todayEnd = Carbon::today()->format('Y-m-d').' 23:59:59';
        $quantity = 0;
        $arraypipi = [];
        $arraycaca = [];
        $lastpipitime = "";
        $lastcacatime = "";
        $bottles = Bottles::where('id_user',$id)->orderBy('created_at', 'desc')->latest()->paginate(3);
        $quantityquery = Bottles::whereBetween('created_at', [$todayBegin, $todayEnd])->select('quantity')->where('id_user',$id)->get();
        foreach ($quantityquery as $k=>$v){
            $quantity = $quantity + $v->quantity;
        }
        $pipicaca = Bottles::where('id_user', $id)->orderBy('created_at', 'desc')->get();
        foreach ($pipicaca as $value){
            if ($value->pipi == 1){
                array_push($arraypipi, $value->created_at);
            }
            if ($value->caca == 1) {
                array_push($arraycaca, $value->created_at);
            }
        }
        if (count($arraypipi) > 0) {
            $lastpipitime = array_values($arraypipi)[0];
        } else {
            $lastpipitime = "NC";
        }
        if (count($arraycaca) > 0) {
            $lastcacatime = array_values($arraycaca)[0];
        } else {
            $lastcacatime = "NC";
        }
        $notificationsnumber = UserNotifications::where('id_user', $id)->count();
        $notifications = UserNotifications::where('id_user', $id)->take(30)->get();



        return view('home', compact(['bottles', 'quantity', 'lastpipitime', 'lastcacatime', 'notificationsnumber', 'notifications']));
    }
}
