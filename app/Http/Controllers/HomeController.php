<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//認証機能を設ける
use Illuminate\Support\Facades\Auth;
//テーブルへアクセスするため、対応したモデルを記載
use App\Models\Staff;

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
        $me = Auth::user();
        if(is_null($me->staff)){
            $staff = new Staff();

        };

        return view('home');
    }
}
