<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\SpecialOffer;
use Session;

class SpecialOfferController extends Controller
{
 public function __construct()
 {
    $this->middleware('auth:admin');
}
public function index()
{
    $specialoffers = SpecialOffer::all();
    return view('admin.specialOffer.index', compact('specialoffers'));
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

        $specialoffers = new SpecialOffer;
        $specialoffers->name = $request->name;
        $specialoffers->value = $request->name;

        $specialoffers->save();

        Session::flash('success', 'New Special Offer has been Created');

        return redirect()->route('specialOffer.index');

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
        $specialoffers = SpecialOffer::find($id);
        return view('admin.specialOffer.edit', compact('specialoffers'));
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
        $specialoffers = SpecialOffer::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $specialoffers -> name = $request->input('name');
        $specialoffers -> value = $request->input('name');
        $specialoffers -> save(); //save to the database
        Session::flash('success','Special Offer successfully updated'); //
        return redirect()->route('specialOffer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialoffers = SpecialOffer::find($id);
        $specialoffers->delete();
        Session::flash('success','Special Offer successfully deleted'); 
        return redirect()->route('specialOffer.index');
    }
}