<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\twitter;
class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twitters = twitter::paginate(10);
        return view('backend.twitters.index',compact('twitters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.twitters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        twitter::create($request->all());
        return redirect('twitter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $twitter = twitter::findOrFail($id);
        return view('backend.twitters.show',compact('twitters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twitter = twitter::findOrFail($id);
        return view('backend.twitters.edit',compact('twitter'));
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
         $twitter = twitter::findOrFail($id);
         $twitter->update($request->all());
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
         $twitter = twitter::findOrFail($id);
         $twitter->delete();
          return redirect()->back();
    }
    public function show1($id){
        $twitter = twitter::findOrFail($id);
        $twitter->update(['show'=>1]);
        return redirect()->back();
    }
    public function remove($id){
        $twitter = twitter::findOrFail($id);
        $twitter->update(['show'=>0]);
        return redirect()->back(); 
    }
}
