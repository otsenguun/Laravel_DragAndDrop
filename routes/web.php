<?php
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/readeds','AboutController@showleftbar');

Route::get('art','HomeController@showarts');

Route::get('/home','HomeController@homeshow');
Route::get('/','HomeController@homeshow');
Route::get('/commend','HomeController@homeshow1');
Route::get('/readed','HomeController@homeshow2');

Route::get('/contact','HomeController@showContact');

Route::get('/about','HomeController@showAbout');

Route::get('/contact','HomeController@showContactPage');
Route::post('/contact','HomeController@sendMessage');

Route::get('/showconversation/{id}','HomeController@showdesc');

Route::post('/uploader','ConversationController@image');

Route::get('conversations','HomeController@conversations');
Route::get('conversations1','HomeController@conversations1');
Route::get('conversations2','HomeController@conversations2');

Route::get('articles','HomeController@articles');
Route::get('articles1','HomeController@articles1');
Route::get('articles2','HomeController@articles2');

Route::get('interview','HomeController@interviews');
Route::get('interview1','HomeController@interviews1');
Route::get('interview2','HomeController@interviews2');

Route::get('figure','HomeController@avatars');
Route::get('figure1','HomeController@avatars1');
Route::get('figure2','HomeController@avatars2');

//User show
Route::get('showuser/{id}','UserController@show');

Route::post('userSearch','UserController@searchuser');

Route::group(['middleware' => ['auth']], function ()
 {
	Route::get('/admin',function(){return view('backend.home');});

	Route::get('allarticles','ConversationController@indexArticle');
	Route::get('allconversations','ConversationController@indexConversation');
	Route::get('allinterviews','ConversationController@indexInterview');
	Route::get('allavatars','ConversationController@indexFigure');
	Route::get('allarts','ConversationController@indexArt');


	Route::resource('conversation','ConversationController');
	Route::post('conversationsearch','ConversationController@search');
	Route::get('/deleteconversation/{id}','ConversationController@destroy');
	
	Route::resource('theme','ThemeController');

	Route::resource('user','UserController');
	Route::get('showprofile/{id}','UserController@profile');
	Route::get('user_description/{id}','UserController@user_description');

	Route::get('/delete_header/{id}','ConversationController@delete_header');

	Route::resource('social','SocialController');
	Route::get('/deletesocial/{id}','SocialController@destroy');

	Route::group(['middleware' => 'admin'], function () {
  			Route::resource('slider','SliderController');
			Route::get('/deleteslider/{id}','SliderController@destroy');
			Route::get('/deleteuser/{id}','UserController@destroy');
			Route::get('/messages','HomeController@showAllMessages');
			Route::resource('email','EmailController');
			Route::resource('phone','PhoneController');
			Route::resource('location','LocationController');
			Route::get('locationdelete/{id}','LocationController@destroy');
			Route::resource('hour','HourController');
			Route::resource('video','VideoController');
			Route::resource('abouts','AboutController');
			Route::resource('about_image','AboutImageController');
			Route::get('aboutimagedelete/{id}','AboutImageController@destroy');
			Route::resource('creation','CreationController');
			Route::get('deletecreation/{id}','CreationController@destroy');
			
 	});


	
	
});
	Route::get('deleteallcomment/{id}','CommentController@deleteall');
	Route::resource('comment','CommentController');
	Route::get('/deletecomment/{id}','CommentController@destroy');
	Route::post('conversationsearch2','ConversationController@search2');
	Route::post('/updateconversation1','ConversationController@updater1');
	Route::get('conversationshow2/{id}','ConversationController@show2');
	Route::get('conversationshow1/{id}','ConversationController@show1');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	Route::get('/append_data/{id}','ConversationController@append_data');
	Route::get('/clearconversation/{id}','ConversationController@clear');
Auth::routes();


	//banner
	Route::resource('arts','ArtController');
	Route::post('change','ArtController@change');



	Route::resource('arts_desc','ArtDescController');
	Route::resource('twitter','TwitterController');
	Route::get('showtwitter/{id}','TwitterController@show1');
	Route::get('removetwitter/{id}','TwitterController@remove');
