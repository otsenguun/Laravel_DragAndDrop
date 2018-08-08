<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\About_image;
use App\Creation;
use App\Conversation;
use DB;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showleftbar(){
        $readeds = DB::table('conversation')->sum('readed');
        $commends = DB::table('conversation')->sum('imagestyle');
        $total = DB::table('conversation')->count('id');
        return json_encode([
            'readeds'=>$readeds,
            'commends'=>$commends,
            'total'=>$total
        ]);
    }

    public function index()
    {
        $about = About::all();
        $aboutimages = About_image::all();
        $creations = Creation::all();
        return view('backend.about.index',compact('about','aboutimages','creations'));
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
        //
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
        $about = About::findOrFail($id);
        $about->update($request->all());
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
        //
    }
}
