<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Year;
use Session;

class YearController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
      public function index()
{
    $years = Year::all();
    return view('admin.year.index', compact('years'));
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

        $years = new Year;
        $years->name = $request->name;
        $years->value = $request->name;

        $years->save();

        Session::flash('success', 'New Year has been Created');

        return redirect()->route('year.index');

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
        $years = Year::find($id);
        return view('admin.year.edit', compact('years'));
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
        $years = Year::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $years -> name = $request->input('name');
        $years -> value = $request->input('name');
        $years -> save(); //save to the database
        Session::flash('success','Year successfully updated'); //
        return redirect()->route('year.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $years = Year::find($id);
        $years->delete();
        Session::flash('success','Year successfully deleted'); 
        return redirect()->route('year.index');
    }
}