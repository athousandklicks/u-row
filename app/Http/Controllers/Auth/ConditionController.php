<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Condition;
use Session;

class ConditionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
}

public function index()
{
    $conditions = Condition::all();
    return view('admin.Condition.index', compact('conditions'));
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

        $conditions = new Condition;
        $conditions->name = $request->name;
        $conditions->value = $request->name;

        $conditions->save();

        Session::flash('success', 'New Condition has been Created');

        return redirect()->route('condition.index');

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
        $conditions = Condition::find($id);
        return view('admin.condition.edit', compact('conditions'));
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
        $conditions = Condition::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $conditions -> name = $request->input('name');
        $conditions -> value = $request->input('name');
        $conditions -> save(); //save to the database
        Session::flash('success','Condition successfully updated'); //
        return redirect()->route('condition.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conditions = Condition::find($id);
        $conditions->delete();
        Session::flash('success','Condition successfully deleted'); 
        return redirect()->route('condition.index');
    }
}
