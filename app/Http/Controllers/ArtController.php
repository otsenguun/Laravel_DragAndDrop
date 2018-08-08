<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\art;
use Image;
use Illuminate\Support\Facades\File;
class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = art::paginate(10);
        return view('backend.arts.index',compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.arts.create');
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
         
            $filename = ($request->image)->store('Arts');
            $art = new art;
            $art->text = $request->text;
            $art->image = $filename;
            $art->save();
   
              

        
        }
        else{
            $art = new art;
            $art->text = $request->text;
            $art->save();

        }

        return redirect('arts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art =art::findORFail($id);
        return view('backend.arts.show',compact('art'));
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
       $slider = art::find($id);
        if ($request->hasFile('image')){

            $sliderimage = public_path("uploads/{$slider->image}");
            if($slider->image != null){
            if(File::exists($sliderimage)){
                unlink($sliderimage);
            }
        }

            $avatar = $request->file('image');
            $filename = ($request->image)->store('Arts');
            

              $slider->update([
                 'text'=> $request->text,
                 'image' => $filename,
                 'position' =>$request->position,
                ]);      
        }

        else{

            $slider->update([
                 'text'=> $request->text,
                 'position' =>$request->position,
                ]);  
        }

        return redirect('arts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = art::findOrFail($id);
        if($art->image!=null){
            $sliderimage = public_path("uploads/{$art->image}");
            if(File::exists($sliderimage)){
               if(File::exists($sliderimage)){
                   unlink($sliderimage);
               }
           }
        }
        $art->delete();
        return redirect()->back();
    }
    public function change(Request $request){
        $banner = art::findORFail($request->id);
        $banner->update([]);
        return redirect()->back();
    }
}
