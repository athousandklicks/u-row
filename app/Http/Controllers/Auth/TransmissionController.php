<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Transmission;
use Session;

class TransmissionController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
       public function index()
{
    $transmissions = Transmission::all();
    return view('admin.transmission.index', compact('transmissions'));
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

        $transmissions = new Transmission;
        $transmissions->name = $request->name;
        $transmissions->value = $request->name;

        $transmissions->save();

        Session::flash('success', 'New Transmission has been Created');

        return redirect()->route('transmission.index');

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
        $transmissions = Transmission::find($id);
        return view('admin.transmission.edit', compact('transmissions'));
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
        $transmissions = Transmission::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $transmissions -> name = $request->input('name');
        $transmissions -> value = $request->input('name');
        $transmissions -> save(); //save to the database
        Session::flash('success','Transmission successfully updated'); //
        return redirect()->route('transmission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transmissions = Transmission::find($id);
        $transmissions->delete();
        Session::flash('success','Transmission successfully deleted'); 
        return redirect()->route('transmission.index');
    }
}