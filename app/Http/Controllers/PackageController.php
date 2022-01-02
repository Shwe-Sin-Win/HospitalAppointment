<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('backend.package.list',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.package.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validator=$request->validate([
            'name' => ['required','string','max:255','unique:packages'],
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp',
            'description' => ['required','string','max:255','unique:packages'],
            'cost' => ['required','string','max:255']
        ]);

        if($validator)
        {
            $name=$request->name;
            $description=$request->description;
            $cost=$request->cost;

            $photo=$request->photo;


            $imageName=time().'.'.$photo->extension();

            $photo->move(public_path('images/package'),$imageName);

            $filepath='images/package/'.$imageName;

            //Data insert
            $package=new Package;
            //name | photo table column name
            $package->name=$name;
            $package->description=$description;
            $package->cost=$cost;

            $package->photo=$filepath;
            $package->save();

            return redirect()->route('backside.package.index')->with('successMsg','New Package is ADDED in your data');
        }else{
            return redirect::back()->withErrors($validator);
        }
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
        $package = Package::find($id);

        return view('backend.package.edit',compact('package'));
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
        $name=$request->name;
        $description=$request->description;
        $cost=$request->cost;

        $newphoto=$request->photo;
        $oldphoto=$request->oldPhoto;

        //dd($oldprofile);

        if($request->hasFile('photo')){
            //file upload
            $imageName=time().'.'.$newphoto->extension();

            $newphoto->move(public_path('images/package'),$imageName);

            $filepath='images/package/'.$imageName;

            if(\File::exists(public_path($oldphoto))){
                \File::delete(public_path($oldphoto));
            }


        }else{
            $filepath=$oldphoto;
        }

        //Data update
        $package=Package::find($id);
        $package->name=$name;
        $package->description=$description;
        $package->cost=$cost;

        $package->photo=$filepath;
        $package->save();

        return redirect()->route('backside.package.index')->with('successMsg','Existing Package is UPDATED in your data');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::find($id);

        $oldphoto = $package->photo;

        if(\File::exists(public_path($oldphoto))){
            \File::delete(public_path($oldphoto));
        }
        
        $package->delete();

        return redirect()->route('backside.package.index')->with('successMsg','Existing Package is DELETED in your data');
    }
}
