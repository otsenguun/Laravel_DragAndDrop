<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use App\Slider;
use App\Contact;
use App\art;
use App\twitter;
use App\Email;
use App\Hours;
use App\Phone;
use App\Location;
use App\Video;
use App\About;
use App\About_image;
use App\Creation;
use Illuminate\Support\Facades\Mail;
use App\Mail\messageSent;

class HomeController extends Controller
{
        public function homeshow(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::orderBy('id','desc')->paginate(16);
         if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }

         return view('frontend.body.body',compact('conversations','sliders','twitter','arts'));
    }
    public function homeshow1(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::orderBy('readed','desc')->paginate(16);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.body.body1',compact('conversations','sliders','twitter','arts'));
    }
    public function homeshow2(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::orderBy('imagestyle','desc')->paginate(16);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.body.body2',compact('conversations','sliders','twitter','arts'));
    }
    public function conversations(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Ярилцлага')->orderBy('id','desc')->paginate(16);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.conversations.conversations',compact('conversations','sliders','twitter','arts'));
    } 
    public function conversations1(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Ярилцлага')->orderBy('readed','desc')->paginate(16);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.conversations.conversations1',compact('conversations','sliders','twitter','arts'));
    } 
    public function conversations2(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Ярилцлага')->orderBy('imagestyle','desc')->paginate(16);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.conversations.conversations2',compact('conversations','sliders','twitter','arts'));
    } 
    public function articles(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Нийтлэл')->orderBy('id','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.articles.articles',compact('conversations','sliders','twitter','arts'));
    }
    public function articles1(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Нийтлэл')->orderBy('readed','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.articles.articles1',compact('conversations','sliders','twitter','arts'));
    } 
    public function articles2(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Нийтлэл')->orderBy('imagestyle','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.articles.articles2',compact('conversations','sliders','twitter','arts'));
    }  

    public function interviews(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Сурвалжлага')->orderBy('id','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.interviews.interviews',compact('conversations','sliders','twitter','arts'));
    } 
    public function interviews1(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Сурвалжлага')->orderBy('readed','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.interviews.interviews1',compact('conversations','sliders','twitter','arts'));
    } 
    public function interviews2(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Сурвалжлага')->orderBy('imagestyle','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.interviews.interviews2',compact('conversations','sliders','twitter','arts'));
    } 

    public function avatars(Request $request){
         $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Хөрөг')->orderBy('id','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.avatars.avatars',compact('conversations','sliders','twitter','arts'));
    } 
    public function avatars1(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Хөрөг')->orderBy('readed','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.avatars.avatars1',compact('conversations','sliders','twitter','arts'));
    }  
    public function avatars2(Request $request){
         $sliders = Slider::all();
         $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
         $conversations = Conversation::where('type','=','Хөрөг')->orderBy('imagestyle','desc')->paginate(9);
          if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
         return view('frontend.pages.avatars.avatars2',compact('conversations','sliders','twitter','arts'));
    }
    public function showarts(Request $request){
        $sliders = Slider::all();
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
        $conversations = Conversation::where('type','=','Урлан')->orderBy('imagestyle','desc')->paginate(16);
        if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();
            
            return response()->json(['html'=>$view]);
        }
        return view('frontend.pages.arts',compact('conversations','sliders','twitter','arts'));
   } 
   public function showdesc($id){
    	$conversation = Conversation::find($id);
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
    	$lasts = Conversation::orderBy('id','desc')->limit(4)->get();
    	$readeds = Conversation::orderBy('readed','desc')->limit(4)->get();
    	$commendeds = Conversation::orderBy('imagestyle','desc')->limit(4)->get();
        $banner = art::where('position','=',1)->limit(5)->get();
        $value = $conversation->readed + 1;
        $conversation->update([
            'readed' => $value,
        ]);
    	return view('frontend.description',compact('conversation','lasts','readeds','commendeds','twitter','arts','banner'));

    }
    /* Contact */

    public function showAbout(){
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
        $videos = Video::paginate(12);
        $about = About::all();
        $aboutimages = About_image::all();
        $creations = Creation::all();
        return view('frontend.pages.about',compact('twitter','arts','videos','about','aboutimages','creations'));      
    }

    public function showContactPage(){
        $arts = Conversation::where('type','=','Урлан')->limit(5)->get();
        $twitter = twitter::where('show','=',1)->limit(1)->get();
        $emails = Email::all();
        $phones = Phone::all();
        $hours = Hours::all();
        $locations = Location::all();
        return view('frontend.pages.contacts',compact('twitter','arts','emails','phones','hours','locations') );        
    }

    public function sendMessage(Request $request){

        $contact = Contact::create($request->all());
        Mail::to('a.badrala@gmail.com')->send(new messageSent($contact));

        if (Mail::failures()) {
            return view('welcome');
        }

        return redirect()->back();
    }

    public function showAllMessages(){
        $messages = Contact::paginate(20);
        return view('backend.contacts.index', compact('messages'));
    }
    public function showmore(){

        $conversations = Conversation::orderBy('id','desc')->paginate(16);
        if ($request->ajax()) {
            $view = view('frontend.addlist',compact('conversations'))->render();

            return response()->json(['html'=>$view]);
        }
    }
}