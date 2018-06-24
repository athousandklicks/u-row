<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
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


class CarsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $cars = Car::all();
      return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $status = Status::pluck('name', 'value');
      $promo_phrase = PromoPhrase::pluck('name', 'value');
      $door = Door::pluck('name', 'value');
      $transmission = Transmission::pluck('name', 'value');
      $passenger = Passenger::pluck('name', 'value');
      $year = Year::pluck('name', 'value');
      $country = Country::pluck('name', 'value');
      $fuel_type = FuelType::pluck('name', 'value');
      $body_style = Bodystyle::pluck('name', 'value');
      $drivetrain = Drivetrain::pluck('name', 'value');
      $condition = Condition::pluck('name', 'value');
      $special_offer = SpecialOffer::pluck('name', 'value');


      return view('admin.cars.create',compact('status','promo_phrase','door','transmission','passenger','year','country','fuel_type','body_style','drivetrain','condition','special_offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              // dd($request);
      $this->validate($request, array(
        'name'=> 'required|max:255',
        'drivetrain'=> 'required|max:255',
        'body_style'=> 'required|max:255',
        'transmission'=> 'required|max:255',
        'mileage' => 'required|max:255',
        'price'=> 'required|between:0,99.99',
        'year'=> 'required|max:255',
        'country'=> 'required|max:255',
        'model'=> 'required|max:255',
        'vin_number'=> 'required|max:255',
        'engine'=> 'required|max:255',
        'fuel_type' => 'required|max:255',
        'condition' => 'required|max:255',
        'special_offer'=> 'required|max:255',
        'status' => 'max:11',
        'description' => 'max:10000',
        'comment' => 'max:10000',
        'promo_phrase' => 'max:255',
        'doors' => 'required|max:11',
        'passengers' => 'required|max:11',
        'miles' => 'required|max:255',
        'interior' => 'required|max:255',
        'exterior' => 'required|max:255',
        'image_full'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_dashboard'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_leftside'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_rightside'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_back'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_engine'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_boot'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_frontseat'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_backseat'=>'image|mimes:png,jpg,jpeg|max:10000',
        'image_front'=>'image|mimes:png,jpg,jpeg|max:10000',
        'video' => 'max:255'
      ));

      $cars = new Car;

      $cars->name = $request->name;
      $cars ->stock_number = rand(1, 100000000);
      $cars->drivetrain = $request->drivetrain;
      $cars->body_style = $request->body_style;
      $cars->transmission = $request->transmission;
      $cars->mileage = $request->mileage;
      $cars->price = $request->price;
      $cars->year = $request->year;
      $cars->country = $request->country;
      $cars->model = $request->model;
      $cars->vin_number = $request->vin_number;
      $cars->engine = $request->engine;
      $cars->fuel_type = $request->fuel_type;
      $cars->condition = $request->condition;
      $cars->special_offer = $request->special_offer;
      $cars->status = $request->status;
      $cars->description = $request->description;
      $cars->comment = $request->comment;
      $cars->promo_phrase = $request->promo_phrase;
      $cars->doors = $request->doors;
      $cars->passengers = $request->passengers;
      $cars->miles = $request->miles;
      $cars->interior = $request->interior;
      $cars->exterior = $request->exterior;
      $cars->video = $request->video;



        $image=$request->image_full;
        if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images/cars/', $imageName);
          $cars['image_full']=$imageName;
        }


      $image=$request->image_dashboard;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/cars/', $imageName);
        $cars['image_dashboard']=$imageName;
      }

      $image=$request->image_leftside;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/cars/', $imageName);
        $cars['image_leftside']=$imageName;
      }


      $image=$request->image_rightside;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/cars/', $imageName);
        $cars['image_rightside']=$imageName;
      }


      $image=$request->image_back;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/cars/', $imageName);
        $cars['image_back']=$imageName;
      }

      $image=$request->image_engine;
      if($image){
        $imageName=$image->getClientOriginalName();
        $image->move('images/cars/', $imageName);
        $cars['image_engine']=$imageName;
      }


      $image=$request->image_boot;
      if($image){
       $imageName=$image->getClientOriginalName();
       $image->move('images/cars/', $imageName);
       $cars['image_boot']=$imageName;
     }

     $image=$request->image_frontseat;
     if($image){
      $imageName=$image->getClientOriginalName();
      $image->move('images/cars/', $imageName);
      $cars['image_frontseat']=$imageName;
    }


    $image=$request->image_backseat;
    if($image){
      $imageName=$image->getClientOriginalName();
      $image->move('images/cars/', $imageName);
      $cars['image_backseat']=$imageName;
    }

    $image=$request->image_front;
    if($image){
      $imageName=$image->getClientOriginalName();
      $image->move('images/cars/', $imageName);
      $cars['image_front']=$imageName;
    }

    $cars->save();

    Session::flash('success', 'New cars has been created');

    return redirect()->route('car.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cars = Car::find($id);
      return view('admin.cars.details', compact('cars'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cars = Car::find($id);
      $statuss = Status::all();
      $promo_phrases = PromoPhrase::all();
      $doors = Door::all();
      $transmissions = Transmission::all();
      $passengers = Passenger::all();
      $years = Year::all();
      $countrys = Country::all();
      $fuel_types = FuelType::all();
      $body_styles = Bodystyle::all();
      $drivetrains = Drivetrain::all();
      $conditions = Condition::all();
      $special_offers = SpecialOffer::all();


      $_status = array();
      foreach ($statuss as $status) {
        $_status[$status->name] = $status->value;
      }

      $_body_style = array();
      foreach ($body_styles as $body_style) {
        $_body_style[$body_style->name] = $body_style->value;
      }

      $_promo_phrase = array();
      foreach ($promo_phrases as $promo_phrase) {
        $_promo_phrase[$promo_phrase->name] = $promo_phrase->value;
      }

      $_door = array();
      foreach ($doors as $door) {
        $_door[$door->name] = $door->value;
      }

      $_transmission = array();
      foreach ($transmissions as $transmission) {
        $_transmission[$transmission->name] = $transmission->value;
      }

      $_passenger = array();
      foreach ($passengers as $passenger) {
        $_passenger[$passenger->name] = $passenger->value;
      }

      $_year = array();
      foreach ($years as $year) {
        $_year[$year->name] = $year->value;
      }

      $_country = array();
      foreach ($countrys as $country) {
        $_country[$country->name] = $country->value;
      }

      $_fuel_type = array();
      foreach ($fuel_types as $fuel_type) {
        $_fuel_type[$fuel_type->name] = $fuel_type->value;
      }

      $_drivetrain = array();
      foreach ($drivetrains as $drivetrain) {
        $_drivetrain[$drivetrain->name] = $drivetrain->value;
      }

      $_condition = array();
      foreach ($conditions as $condition) {
        $_condition[$condition->name] = $condition->value;
      }

      $_special_offer = array();
      foreach ($special_offers as $special_offer) {
        $_special_offer[$special_offer->name] = $special_offer->value;
      }


      return view('admin.cars.edit', compact('cars','_status', '_body_style', '_promo_phrase', '_door', '_transmission', '_passenger', '_year', '_country', '_fuel_type', '_drivetrain', '_condition', '_special_offer'));
    }


    public function update(Request $request, $id)
    {
      //dd($request);

      $cars = Car::find($id);

      $this->validate($request, array(
        'name'=> 'required|max:255',
        'drivetrain'=> 'required|max:255',
        'body_style'=> 'required|max:255',
        'transmission'=> 'required|max:255',
        'mileage' => 'required|max:255',
        'price'=> 'required|between:0,99.99',
        'year'=> 'required|max:255',
        'country'=> 'required|max:255',
        'model'=> 'required|max:255',
        'vin_number'=> 'required|max:255',
        'engine'=> 'required|max:255',
        'fuel_type' => 'required|max:255',
        'condition' => 'required|max:255',
        'special_offer'=> 'required|max:255',
        'status' => 'max:11',
        'description' => 'max:10000',
        'comment' => 'max:10000',
        'promo_phrase' => 'max:255',
        'doors' => 'required|max:11',
        'passengers' => 'required|max:11',
        'miles' => 'required|max:255',
        'interior' => 'required|max:255',
        'exterior' => 'required|max:255',
        'video' => 'max:255'
      ));

      $cars->name = $request->input('name');
      $cars->drivetrain = $request->input('drivetrain');
      $cars->body_style = $request->input('body_style');
      $cars->transmission = $request->input('transmission');
      $cars->mileage = $request->input('mileage');
      $cars->price = $request->input('price');
      $cars->year = $request->input('year');
      $cars->country = $request->input('country');
      $cars->model = $request->input('model');
      $cars->vin_number = $request->input('vin_number');
      $cars->engine = $request->input('engine');
      $cars->fuel_type = $request->input('fuel_type');
      $cars->condition = $request->input('condition');
      $cars->special_offer = $request->input('special_offer');
      $cars->status = $request->input('status');
      $cars->description = $request->input('description');
      $cars->comment = $request->input('comment');
      $cars->promo_phrase = $request->input('promo_phrase');
      $cars->doors = $request->input('doors');
      $cars->passengers = $request->input('passengers');
      $cars->miles = $request->input('miles');
      $cars->interior = $request->input('interior');
      $cars->exterior = $request->input('exterior');
      $cars->video = $request->input('video');


      if ($request->hasFile('image_full')) {
        $image_full=$request->image_full;
        if($image_full){
          $imageName=$image_full->getClientOriginalName();
          $image_full->move('images/cars/', $imageName);
          $cars['image_full']=$imageName;
        }
      }

      if ($request->hasFile('image_dashboard')) {
        $image_dashboard=$request->image_dashboard;
        if($image_dashboard){
          $imageName=$image_dashboard->getClientOriginalName();
          $image_dashboard->move('images/cars/', $imageName);
          $cars['image_dashboard']=$imageName;
        }
      }

      if ($request->hasFile('image_leftside')) {
        $image_leftside=$request->image_leftside;
        if($image_leftside){
          $imageName=$image_leftside->getClientOriginalName();
          $image_leftside->move('images/cars/', $imageName);
          $cars['image_leftside']=$imageName;
        }
      }

      if ($request->hasFile('image_rightside')) {
        $image_rightside=$request->image_rightside;
        if($image_rightside){
          $imageName=$image_rightside->getClientOriginalName();
          $image_rightside->move('images/cars/', $imageName);
          $cars['image_rightside']=$imageName;
        }
      }

      if ($request->hasFile('image_back')) {
        $image_back=$request->image_back;
        if($image_back){
          $imageName=$image_back->getClientOriginalName();
          $image_back->move('images/cars/', $imageName);
          $cars['image_back']=$imageName;
        }
      }

      if ($request->hasFile('image_engine')) {
        $image_engine=$request->image_engine;
        if($image_engine){
          $imageName=$image_engine->getClientOriginalName();
          $image_engine->move('images/cars/', $imageName);
          $cars['image_engine']=$imageName;
        }
      }

      if ($request->hasFile('image_boot')) {
        $image_boot=$request->image_boot;
        if($image_boot){
          $imageName=$image_boot->getClientOriginalName();
          $image_boot->move('images/cars/', $imageName);
          $cars['image_boot']=$imageName;
        }
      }

      if ($request->hasFile('image_frontseat')) {
        $image_frontseat=$request->image_frontseat;
        if($image_frontseat){
          $imageName=$image_frontseat->getClientOriginalName();
          $image_frontseat->move('images/cars/', $imageName);
          $cars['image_frontseat']=$imageName;
        }
      }

      if ($request->hasFile('image_backseat')) {
        $image_backseat=$request->image_backseat;
        if($image_backseat){
          $imageName=$image_backseat->getClientOriginalName();
          $image_backseat->move('images/cars/', $imageName);
          $cars['image_backseat']=$imageName;
        }
      }

      if ($request->hasFile('image_front')) {
        $image_front=$request->image_front;
        if($image_front){
          $imageName=$image_front->getClientOriginalName();
          $image_front->move('images/cars/', $imageName);
          $cars['image_front']=$imageName;
        }
      }

      $cars->save();

      Session::flash('success', 'This car details was successfully updated.');
        return redirect()->route('car.show', $cars->id);//
      }


      public function destroy($id)
      {
        //find the item to delete
        $cars = Car::find($id);
        $cars->delete();
        Session::flash('success','Record successfully deleted'); 
        return redirect()->route('car.index');
      }



//     function generateRandomString($length = 3) 
//     {
//     $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }


    }
