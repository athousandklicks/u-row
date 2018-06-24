<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Status;
use Session;

class StatusController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
       public function index()
{
    $statuss = Status::all();
    return view('admin.status.index', compact('statuss'));
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

        $statuss = new Status;
        $statuss->name = $request->name;
        $statuss->value = $request->name;

        $statuss->save();

        Session::flash('success', 'New Status has been Created');

        return redirect()->route('status.index');

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
        $statuss = Status::find($id);
        return view('admin.status.edit', compact('statuss'));
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
        $statuss = Status::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $statuss -> name = $request->input('name');
        $statuss -> value = $request->input('name');
        $statuss -> save(); //save to the database
        Session::flash('success','Status successfully updated'); //
        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statuss = Status::find($id);
        $statuss->delete();
        Session::flash('success','Status successfully deleted'); 
        return redirect()->route('status.index');
    }
}