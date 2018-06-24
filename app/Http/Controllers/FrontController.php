<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Car;
use App\Front;
use App\Status;
use App\PromoPhrase;
use App\Door;
use App\Transmission;
use App\Passenger;
use App\Year;
use App\Country;
use App\FuelType;
use App\Bodystyle;
use App\Drivetrain;
use App\Condition;
use App\SpecialOffer;
use Session;
use Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($type =='pending'){
        //     $orders=Order::where('delivered','0')->get();
        // }elseif ($type == 'delivered'){
        //     $orders=Order::where('delivered','1')->get();
        // }else{
        //     $orders=Order::all();
        // }


        $slides = Slide::all();
        $inventory = Car::where('front_slide','1')->get();
        return view('user.index', compact('slides','inventory'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $this->validate($request, array(
        'name'=> 'required|max:255',
        'drivetrain'=> 'required|max:255',
        'body_style'=> 'required|max:255',
        'transmission'=> 'required|max:255',
        'model'=> 'required|max:255',
        'year'=> 'required|max:255',
        'description' => 'max:1000',
      ));

        $find_car = new Front;

          $find_car->name = $request->name;
          $find_car->drivetrain = $request->drivetrain;
          $find_car->body_style = $request->body_style;
          $find_car->transmission = $request->transmission;
          $find_car->year = $request->year;
          $find_car->model = $request->model;
          $find_car->description = $request->description;
//dd($request);
          $find_car->save();
          Session::flash('success', 'Your request has been received! We will get in touch with you shortly.');
          return redirect()->route('index');

    }


    public function show($id)
    {
        $cars = Car::find($id);
        return view('user.details', compact('cars'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


     public function inventory()
    {
        $inventory = Car::all();
        return view('user.inventory', compact('inventory'));
    }

    public function team()
    {
        //
    }

    public function contact()
    {
        //
    }
}
