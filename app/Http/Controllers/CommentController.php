<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Conversation;
class CommentController extends Controller
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
         if ($request->ajax()) {
            if ($request->name == '' || $request->content == '') {
                return json_encode([
                    'value001' => '1'
                ]);
            }
            else{
                $comment = Comment::create($request->all());
                $comments = Comment::where('con_id','=',$comment->con_id)->get();
                $conversation = Conversation::findOrFail($comment->con_id);
                $conversation->update([
                     'imagestyle' => count($comments),
                ]);

                 return json_encode([
                    'view'=> view('frontend.comment',compact('comment'))->render(),
                    'counts'=> count($comments),
                    'value001'=> '2'
                ]);
            }
        }
        $comment = Comment::create($request->all());
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
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return json_encode($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back();
        // return json_encode($comment);
    }
     public function deleteall($id)
    {
        $conversation = Conversation::findOrFail($id);
        foreach ($conversation->comments as $key => $comment) {
            $com = Comment::findOrFail($comment->id);
            $com->delete();
        }
       
        return redirect()->back();
        // return json_encode($comment);
    }
}
