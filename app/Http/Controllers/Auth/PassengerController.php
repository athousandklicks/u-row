<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Passenger;
use Session;

class PassengerController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
      public function index()
{
    $passengers = Passenger::all();
    return view('admin.passenger.index', compact('passengers'));
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

        $passengers = new Passenger;
        $passengers->name = $request->name;
        $passengers->value = $request->name;

        $passengers->save();

        Session::flash('success', 'New Passenger has been Created');

        return redirect()->route('passenger.index');

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
        $passengers = Passenger::find($id);
        return view('admin.passenger.edit', compact('passengers'));
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
        $passengers = Passenger::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $passengers -> name = $request->input('name');
        $passengers -> value = $request->input('name');
        $passengers -> save(); //save to the database
        Session::flash('success','Passenger successfully updated'); //
        return redirect()->route('passenger.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passengers = Passenger::find($id);
        $passengers->delete();
        Session::flash('success','Passenger successfully deleted'); 
        return redirect()->route('passenger.index');
    }
}