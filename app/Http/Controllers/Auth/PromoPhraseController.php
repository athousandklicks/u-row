<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\PromoPhrase;
use Session;

class PromoPhraseController extends Controller
{
      public function __construct()
  {
    $this->middleware('auth:admin');
}
       public function index()
{
    $promophrases = PromoPhrase::all();
    return view('admin.promoPhrase.index', compact('promophrases'));
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

        $promophrases = new PromoPhrase;
        $promophrases->name = $request->name;
        $promophrases->value = $request->name;

        $promophrases->save();

        Session::flash('success', 'New PromoPhrase has been Created');

        return redirect()->route('promoPhrase.index');

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
        $promophrases = PromoPhrase::find($id);
        return view('admin.promoPhrase.edit', compact('promophrases'));
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
        $promophrases = PromoPhrase::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $promophrases -> name = $request->input('name');
        $promophrases -> value = $request->input('name');
        $promophrases -> save(); //save to the database
        Session::flash('success','PromoPhrase successfully updated'); //
        return redirect()->route('promoPhrase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promophrases = PromoPhrase::find($id);
        $promophrases->delete();
        Session::flash('success','PromoPhrase successfully deleted'); 
        return redirect()->route('promoPhrase.index');
    }
}