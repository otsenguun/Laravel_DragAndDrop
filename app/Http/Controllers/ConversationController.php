<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Comment;
use App\art;
use App\twitter;
use App\Slider;
use App\User;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == "admin"){
                    $conversations = Conversation::orderBy('id', 'desc')->paginate(10);
                    return view('backend.conversation.index',compact('conversations'));
        }
        else{
             $conversations = Conversation::where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
             return view('backend.conversation.index',compact('conversations'));
        }

    }
    public function indexArticle()
    {
        if(Auth::user()->role == "admin"){
            $conversations = Conversation::where('type','=','Нийтлэл')->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.articles',compact('conversations'));
        }
        else{
        $conversations = Conversation::where('type','=','Нийтлэл')->where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.articles',compact('conversations'));
    }
    }
    public function indexConversation()
    {
        if(Auth::user()->role == "admin"){
                $conversations = Conversation::where('type','=','Ярилцлага')->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.conversation',compact('conversations'));
        }
        else{
            $conversations = Conversation::where('type','=','Ярилцлага')->where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.conversation',compact('conversations'));
    }
    }
    public function indexFigure()
    {
        if(Auth::user()->role == "admin"){
                 $conversations = Conversation::where('type','=','Хөрөг')->orderBy('id', 'desc')->paginate(10);
                  return view('backend.conversation.pages.interview',compact('conversations'));
        }
        else{
             $conversations = Conversation::where('type','=','Хөрөг')->where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.figure',compact('conversations'));
    }
    }
    public function indexInterview()
    {
        if(Auth::user()->role == "admin"){
                 $conversations = Conversation::where('type','=','Сурвалжлага')->orderBy('id', 'desc')->paginate(10);
                  return view('backend.conversation.pages.interview',compact('conversations'));
        }
        else{
             $conversations = Conversation::where('type','=','Сурвалжлага')->where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.interview',compact('conversations'));
    }
    }
     public function indexArt()
    {
        if(Auth::user()->role == "admin"){
                 $conversations = Conversation::where('type','=','Урлан')->orderBy('id', 'desc')->paginate(10);
                 return view('backend.conversation.pages.art',compact('conversations'));
        }
        else{
            $conversations = Conversation::where('type','=','Урлан')->where('poster_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('backend.conversation.pages.art',compact('conversations'));
    }
    }

    public function search(Request $request){
            if ($request->user_role == "admin") {
                if($request->type == "0"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Ярилцлага"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Ярилцлага')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Хөрөг"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Хөрөг')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Сурвалжлага"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Сурвалжлага')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Урлан"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Урлан')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                 elseif($request->type == "Нийтлэл"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Нийтлэл')->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
            }
            else
            {
                 if($request->type == "0"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Ярилцлага"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Ярилцлага')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Хөрөг"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Хөрөг')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Сурвалжлага"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Сурвалжлага')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                elseif($request->type == "Урлан"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Урлан')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
                 elseif($request->type == "Нийтлэл"){
                    $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->where('type','=','Нийтлэл')->where('poster_id','=',$request->user_id)->orderBy('id', 'desc')->paginate(10);
                         if ($request->ajax()) {
                             return json_encode([
                                 'view'=>view('backend.conversation.search',compact('conversations'))->render()
                                     ]);
                         }
                    return view('backend.conversation.search1',compact('conversations'));
                }
            }
    }
    public function search2(Request $request){
         $arts = art::all()->take(5);
         $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('title','LIKE','%'.$request->title.'%')->orderBy('id', 'desc')->paginate(10);
         $search = $request->title;
         return view('frontend.pages.search',compact('conversations','search','arts','twitter'));
    }
    public function delete_header($id){
        $conversation = Conversation::findOrfail($id);
        $conversation->update([
            'desc2'=>null
        ]);
        return json_encode($id);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.conversation.create',compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conid = Conversation::create($request->all())->id;
        return redirect()->route('conversation.show',['id'=>$conid]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conversation = Conversation::find($id);
        $users = User::all();
        $selectusers =[];
        foreach ($users as $user) {
            $selectusers[$user->id] =$user->name;
        }

        return view('backend.conversation.details',compact('conversation','selectusers'));
    }
    
    public function show1($id)
    {
        $conversation = Conversation::find($id);
        return view('backend.conversation.details1',compact('conversation'));
    }
    public function show2($id)
    {
        $conversation = Conversation::find($id);
        return view('backend.conversation.show',compact('conversation'));
    }
   
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $conversation = Conversation::find($id);
        return view('backend.conversation.details',compact('conversation'));
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
         $conversation = Conversation::find($id);
         if ($request->hasFile('image')){

            $conversationimg = public_path("uploads/Conimage/{$conversation->image}");
            if($conversation->image != null){
                if(File::exists($conversationimg)){
                    unlink($conversationimg);
                }
            }
            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('uploads/Conimage/' . $filename  ));


              $conversation->update([
                   'title' => $request->title,
                   'jstyle' => $request->jstyle,
                   'created_at' => $request->date,
                   'image' => $filename,

                ]);     
              

        
        }
        else{
            $conversation->update([
                 'jstyle' => $request->jstyle,
                  'title' => $request->title,
                  'created_at' => $request->date,
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
         $conversation = Conversation::findOrFail($id);
        foreach ($conversation->comments as $key => $comment) {
            $com = Comment::findOrFail($comment->id);
            $com->delete();
        }
        $sliders = Slider::where('con_id','=',$conversation->id)->get();
            foreach ($sliders as $key => $slider) {
                $slid = Slider::findOrFail($slider->id);
                $sliderimage = public_path("uploads/slider/{$slid->image}");
                     if($slid->image != null){
                            if(File::exists($sliderimage)){
                            unlink($sliderimage);
                        }
                    }
                $slid->delete();
            }


         $conversationimg = public_path("uploads/Conimage/{$conversation->image}");
      
            if($conversation->image != null){
                if(File::exists($conversationimg)){
                unlink($conversationimg);
            }
        }
         $conversation->delete();
         return redirect()->back();
    }
    public function updater(Request $request){

        $conversation = Conversation::find($request->id);
        $conversation->update([
        'desc' => $request->html,
    
        ]);
        return json_encode($conversation);
      
    }
    public function updater1(Request $request){

        $conversation = Conversation::find($request->id);
        $conversation->update([
        'desc2' => $request->html,
        'title' => $request->title,
        'hstyle' =>$request->header,
    
        ]);
        return json_encode($conversation);
      
    }
    public function append_data($id){
        if($id == 0){
            return json_encode([
                'view'=>view('backend.themes.100%.header')->render(),
                'class'=>'col-md-12 theme'
            ]);
        }
        else if($id == 1){
             return json_encode([
                'view'=>view('backend.themes.66%.text_ishlel')->render(),
                'class'=>'col-md-12 theme'
            ]);
        }
        else if($id == 2){
             return json_encode([
                'view'=>view('backend.themes.33%.left_author')->render(),
                'class'=>'col-md-4 theme'
        ]);
        }
        else if($id == 3){
             return json_encode([
                'view'=>view('backend.themes.66%.text_title')->render(),
                'class'=>'col-md-12 theme margin-B'
            ]);
        }
        else if($id == 4){
             return json_encode([
                'view'=>view('backend.themes.12')->render()]);
        }
        else if($id == 5){
             return json_encode([
                'view'=>view('backend.themes.8x4')->render(),
                'class'=>'col-md-12']);
        }
        else if($id == 6){
             return json_encode([
                'view'=>view('backend.themes.66%.result')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 7){
             return json_encode([
                'view'=>view('backend.themes.100%.parallax')->render(),
                'class'=>'col-md-12 theme']);
        }
         else if($id == 8){
             return json_encode([
                'view'=>view('backend.themes.8x4.8x4')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 9){
             return json_encode([
                'view'=>view('backend.themes.100%.full_text')->render(),
                'class'=>'col-md-12 theme']);   
        }
        else if($id == 10){
             return json_encode([
                'view'=>view('backend.themes.66%.left_image_text')->render(),
                'class'=>'col-md-12 theme']);   
        }
        else if($id == 11){
             return json_encode([
                'view'=>view('backend.themes.66%.right_image_text')->render(),
                'class'=>'col-md-12 theme']);   
        }
        else if($id == 12){
             return json_encode([
                'view'=>view('backend.themes.66%.full_image')->render(),
                'class'=>'col-md-12 theme']);   
        }
        else if($id == 13){
             return json_encode([
                'view'=>view('backend.themes.66%.left_image_wrap_text')->render(),
                'class'=>'col-md-12 theme']);   
        }
        else if($id == 14){
             return json_encode([
                'view'=>view('backend.themes.66%.right_image_wrap_text')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 15){
             return json_encode([
                'view'=>view('backend.themes.66%.bold_text')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 16){
             return json_encode([
                'view'=>view('backend.themes.100%.code')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 17){
             return json_encode([
                'view'=>view('backend.themes.100%.line')->render(),
                'class'=>'col-md-12 theme line']);
        }
        else if($id == 18){
             return json_encode([
                'view'=>view('backend.themes.100%.line1')->render(),
                'class'=>'col-md-12 theme line']);
        }
        else if($id == 19){
             return json_encode([
                'view'=>view('backend.themes.100%.line2')->render(),
                'class'=>'col-md-12 theme line']);
        }
        else if($id == 20){
             return json_encode([
                'view'=>view('backend.themes.66%.center_text')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 21){
             return json_encode([
                'view'=>view('backend.themes.66%.image_center_text')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 22){
             return json_encode([
                'view'=>view('backend.themes.66%.swiper')->render(),
                'class'=>'col-md-12 theme']);
        }
        else if($id == 23){
            return json_encode([
               'view'=>view('backend.themes.100%.video')->render(),
               'class'=>'col-md-12 theme']);
       }
        else {
             return json_encode([
                'view'=>view('backend.themes.5x1')->render()]);
        }
    }
    public function clear($id){
        $conversation = Conversation::find($id);
        $conversation->update([
        'desc' => '',
    
        ]);
        return json_encode($conversation);
      
    }

    public function image(Request $request){
        $uploaded = $request->all();
        if ($request->hasFile('files'))
            {
                $array = [];
                foreach ($request->files as $key => $img) {
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $image = $img->move(public_path('uploads/images'), $filename);
                    $array[$key] = $img->getClientOriginalName();;
                    return json_encode([
                        'name' => $filename,
                        'class'=> 'hello']);
                }
                
            }
            else{
                return json_encode('not file');
            }
    }
}
