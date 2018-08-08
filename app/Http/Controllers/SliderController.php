<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
use Illuminate\Support\Facades\File;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('backend.slider.index',compact('sliders')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
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

            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('uploads/slider/' . $filename  ));


            $slider = new Slider;
            $slider->con_id =$request->con_id;
            $slider->image = $filename;
            $slider->counts = $request->counts;
            $slider->save();

        
        }

        else{
            $slider = new Slider;
            $slider->con_id =$request->con_id;
            $slider->save();
        }


        return redirect('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        return view('backend.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $slider = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
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


        $slider = Slider::find($id);
        if ($request->hasFile('image')){

            $sliderimage = public_path("uploads/slider/{$slider->image}");
            if($slider->image != null){
            if(File::exists($sliderimage)){
                unlink($sliderimage);
            }
        }

            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('uploads/slider/' . $filename  ));
            

              $slider->update([
                 'con_id'=> $request->con_id,
                 'counts'=> $request->counts,
                 'image' => $filename,
                ]);      
        }

        else{

            $slider->update([
                 'counts'=> $request->counts,
                 'con_id'=> $request->con_id,
                ]);  
        }


 
          return redirect('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          

        $slider = Slider::find($id);
         $sliderimage = public_path("uploads/slider/{$slider->image}");
         if($slider->image != null){
            if(File::exists($sliderimage)){
                unlink($sliderimage);
            }
        }
            
        $slider->delete();
         return redirect('slider');
    }
}
