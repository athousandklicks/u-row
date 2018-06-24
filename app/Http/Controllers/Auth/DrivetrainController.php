<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Drivetrain;
use Session;

class DrivetrainController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
       public function index()
{
    $drivetrains = Drivetrain::all();
    return view('admin.drivetrain.index', compact('drivetrains'));
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

        $drivetrains = new Drivetrain;
        $drivetrains->name = $request->name;
        $drivetrains->value = $request->name;

        $drivetrains->save();

        Session::flash('success', 'New Drivetrain has been Created');

        return redirect()->route('drivetrain.index');

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
        $drivetrains = Drivetrain::find($id);
        return view('admin.drivetrain.edit', compact('drivetrains'));
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
        $drivetrains = Drivetrain::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $drivetrains -> name = $request->input('name');
        $drivetrains -> value = $request->input('name');
        $drivetrains -> save(); //save to the database
        Session::flash('success','Drivetrain successfully updated'); //
        return redirect()->route('drivetrain.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drivetrains = Drivetrain::find($id);
        $drivetrains->delete();
        Session::flash('success','Drivetrain successfully deleted'); 
        return redirect()->route('drivetrain.index');
    }
}