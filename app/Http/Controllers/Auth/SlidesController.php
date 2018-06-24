<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Slide;
use Session;

class SlidesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.index', compact('slides'));
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
            'image_link' => 'image|mimes:png,jpg,jpeg|max:10000'
        ));

        $slides = new Slide;

        if ($request->hasFile('image_link')) {
            $image=$request->image_link;
            if($image){
                $imageName=time().'_'.$image->getClientOriginalName();
                $image->move('images/slides/', $imageName);
                $slides['image_link']=$imageName;
            }
        }

        // dd($request);
        $slides->save();
        Session::flash('success', 'Slide was successfully added.');
        return redirect()->route('slide.index');
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
        $slides = Slide::find($id);
        return view('admin.slides.edit', compact('slides'));
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
        $this->validate($request, array(
            'image_link' => 'image|mimes:png,jpg,jpeg|max:10000'
        ));

        $slides = new Slide;

        if ($request->hasFile('image_link')) {
            $image=$request->image_link;
            if($image){
                $imageName=time().'_'.$image->getClientOriginalName();
                $image->move('images/slides/', $imageName);
                $slides['image_link']=$imageName;
            }
        }

        $slides->save();
        Session::flash('success', 'Slide was successfully Updates.');
        return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slides = Slide::find($id);
        $slides->delete();
        Session::flash('success','Slide successfully deleted'); 
        return redirect()->route('slide.index');
    }
}
