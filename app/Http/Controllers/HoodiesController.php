<?php

namespace App\Http\Controllers;
use App\Hoodie;
use Session;
use Image;
use Storage;
use Illuminate\Http\Request;

class HoodiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoodies = Hoodie::all();
        return view('hoodies.index')->withHoodies($hoodies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hoodies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // vcalidate form data
        $this->validate($request,[
            "name"=>"required|max:100",
            "actualPrice"=>"required|integer",
            "sellingPrice"=>"required|integer",
            "description"=>'required|max:255',
            "image"=>'required|image'
        ]);

        $image = $request->file('image');
        $filename = time().".".$image->getClientOriginalExtension(); //time is unique
        $location = public_path('img/uploadedImages/'.$filename);
        Image::make($image)->resize(800,400)->save($location);

        // save form data
        $hoodies = new Hoodie;
        $hoodies->name = $request->name;
        $hoodies->actualPrice = $request->actualPrice;
        $hoodies->sellingPrice = $request->sellingPrice;
        $hoodies->description = $request->description;
        $hoodies->image = $filename;

        $hoodies->save();

        Session::flash('success','Hoodie Added!');
        // redirect to index page
        // return redirect()->route('hoodies.index');
        return redirect()->route('hoodies.show',$hoodies->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoodies = Hoodie::find($id);
        return view('hoodies.show')->withHoodies($hoodies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hoodies = Hoodie::find($id);
        return view('hoodies.edit')->withHoodies($hoodies);
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
        $this->validate($request,[
            'name'=>'required|max:100',
            'actualPrice'=>'required|integer',
            'sellingPrice'=>'required|integer',
            'description'=>'required|max:255',
            'image'=>'required|image'
        ]);


        $hoodies = Hoodie::find($id);
        $hoodies->name = $request->input('name');
        $hoodies->actualPrice = $request->input('actualPrice');
        $hoodies->sellingPrice = $request->input('sellingPrice');
        $hoodies->description = $request->input('description');

         // add new phoeo
         $image = $request->file('image');
         $filename = time().".".$image->getClientOriginalExtension(); //time is unique

         $location = public_path('img/uploadedImages/'.$filename);
         Image::make($image)->resize(800,400)->save($location);

         $oldfilename = $hoodies->filename;

         // update the database
         $hoodies->image = $filename;

        // delete the old photo
        Storage::delete($oldfilename);


        $hoodies->save();

        Session::flash('success','Hoodie Updated Successfully!');

        // delete old photo


        return redirect()->route('hoodies.show',$hoodies->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoodies = Hoodie::find($id);

        Storage::delete($hoodies->image);

        $hoodies->delete();
        Session::flash('success','Hoodie Deleted Successfully');
        return redirect()->route('hoodies.index');
    }
}
