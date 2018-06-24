<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Bodystyle;
use Session;

class BodyStyleController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
}

public function index()
{
    $bodystyles = Bodystyle::all();
    return view('admin.bodystyle.index', compact('bodystyles'));
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

        $bodystyles = new Bodystyle;
        $bodystyles->name = $request->name;
        $bodystyles->value = $request->name;

        $bodystyles->save();

        Session::flash('success', 'New body Style has been Created');

        return redirect()->route('bodystyle.index');

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
        $bodystyles = Bodystyle::find($id);
        return view('admin.bodystyle.edit', compact('bodystyles'));
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
        $bodystyles = Bodystyle::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $bodystyles -> name = $request->input('name');
        $bodystyles -> value = $request->input('name');
        $bodystyles -> save(); //save to the database
        Session::flash('success','Body Style successfully updated'); //
        return redirect()->route('bodystyle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bodystyles = Bodystyle::find($id);
        $bodystyles->delete();
        Session::flash('success','Body Style successfully deleted'); 
        return redirect()->route('bodystyle.index');
    }
}
