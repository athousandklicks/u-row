<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Country;
use Session;

class CountryController extends Controller
{
   public function __construct()
  {
    $this->middleware('auth:admin');
}
      public function index()
{
    $countrys = Country::all();
    return view('admin.country.index', compact('countrys'));
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

        $countrys = new Country;
        $countrys->name = $request->name;
        $countrys->value = $request->name;

        $countrys->save();

        Session::flash('success', 'New Country has been Created');

        return redirect()->route('country.index');

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
        $countrys = Country::find($id);
        return view('admin.country.edit', compact('countrys'));
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
        $countrys = Country::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $countrys -> name = $request->input('name');
        $countrys -> value = $request->input('name');
        $countrys -> save(); //save to the database
        Session::flash('success','Country successfully updated'); //
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countrys = Country::find($id);
        $countrys->delete();
        Session::flash('success','Country successfully deleted'); 
        return redirect()->route('country.index');
    }
}