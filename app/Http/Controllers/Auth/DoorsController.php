<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Door;
use Session;

class DoorsController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
      public function index()
{
    $doors = Door::all();
    return view('admin.door.index', compact('doors'));
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

        $doors = new Door;
        $doors->name = $request->name;
        $doors->value = $request->name;

        $doors->save();

        Session::flash('success', 'New Door has been Created');

        return redirect()->route('door.index');

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
        $doors = Door::find($id);
        return view('admin.door.edit', compact('doors'));
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
        $doors = Door::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $doors -> name = $request->input('name');
        $doors -> value = $request->input('name');
        $doors -> save(); //save to the database
        Session::flash('success','Door successfully updated'); //
        return redirect()->route('door.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doors = Door::find($id);
        $doors->delete();
        Session::flash('success','Door successfully deleted'); 
        return redirect()->route('door.index');
    }
}