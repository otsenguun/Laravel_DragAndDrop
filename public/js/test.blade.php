
  @extends('app')
  @section('content')
    <style>
        #sortable1, #sortable2 {
          border: 1px solid #eee;
          width: 100%;
          height: auto;
          list-style-type: none;
          margin: 0;
          padding: 5px 0 0 0;
          margin-right: 10px;
          background-color: #fff;
        }
        #sortable1 div{
          margin-top: 5px;
          margin-bottom: 5px;
          padding: 5px;
          font-size: 1.2em;
          height: auto;
        }
        #sortable2 div{
          margin-top: 5px; 
          padding: 5px;
        }
        .ui-state-default{
          height: auto;
        }
        .test {
          height: auto;
          background-color: #fff;
          color: #000;
          text-align: center;
          font-size: 30px;
          border: 1px solid #eee;
        }
        .nav-tabs{
          margin-top: 10px;
          padding-bottom: 10px;
        }
        .editi{
          padding: 5px;
          opacity: 0;
          transition: 0.2s;
          color: #000;
          z-index: 99999;
          font-size: 20px;
          cursor: pointer;
        }
        .deletei{
          padding: 5px;
          opacity: 0;
          transition: 0.2s;  
          color: #000;
          z-index: 99999;
          font-size: 24px;
          cursor: pointer;
        }
        .black{
          color: black;
        }
        
        .theme{
          border: 1px solid #eee;
          background-color: #fff;
        }
        .theme i{
          /*float: left;*/
        }
        .theme:hover .editi{
            opacity: 1;
        }
        .theme:hover .deletei{
          opacity: 1;
        }
        .paper{
          padding: 20px;
          margin-top: 20px;
          background-color: #fff;
        }
        .image{
          width: 100%;
          height: auto;
        }

  </style>
  <style>
  .ui-state-highlight { height: 1.5em; line-height: 1.2em; }
  </style>

<div class="col-md-3">
  <div class="text-center"><h2>Сонгох хэсэг</h2></div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#column">Хуудас хуваалт</a></li>
        <li><a data-toggle="tab" href="#text">Бичиг</a></li>
        <li><a data-toggle="tab" href="#picture">Зураг</a></li>
        <li><a data-toggle="tab" href="#picture">Зураг + Бичиг</a></li>
    </ul>
    <div class="tab-content">
       <!-- start huudas huwaalt -->
      <div id="column" class="tab-pane fade in active" ondrop="drop(event)" ondragover="allowDrop(event)" style="padding-bottom: 100px;">
          <ul id="sortable1" class="dropfalse">
             <!--  <div class="ui-state-default col-md-6" data-id="0"> <img src="../min-picture/1x1.jpg"></div>
              <div class="ui-state-default col-md-6" data-id="1"><img src="../min-picture/2x1.jpg"></div>
              <div class="ui-state-default" data-id="2"><img src="../min-picture/1x3.jpg"></div> -->
              <div class="ui-state-default col-md-12" data-id="0"><img src="../min-picture/header.jpg"></div>
              <div class="ui-state-default col-md-12" data-id="1"><img src="../min-picture/ishlel.jpg"></div>
              <div class="ui-state-default col-md-12" data-id="2"><img src="../min-picture/author.jpg"></div>
              <div class="ui-state-default col-md-12" data-id="3"><img src="../min-picture/title.jpg"></div>
              <div class="ui-state-default col-md-12" data-id="4"><img src="../min-picture/test.jpg"></div>
              <div class="ui-state-default col-md-12" data-id="5"><img src="../min-picture/2x1.jpg"></div>

          </ul>
       </div>
          <div id="text" class="tab-pane">
            <ul id="sortable1" class="dropfalse">
              <li class="ui-state-default col-md-12">test</li>
              
          </div>
          <div id="picture" class="tab-pane"></div>
    </div>
</div>
<div class="col-md-9" style="background-color: #868585;padding-bottom:100px;padding-top: 50px; ">

    <button class="btn btn-default" onclick="save('{{$conversation->id}}')" style="float: right;margin-top: 10px;">Save</button>
    <button class="btn btn-default" onclick="clearall('{{$conversation->id}}')" style="float: right;margin-top: 10px;">Clear All</button>
    <button class="btn btn-default"  style="float: right;margin-top: 10px;"><i class="fa fa-search-plus"></i></button>
    <!-- <div class="container paper"> -->
    @include('frontend.partials.header')
    <ul id="sortable2" class="connectedSortable" style="padding-top: 50px;">
          {!!$conversation->desc!!}
    </ul>  
 <!--  </div> -->



</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script type="text/javascript">
$(document).on('click', '.theme .editi', function () {
  var data_id = $(this).parent('.theme').attr("data-id");
  var p_target = $(this).parent();

  if(data_id==0){
    var target = $(this).parent();

    var background = p_target.find(".section-bg").css("background-image").replace(/^url\(['"]?/,'').replace(/['"]?\)$/,'');
    var title = p_target.find("h2").html();
    var title1 = p_target.find("h2");
    var image ='<div class="image" style="background-image:url('+background+');height:500px;"></div>';
    var text = '<textarea id="textareatest" class="ckeditor" style="width:100%">'+title+'</textarea>';
    var body = $('<div id="dialog">'+image+'<br>'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');        
      event.preventDefault();

        $("#dialog").dialog({                   
            width: 1500,
            modal: true,
            close: function(event, ui) {
                $("#dialog").remove();
                }
            });
        $("#edit_button").click(function(){
            var a = $("#textareatest").val();
            title1.empty();
            title1.append(a);
            $("#dialog").remove();
          });

  }
  else if(data_id==1){
    var target = $(this).parent();
    var value1 = p_target.find("p");
    var value = p_target.find("p").html();
    var p  = p_target.html();
    var text = '<textarea id="textareatest" class="ckeditor" style="width:100%">'+value+'</textarea>';
    var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');        
      event.preventDefault();

        $("#dialog").dialog({                   
            width: 1500,
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
    var text = '<textarea id="textareatest" class="ckeditor" style="width:100%">'+value+'</textarea>';
    var edit = $('<div id="dialog">'+text+'<button id="edit_button" class="btn btn-default" type="button" style="float:right">Save</button></div>').appendTo('body');        
      event.preventDefault();

        $("#dialog").dialog({                   
            width: 1500,
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
 $(this).parent('.theme').empty();
});



</script>
  





    

@endsection