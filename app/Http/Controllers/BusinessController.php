<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Business;
use DB;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index', 'edit', 'delete']]);
        // Alternativly
        $this->middleware('auth', ['except' => ['create', 'show','store']]);
    }

    public function index()
    {
        $businesses = Business::paginate(5);
        return view('businesses.index')->withBusiness($businesses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = DB::table("countries")->lists("name","id");
        $business = Business::all();
        return  view('businesses.create',compact('countries'));
    }
    
//     public function getStateList(Request $request)
//    {
//        $states = DB::table("states")
//                    ->where("country_id",$request->country_id)
//                    ->lists("name","id");
//        return response()->json($states);
//    }
//    public function getCityList(Request $request)
//    {
//        $cities = DB::table("cities")
//                    ->where("state_id",$request->state_id)
//                    ->lists("name","id");
//        return response()->json($cities);
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Validate Data*/
        $this->validate($request, array(
            'c_name' => 'required | max:255',
            'b_of_company'=>'required | max:255',
            'c_state' => 'required | max:255',
            'line1' => 'required | max:255',
            'line2' => 'required | max:255',
            'line3' => 'required | max:255',
            'c_city' => 'required | max:255',
            'c_locality' => 'required | max:255',
            'pemail' => 'required | email | max:255  ',
            'pdesignation' => 'required | max:255  ',
            'pphone' => 'required | numeric | digits:10',
            'kemail' => ' email | max:255  ',
            'kdesignation' => ' max:255  ',
            'kphone' => ' numeric | digits:10',
            'name_entrepreneur[]'=>'required | max:255',
            'name_director[]' => 'required | max:255',
            'turnover' => 'required | max:50',
            'key_issue' => 'required | max:255',
            'meeting' => 'required | max:255'
        ));
        
        

        /*Store Data in Data Base*/
        $business = new Business;

        $business->c_name = $request -> c_name;
        $business->b_of_company = $request->b_of_company;
        $business->c_state = $request->c_state;
        $business->line1 = $request->line1;
        $business->line2 = $request->line2;
        $business->line3 = $request->line3;
        $business->c_city = $request->c_city;
        $business->c_locality = $request->c_locality;
        $business-> pemail = $request->pemail;
        $business->pphone = $request->pphone;
        $business->pdesignation = $request->pdesignation;
        $business->kemail = $request->kemail;
        $business->kphone = $request->kphone;
        $business->kdesignation = $request->kdesignation;
//        $business->name_entrepreneur = $request->name_entrepreneur;
//        $business->name_director = $request->name_director;
        $business->turnover = $request->turnover;
        $business->key_issue = $request->key_issue;
        $business->meeting = $request->meeting;
      /*  $post ->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body  = $request->body;*/

        $business->save();

        Session::flash('success', 'Your Query Has Been Sucessfully Saved !');

        /*Redirect To Another Page*/
        return redirect()->route('businesses.show', $business->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business = Business::find($id);
        return view('businesses.show')->withBusinesses($business);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
