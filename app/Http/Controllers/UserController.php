<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use App\art;
use App\Conversation;
use App\Comment;
use App\Slider;
use Illuminate\Support\Facades\File;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders =User::paginate(9);
        return view('backend.Users.index',compact('sliders'));
    }
    public function profile($id){
        $User = User::findOrFail($id);
        $conversations = User::find($id)->conversations()->paginate(10);
        return view('backend.Users.profile',compact('User','conversations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
        'email' => 'required|unique:users|max:100'
            ];

            $customMessages = [
                'email.required' => 'Хэрэглэгчийн нэр оруулнуу !',
                'email.unique' => 'Хэрэглэгчийн и-мэйл давхардаж байна !'

            ];


        $this->validate($request, $rules, $customMessages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'=> 'User',
        ]);
        \Session::flash('flash_message','Хэрэглэгч амжилттай нэмэгдлээ.');
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $users = User::all()->take(5);
        $banner = art::where('position','=',2)->limit(5)->get();
        $conversations = User::find($id)->conversations()->paginate(10);
        return view('frontend.pages.usershow',compact('user','conversations','users','banner'));
    }
    public function user_description($id)
    {

        $User = User::find($id);
        $conversations = User::find($id)->conversations()->paginate(10);    
        return view('backend.Users.user_description',compact('User','conversations'));

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
        $user = User::findOrFail($id);

         if ($request->hasFile('image')){

            $conversationimg = public_path("uploads/ProfileImage/{$user->image}");
            if($user->image != null){
                if(File::exists($conversationimg)){
                unlink($conversationimg);
            }
            }

            $avatar = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('uploads/ProfileImage/' . $filename  ));


              $user->update([
                   'name' => $request->name,
                   'major' => $request->major,
                   'avatar' => $filename,
                   'desc' => $request->desc,
                ]);     
              

        
        }
        else{
            $user->update([
                   'name' => $request->name,
                   'major' => $request->major,
                   'desc' => $request->desc,
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
        $user= User::findOrFail($id);
        //Find All Conversations to Delete
        foreach ($user->conversations as $key => $conversation) {

            //find All Comment to Delete
            foreach ($conversation->comments as $key => $comment) {
            $com = Comment::findOrFail($comment->id);
            $com->delete();
            }

            //find All Sliders to Delete
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
        }
        $userimage = public_path("uploads/ProfileImage/{$user->image}");
        if($user->image != null){
                if(File::exists($userimage)){
                unlink($userimage);
            }
            }
        $user->delete();
         \Session::flash('flash_message','Хэрэглэгч  амжилттай утслаа.');
        return redirect('user');
    }


    public function searchuser(Request $request){
        $conversations = Conversation::where('poster_id','=',$request->user_id)->where('title','LIKE','%'.$request->title.'%')->paginate(10);
        $user = User::findOrFail($request->user_id);
        $users = User::all()->take(5);

        if ($request->ajax()) {
         return json_encode([
            'view'=>view('frontend.pages.search1',compact('conversations'))->render()
        ]);
     }
      return view('frontend.pages.usershow',compact('user','conversations','users'));

    }
}
