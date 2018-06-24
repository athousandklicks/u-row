<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\FuelType;
use Session;

class FuelTypeController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
       public function index()
{
    $fueltypes = FuelType::all();
    return view('admin.fueltype.index', compact('fueltypes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $fueltypes = new FuelType;
        $fueltypes->name = $request->name;
        $fueltypes->value = $request->name;

        $fueltypes->save();

        Session::flash('success', 'New Fuel Type has been Created');

        return redirect()->route('fueltype.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fueltypes = FuelType::find($id);
        return view('admin.fueltype.edit', compact('fueltypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fueltypes = FuelType::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $fueltypes -> name = $request->input('name');
        $fueltypes -> value = $request->input('name');
        $fueltypes -> save(); //save to the database
        Session::flash('success','Fuel Type successfully updated'); //
        return redirect()->route('fueltype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fueltypes = FuelType::find($id);
        $fueltypes->delete();
        Session::flash('success','Fuel Type successfully deleted'); 
        return redirect()->route('fueltype.index');
    }
}