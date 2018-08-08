
  @extends('app')
  @section('content')
  <link rel="stylesheet" type="text/css" href="/css/details_css.css">
    
   

  <style type="text/css">
  body{
    height: auto;
  }
      .padding_001{
        height: auto;
        width: 40%;
        margin: 5px;
      } 
      .modal-backdrop{
        position: relative;
      }

  </style>
  <div class="col-md-2">
    <div class="fixed001" id="wrapper1123">
    <div class="text-center"><h2>Сонгох хэсэг</h2></div>
     <!--  <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#column">хуудас</a></li>
        <li class="active"><a data-toggle="pill" href="#text">шугам</a></li>
        <li><a data-toggle="pill" href="#picture">Menu 2</a></li>
      </ul> -->

      <div class="tab-content">
         <!-- start huudas huwaalt -->
        <div id="column" class="tab-pane fade in active" ondrop="drop(event)" ondragover="allowDrop(event)" >
                <ul id="sortable1" class="dropfalse ex1">

                    <div class="ui-state-default col-md-4 padding_001" data-id="10"><img src="../min-picture/5.svg" ></div><!-- left image text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="11"><img src="../min-picture/6.svg" ></div><!-- right image text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="13"><img src="../min-picture/2.svg" ></div><!-- left image wrap text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="14"><img src="../min-picture/3.svg" ></div><!-- right image wrap text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="6"><img src="../min-picture/result.svg"></div><!-- result text -->
                    <!--  <div class="ui-state-default col-md-6" data-id="0"> <img src="../min-picture/1x1.jpg"></div>
                    <div class="ui-state-default col-md-6" data-id="1"><img src="../min-picture/2x1.jpg"></div>
                    <div class="ui-state-default" data-id="2"><img src="../min-picture/1x3.jpg"></div> -->
                   <!--  <div class="ui-state-default col-md-12" data-id="0"><img src="../min-picture/header.jpg"></div> -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="1"><img src="../min-picture/ishlel.svg"></div><!-- simple text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="15"><img src="../min-picture/10.svg" ></div><!-- Bold text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="3"><img src="../min-picture/title.svg"></div><!-- title text -->
                    <!-- <div class="ui-state-default col-md-12" data-id="4"><img src="../min-picture/test.jpg"></div> -->
                    <!-- <div class="ui-state-default col-md-12" data-id="5"><img src="../min-picture/2x1.jpg"></div> -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="12"><img src="../min-picture/4.svg"></div><!-- image -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="16"><img src="../min-picture/code.svg"></div><!-- code -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="17"><img src="../min-picture/short_line.svg"></div><!-- short line -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="18"><img src="../min-picture/long_line.svg" ></div><!-- long line -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="19"><img src="../min-picture/medium_line.svg" ></div><!-- medium line -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="20"><img src="../min-picture/center_text.svg" ></div><!-- center text -->
                    <div class="ui-state-default col-md-4 padding_001" data-id="23"><img src="../min-picture/youtube.jpg" ></div>
                    <!--<div class="ui-state-default col-md-4 padding_001" data-id="21"><img src="../min-picture/image_center_text.svg"></div><!-- image C text warp -->
                    <!--<div class="ui-state-default col-md-4 padding_001" data-id="22"><img src="../min-picture/swiper.svg"></div><!-- swiper -->

                    <!-- <div class="ui-state-default col-md-12" data-id="7"><img src="../min-picture/parallax.png"></div> -->
                </ul>
             </div>
             <div id="text" class="tab-pane fade in active" ondrop="drop(event)" ondragover="allowDrop(event)" >
                  <ul id="sortable1" class="dropfalse ex1">
                     <div class="ui-state-default col-md-6 padding_001" data-id="17">------Line Break--------</div>
                  </ul>
             </div>
      </div>
    </div>
  </div>
  <input type="hidden" id="con_id" value="{{$conversation->id}}">
  <div class="col-md-10" style="background-color: #fff;padding-bottom:100px; z-index: -1;">
        @include('frontend.partials.header')
        <div class="container">
          @if(empty ($conversation->desc2 ))
          <div class="wrap-nav" id="main-slider">
                <!-- <div  data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro theme" data-id="0">
                    <i class="fa fa-edit editi"  id="edit_div"></i>
                    <i class="fas fa-trash-alt deletei" id="delete_div"></i>
                    <div class="sp-slides">
                        <div class="section-title section-bg">
                          <div class="section__inner">
                              <div class="container">
                                <h2 class="main-slider__title">{{$conversation->title}}</h2>
                              </div>
                          </div>
                        </div>
                        <div class="container">
                          <div class="breadcrumb-wrap1">
                            <ol class="breadcrumb">
                              <li><a href="home-new.html">{{$conversation->type}}</a></li>
                              <li class="active roboto_text">{{$conversation->created_at}}</li>
                            </ol>
                          </div>
                        </div>
                    </div>
              </div> -->
                <div class="text-center" data_id="999">
                  <button onclick="AddHeaderImage()" class="btn btn-default">Header нэмэх</button>
                  <!-- <button onclick="AddConainerImage()" class="btn btn-default">Header[fixed] нэмэх</button> -->
                  <h2 style="text-align: center; padding-top: 100px; padding-bottom: 100px;">{{$conversation->title}}</h2>
                </div>
            </div>
              @else
              <div class="wrap-nav" id="main-slider">
                {!!$conversation->desc2!!}
              </div>
              @endif
             <div class="container">
                 <div class="col-md-8">
                   <ul id="sortable2" class="connectedSortable margin_top" style="z-index: 1;">
                      {!!$conversation->desc!!}
                   </ul>
                 </div>
                 <div class="col-md-4">
                    @include('backend.themes.100%.header1')
                 </div>
             </div>

             <button class="btn btn-default" onclick="save('{{$conversation->id}}')" style="float: right;margin-top: 5px; margin-bottom: 5px;">хадгалах</button>
             <button class="btn btn-default" onclick="clearall('{{$conversation->id}}')" style="float: right;margin-top: 5px; margin-bottom: 5px;">бүгдийг устгах</button>
            <a class="btn btn-default"  onclick="save('{{$conversation->id}}')"  href="{{url('/conversationshow2',$conversation->id)}}" style="float: right;margin-top: 5px;">харах</a>
             <button class="btn btn-default" data-toggle="modal" data-target="#myModal{{$conversation->id}}" style="float: right;margin-top: 5px; margin-bottom: 5px;">Бусад мэдээлэл засах</button>
      </div>
      <div class="modal fade" id="myModal{{$conversation->id}}" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="text-center">
                                          {{ Html::image('uploads/Conimage/'.$conversation->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}
                                        </div>
                                  </div>
                                  {{ Form::model($conversation,['method'=>'PATCH','action'=>['ConversationController@update',$conversation->id],'files' => true] ) }}
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Name') }}</div>
                                          <div class="col-md-8">{{ Form::text('title', $conversation->title,['class' => 'form-control']) }}</div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Image') }}</div>
                                          <div class="col-md-8">{{ Form::file('image',['class' => 'form-control']) }}</div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                        <div class="col-md-3"> {{ Form::label('name', 'Оруулсан огноо') }}</div>
                                        <div class="col-md-8">{{ Form::date('date',$conversation->created_at,['class' => 'form-control'] ) }}</div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-md-3"> 
                                            {{ Form::label('name', 'Төрөл') }}
                                        </div>
                                        <div class="col-md-8">
                                            {{Form::select('type', ['Нийтлэл' => 'Нийтлэл', 'Сурвалжлага' => 'Сурвалжлага', 'Ярилцлага' => 'Ярилцлага', 'Хөрөг' => 'Хөрөг','Урлан' => 'Урлан'],$conversation->type,['class' => 'form-control'])}}
                                        </div>  
                                    </div>
                                    <br>

                                    <div class="form-group">
                                            <div class="col-md-3"> {{ Form::label('name', 'Оруулсан нийтлэгч') }}</div>
                                    <div class="col-md-8">{{Form::select('poster_id',$selectusers,$conversation->poster_id,['class'=>'form-control'])}}</div>  
                                     </div>
                                    <br>
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Өнгө') }}</div>
                                          <div class="col-md-8">{{ Form::select('jstyle',['0'=>'Хар','1'=>'Өнгөт'],$conversation->jstyle,['class' => 'form-control'] ) }}</div>
                                      </div>
                                      <br>

                                  </div>

                                  <div class="modal-footer">
                                      <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                                  {{ Form::close() }}
                              </div>
                          </div>
                      </div>
  </div>
  <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
  <script type="text/javascript">
     $(document).on('click', '.theme .editi', function () {
  var data_id = $(this).parent('.theme').attr("data-id");
  var p_target = $(this).parent();

 if(data_id==0){
    var target = $(this).parent();
    var background = p_target.find(".section-bg").css("background-image").replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
    var background1 = p_target.find(".section-bg");
    var title = p_target.find("h2").html();
    var title1 = p_target.find("h2");
    var sizer = p_target.find("h2").css("width");
    var position = p_target.find("h2.main-slider__title");
    var size = '<div>Хэмжээ <input type="text" id="changesize" value="'+sizer+'"></div>';
    var button = 'Байрлал:<select id="selected_id"> <option value="left;">Зүүн</option><option value="right;">Баруун</option></select>'
    var image ='<div class="image" id="pf_foto" style="background-image:url('+background+');height:35vh; width:100vh; background-size: cover;"></div>';
    var text = '<textarea id="textareatest" class="ckeditor" style="width:100%">'+title+'</textarea>'+button;
    var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
    var body = $('<div id="dialog">'+image+'<br>'+text+size+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      
  
        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true,
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
            var change1 = $('#selected_id').val();
            var change2 = $('#changesize').val();
            background1.css('background-image', 'url(' + change + ')');
            title1.empty();
            position.attr('style','float:'+change1+'width:'+change2);
            title1.append(a);


            var html = $('#main-slider').html();
            var id =$('#con_id').val();
            var header = 0;
            // console.log(id);
            ajax = $.ajax({
                url: '/updateconversation1',
                type: 'post',
                data: {html: html,
                       id:id,
                        title:a,
                        header:header},
                dataType: 'json'
            }).done(function(jsonString) {
                // console.log(jsonString);
            }).always(function() {

            });
            $("#dialog").remove();
          });
      }
      if(data_id==1000){
    var target = $(this).parent();
    var background = p_target.find("#fixed_header").css("background-image").replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
    var background1 = p_target.find("#fixed_header");
    var title = p_target.find("h2").html();
    var title1 = p_target.find("h2");
    var sizer = p_target.find("h2").css("width");
    var position = p_target.find("h2.main-slider__title");
    var size = '<div>Хэмжээ <input type="text" id="changesize" value="'+sizer+'"></div>';
    var button = 'Байрлал:<select id="selected_id"> <option value="left;">Зүүн</option><option value="right;">Баруун</option></select>'
    var image ='<div class="image" id="pf_foto" style="background-image:url('+background+');height:35vh; width:100vh; background-size: cover;"></div>';
    var text = '<textarea id="textareatest" class="ckeditor" style="width:100%">'+title+'</textarea>'+button;
    var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
    var body = $('<div id="dialog">'+image+'<br>'+text+size+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      
  
        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true,
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
            var change1 = $('#selected_id').val();
            var change2 = $('#changesize').val();
            background1.css('background-image', 'url(' + change + ')');
            title1.empty();
            position.attr('style','float:'+change1+'width:'+change2);
            title1.append(a);


            var html = $('#main-slider').html();
            var id =$('#con_id').val();
            var header = 1;
            // console.log(id);
            ajax = $.ajax({
                url: '/updateconversation1',
                type: 'post',
                data: {html: html,
                       id:id,
                        title:a,
                      header:header},
                dataType: 'json'
            }).done(function(jsonString) {
                // console.log(jsonString);
            }).always(function() {

            });
            $("#dialog").remove();
          });
      }
  else if(data_id==1){
        var target = $(this).parent();
        var value1 = p_target.find("#text");
        var value = p_target.find("#text").html();
        var p  = p_target.html();
        var text = '<textarea id="textareatest" class="ckeditor" name="ckeditor"  data-autoresize rows="17" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button><button id="reload()" onclick="reload001()" class="btn btn-default" type="button" style="float:right">reload</button></div>').appendTo('body');     
        

        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });

        CKEDITOR.replace('ckeditor');

        $("#edit_button").click(function(){
          updateCkeditor();
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();
          });
    }
     else if(data_id==15){
        var target = $(this).parent();
        var value1 = p_target.find("p");
        var value = p_target.find("p").html();
        var text = '<textarea id="textareatest" class="ckeditor"  data-autoresize rows="17" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');     
        

        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        
        $("#edit_button").click(function(){
         
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();
          });
    }
  else if(data_id==2){
        var target = $(this).parent();

        var p = p_target.find("p");
        var p_html = p_target.find("p").html();

        var b = p_target.find("b");
        var b_html = p_target.find("b").html();

        var span = p_target.find("span");
        var span_html = p_target.find("span").html();
        var p  = p_target.html();
        var text = '<textarea id="textareatest"  data-autoresize rows="17" class="ckeditor" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');        
        

        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true,
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();
          });
    }
    else if(data_id==3){
          var target = $(this).parent();
          var value1 = p_target.find("#text");
          var value = p_target.find("#text").html();
          var name1 = p_target.find("#lorem001");
          var name = p_target.find("#lorem001").html();
          var p  = p_target.html();
          var text = '<div class="blockquote-wrap"><div class="decor-left"></div><blockquote class="blockquote blockquote_mod-a"><div id="text"><textarea name="ckeditor" id="textareatest"  data-autoresize rows="5" class="ckeditor" style="width:100%">'+value+'</textarea><footer><cite title="Blockquote Title"><span class="blockquote__author" ><textarea id="changedname" placeholder="Author">'+name+'</textarea></span></cite></footer></blockquote><div class="decor-right"></div></div>';

          var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');
          
          $("#dialog").dialog({                   
              width: 1000,
              height:600,
              modal: true, 
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
              var a = $("#textareatest").val();
              var b = $("#changedname").val();
              value1.empty();
              value1.append(a);
              name1.empty();
              name1.append(b);
              $("#dialog").remove();
            });
    }
    else if(data_id==6){
          var target = $(this).parent();
          var value1 = p_target.find('#text');
          var value = p_target.find("#text").html();
          var p  = p_target.html();
          var text = '<textarea id="textareatest" name="ckeditor"  data-autoresize rows="17" class="ckeditor" style="width:100%">'+value+'</textarea>';
          var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');
                  
          

          $("#dialog").dialog({                   
              width: 1000,
              height:600,
              modal: true, 
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
              var a = $("#textareatest").val();
              value1.empty();
              value1.append(a);
              $("#dialog").remove();
            });
    }

     else if(data_id==7){
          var target = $(this).parent();
          var background = p_target.find(".bg__break").css("background-image").replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
          var background1 = p_target.find(".bg__break");
          var image ='<div class="image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+'<br>'+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      

          

          $("#dialog").dialog({                   
              width: 1000,
              height:600,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          $("#edit_button").click(function(){
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.css('background-image', 'url(' + change + ')');
              $("#dialog").remove();
            });
      }
      else if(data_id==9){
            var target = $(this).parent();
            var value1 = p_target.find("p");
            var value = p_target.find("p").html();
            var p  = p_target.html();
            var text = '<textarea id="textareatest" class="ckeditor"  data-autoresize rows="25" style="width:100%">'+value+'</textarea>';
            var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');
              
            

            $("#dialog").dialog({                   
                width: 1000,
                height:600,
                modal: true, 
                close: function(event, ui) {
                    $("#dialog").remove();
                    }
                });
            $("#edit_button").click(function(){
                var a = $("#textareatest").val();
                value1.empty();
                value1.append(a);
                $("#dialog").remove();
              });
    }
     else if(data_id==10){
          var target = $(this).parent();

          var background = p_target.find(".section001 img").attr("src");

          var background1 = p_target.find(".section001 img");
          var title = p_target.find("p").html();
          var title1 = p_target.find("p");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+'); height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" name="ckeditor" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';




          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+text+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      

          

          $("#dialog").dialog({                   
              width: 1000,
              height:670,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              title1.empty();
              title1.append(a);
              $("#dialog").remove();
            });
    }
     else if(data_id==11){
          var target = $(this).parent();
          var background = p_target.find(".section002 img").attr("src");
          var background1 = p_target.find(".section002 img");
          var title = p_target.find("#text").html();
          var title1 = p_target.find("#text");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" name="ckeditor" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+text+image+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      

          

          $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true,
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
            var a = $("#textareatest").val();
            var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
            background1.attr('src', change );
            title1.empty();
            title1.append(a);
            $("#dialog").remove();
          });
    }
     else if(data_id==12){
      
          var target = $(this).parent();
          var background = p_target.find(".section001 img").attr("src");
          var background1 = p_target.find(".section001 img");

          var image ='<div class="image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file"  onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+'<br>'+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');   

          

          $("#dialog").dialog({                   
              width: 1000,
              height:600,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          $("#edit_button").click(function(){
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              $("#dialog").remove();
            });
    }
    else if(data_id==13){
          var target = $(this).parent();
          var background = p_target.find(".section001 img").attr("src");
          var background1 = p_target.find(".section001 img");
          var title = p_target.find("#text").html();
          var title1 = p_target.find("#text");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" name="ckeditor" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+text+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      
          
          $("#dialog").dialog({                   
              width: 1000,
              height:670,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              title1.empty();
              title1.append(a);
              $("#dialog").remove();
            });
    }

    else if(data_id==14){
          var target = $(this).parent();
          var background = p_target.find(".section002 img").attr("src");
          var background1 = p_target.find(".section002 img");
          var title = p_target.find("#text").html();
          var title1 = p_target.find("#text");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" name="ckeditor" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';

          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+text+image+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      

          

          $("#dialog").dialog({                   
              width: 1000,
              height:600,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          CKEDITOR.replace('ckeditor');
          $("#edit_button").click(function(){
             updateCkeditor();
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              title1.empty();
              title1.append(a);
              $("#dialog").remove();
            });
    }
    else if(data_id==16){
        var target = $(this).parent();
        var value1 = p_target.find("#code");
        var value = p_target.find("#code").html();
        var p  = p_target.html();
        var text = '<textarea id="textareatest" class="ckeditor"  data-autoresize rows="17" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');     
        

        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();
          });
    }
    else if(data_id==20){
        var target = $(this).parent();
        var value1 = p_target.find("#text");
        var value = p_target.find("#text").html();
        var text = '<textarea id="textareatest" class="ckeditor" name="ckeditor"  data-autoresize rows="17" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');     
        

        $("#dialog").dialog({                   
            width: 1000,
            height:600,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        CKEDITOR.replace('ckeditor');
        $("#edit_button").click(function(){
           updateCkeditor();
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();

          });
    }
     
      else if(data_id==21){
          var target = $(this).parent();
          var background = p_target.find(".section001 img").attr("src");
          var background1 = p_target.find(".section001 img");
          var title = p_target.find("p").html();
          var title1 = p_target.find("p");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+text+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      
          
          $("#dialog").dialog({                   
              width: 1000,
              height:670,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          $("#edit_button").click(function(){
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              title1.empty();
              title1.append(a);
              $("#dialog").remove();
            });
    } else if(data_id==22){
          var target = $(this).parent();
          var background = p_target.find(".section001 img").attr("src");
          var background1 = p_target.find(".section001 img");
          var title = p_target.find("p").html();
          var title1 = p_target.find("p");
          var image ='<div class="col-md-6 image" id="pf_foto" style="background-image:url('+background+');height:30vh; width:37vh; background-size: cover;"></div>';
          var text = '<div class="col-md-7"> <textarea id="textareatest" class="ckeditor" data-autoresize rows="20" style="width:100%" >'+title+'</textarea></div>';
          var input = '<form id="upload_form" enctype="multipart/form-data" action="/uploader" method="post"> <p id="total_loaded"></p><p id="progress_bar"></p><p id="status"></p> {{ csrf_field() }} <input type="file" onchange="pictures()"  name="files" id="verborgen_file"/> </form>'
          var body = $('<div id="dialog">'+image+text+input+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');      
          
          $("#dialog").dialog({                   
              width: 1000,
              height:670,
              modal: true,
              close: function(event, ui) {
                  $("#dialog").remove();
                  }
              });
          $("#edit_button").click(function(){
              var a = $("#textareatest").val();
              var change = $('#pf_foto').css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
              background1.attr('src', change );
              title1.empty();
              title1.append(a);
              $("#dialog").remove();
            });
    }
    else if(data_id==23){
        var target = $(this).parent();
        var value1 = p_target.find(".video-container iframe");
        var src = p_target.find(".video-container iframe").attr('src');
        var width = p_target.find(".video-container iframe").attr('width');
        var height = p_target.find(".video-container iframe").attr('height');
        var p  = p_target.html();
        var text1 = '<div style="width:100%;"><label style="width:5%;float:left;">url :</label> <input id="text1" data-autoresize rows="1" style="width:95%;float:left;" value="'+src+'"></div>';
        var text2 = '<label style="width:5%;float:left;">width :</label> <input id="text2" data-autoresize rows="1" style="width:95%;float:left;" value="'+width+'">';
        var text3 = '<label style="width:5%;float:left;">height :</label> <input id="text3" data-autoresize rows="1" style="width:95%;float:left;" value="'+height+'">';
        var edit = $('<div id="dialog">'+text1+text2+text3+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');     
        

        $("#dialog").dialog({                   
            width: 1000,
            height:300,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#text1").val();
            var b = $("#text2").val();
            var c = $("#text3").val();
            value1.attr('src',a);
            value1.attr('width',b);
            value1.attr('height',c);
            $("#dialog").remove();
          });
    } 


    else if(data_id==999){
        var target = $(this).parent();
        var value1 = p_target.find("h2");
        var value = p_target.find("h2").html();
        var p  = p_target.html();
        var text = '<textarea id="textareatest" class="ckeditor"  data-autoresize rows="10" style="width:100%">'+value+'</textarea>';
        var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');
      
        

        $("#dialog").dialog({                   
            width: 1000,
            modal: true, 
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            value1.empty();
            value1.append(a);
            $("#dialog").remove();
          });
    }

});

$(document).on('click', '.theme .deletei', function () {
  var data_id = $(this).parent('.theme').attr("data-id");
  var con_id = $('#con_id').val();
  if(data_id ==0){
      $.ajax({
        type : 'get',
        url : '/delete_header/'+con_id,
        dataType : 'json'
    }).done(function(data){
         $('#main-slider').empty();
         $('#main-slider').append('<div class="text-center" data_id="999"><button onclick="AddHeaderImage()" class="btn btn-default">Header нэмэх</button> <h2 style="text-align: center; padding-top: 200px;">{{$conversation->title}}</h2></div>');
       }).always(function(){
       });
  }
  // <button onclick="AddConainerImage()" class="btn btn-default">Header[fixed] нэмэх</button>
  else if(data_id ==1000){
      $.ajax({
        type : 'get',
        url : '/delete_header/'+con_id,
        dataType : 'json'
    }).done(function(data){
         $('#main-slider').empty();
         $('#main-slider').append('<div class="text-center" data_id="999"><button onclick="AddHeaderImage()" class="btn btn-default">Header нэмэх</button> <button onclick="AddConainerImage()" class="btn btn-default">Header[fixed] нэмэх</button><h2 style="text-align: center; padding-top: 200px;">{{$conversation->title}}</h2></div>');
       }).always(function(){
       });
  }
  else{
   $(this).parent('.theme').remove();
  }

});
function AddHeaderImage(){
  $('#main-slider').empty();
  $('#main-slider').append('<div  data-slider-width="100%" data-slider-height="600" data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro theme" data-id="0"><i class="fa fa-edit editi"  id="edit_div"></i> <i class="fa fa-trash-o deletei " id="delete_div"></i><div class="sp-slides"><div class="section-title section-bg"><div class="section__inner"><div class="container"><h2 class="main-slider__title">{{$conversation->title}}</h2></div></div></div><div class="container"><div class="breadcrumb-wrap1"><ol class="breadcrumb"><li>{{$conversation->type}}</li><li class="active roboto_text">{{$conversation->created_at}}</li></ol></div></div></div></div>');
}

function AddConainerImage(){
  $('#main-slider').empty();
  $('#main-slider').append(' <div data-orientation="vertical" class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro theme" data-id="1000"><i class="fa fa-edit editi"  id="edit_div"></i> <i class="fa fa-trash-o deletei " id="delete_div"></i><div class="sp-slides"><div class="section-title section-bg" style="background:none;!important"><div class="section__inner" style="background-color: #fff; !important"  ><div class="container" id=" " style="background-image:url(/uploads/images/cover.jpg);background-size:cover;  height="20vh; background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.86) 100%);z-index: 1;"><h2 class="main-slider__title">{{$conversation->title}}</h2></div></div></div><div class="container"><div class="breadcrumb-wrap1"><ol class="breadcrumb"><li>{{$conversation->type}}</li><li class="active roboto_text">{{$conversation->created_at}}</li></ol></div></div></div></div>');
}

function updateCkeditor() {
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
}


</script> 

@endsection