<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About_image;
use Image;
use Illuminate\Support\Facades\File;
class AboutImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if ($request->hasFile('image')){
            $filename = ($request->image)->store('About');
            $aimage = new About_image;
            $aimage->image = $filename;
            $aimage->save();
            
        }
        return redirect()->back();
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
        $aimage = About_image::findOrFail($id);
        if ($request->hasFile('image')){
            $sliderimage = public_path("uploads/{$aimage->image}");
            if($aimage->image != null){
            if(File::exists($sliderimage)){
                unlink($sliderimage);
            }
        }
            $avatar = $request->file('image');
            $filename = ($request->image)->store('About');
              $aimage->update([
                 'image' => $filename,
                ]);      
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aimage = About_image::findOrFail($id);
         $sliderimage = public_path("uploads/{$aimage->image}");
         if(File::exists($sliderimage)){
            if(File::exists($sliderimage)){
                unlink($sliderimage);
            }
        }
        $aimage->delete();
        return redirect()->back();
    }
}
