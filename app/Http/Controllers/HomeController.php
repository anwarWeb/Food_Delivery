<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Food;
class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foods = Food::with('category')->get();
        return view('frontend.index',compact('foods'));
    }
}
