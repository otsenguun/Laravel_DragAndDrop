

    jQuery.each(jQuery('textarea[data-autoresize]'), function() {
      var offset = this.offsetHeight - this.clientHeight;

      var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
    });
    
    function ChangeTextAlign (cb) {
            
            var div = document.getElementById ("myDiv");
            var area = document.getElementById ("textarea003");
            
            var rl = document.getElementById ("RLeft");
            if(cb.checked == true){
               div.style.float = 'right';
               area.style.textAlign = 'right';
               rl.innerHTML = "Left";
            }
            else{
              div.style.float = 'left';
              rl.innerHTML = "Right";
              area.style.textAlign = 'left';
            }
    }
    $(document).ready(function(){ 
      $('#textarea003').click(function() { 
          
          var x = document.getElementById("RightLeftForm");
          if (x.style.display === "none") {
              x.style.display = "block";
          } else {
              x.style.display = "none";
          }

       }); 
     
    });

    function ChangeMask () {
        if ($('#Mask').attr('checked'))
        {
          alert('a');
        }
        else
        {
          alert('b');
        }
      }
      
    function previewFile() 
    {
        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
          preview.src = reader.result;
      }, false);

        if (file) {
          reader.readAsDataURL(file);
      }
    }

    $('#verborgen_file').hide();
    $('#uploadButton').on('click', function () {
        $('#verborgen_file').click();
    });
    $('#verborgen_file').change(function () {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
               $('#pf_foto').css('background-image', 'url("' + reader.result + '")');
           }
           if (file) {
            reader.readAsDataURL(file);
                     } 
        else {
             }
    });

//Paralax

function previewFile() 
    {
        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();

        reader.addEventListener("load", function () {
          preview.src = reader.result;
      }, false);

        if (file) {
          reader.readAsDataURL(file);
      }
    }

    $('#uploadParalax').on('click', function () {
        $('#paralaxfile').click();
    });

    $('#verborgen_file1').change(function () {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
               $('#editParalax').css('background-image', 'url("' + reader.result + '")');
           }
           if (file) {
            reader.readAsDataURL(file);
                     } 
        else {
             }
    });

//Show Add TextEditor
    function defaultFunction() 
    {
        var x = document.getElementById("defaultDiv");
        if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("textaddbutton").classList.add = "active";
          } else {
              x.style.display = "none";
          }
    }
//Show Add TextEditor Close
  function cleardiv() 
  {
    var x = document.getElementById("myDIV"+i);
    var a = document.getElementById("textaddbutton");
        if (x.style.display === "none") 
        {
          x.style.display = "block";
          a.style.visibility = 'visible';
        } 
        else 
        {
          x.style.display = "none";
          a.style.visibility = 'visible';
        }
    }
//Show Add TextEditor
    function defaultFunction2() 
    {
        var x = document.getElementById("defaultDiv2");
        if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("textaddbutton").classList.add = "active";
          } else {
              x.style.display = "none";
          }
    }
//Show Add TextEditor Close
  function cleardiv() 
  {
    var x = document.getElementById("myDIV"+i);
    var a = document.getElementById("textaddbutton");
        if (x.style.display === "none") 
        {
          x.style.display = "block";
          a.style.visibility = 'visible';
        } 
        else 
        {
          x.style.display = "none";
          a.style.visibility = 'visible';
        }
    }



//Show Add TextEditor
    function myFunction(i) 
    {
        var x = document.getElementById("myDIV-"+i);
        if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("textaddbutton").classList.add = "active";
          } else {
              x.style.display = "none";
          }
          $('textarea.ckeditor').ckeditor();
    }
//Show Add TextEditor Close
  function cleardiv(i) 
  {
    var x = document.getElementById("myDIV-"+i);
    var a = document.getElementById("textaddbutton");
        if (x.style.display === "none")
        {
          x.style.display = "block";
          a.style.visibility = 'visible';
        } 
        else 
        {
          x.style.display = "none";
          a.style.visibility = 'visible';
        }
    }
//Show Paralax
   function myFunction1(i) 
    {
        var x = document.getElementById("myDIV1"+i);
        if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("paralaxaddbutton").classList.add = "active";
          } else {
              x.style.display = "none";
          }
    }
//Paralax div Close
   function cleardiv1(i) 
    {
      var x = document.getElementById("myDIV1"+i);
      var a = document.getElementById("paralaxaddbutton");
          if (x.style.display === "none") 
          {
            x.style.display = "block";
            a.style.visibility = 'visible';
          } 
          else 
          {
            x.style.display = "none";
            a.style.visibility = 'visible';
          }
      }
//Show Title
   function myFunction2(i) 
    {
        var x = document.getElementById("myDIV2-"+i);
        if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("titleaddbutton").classList.add = "active";
          } else {
              x.style.display = "none";
          }
    }
//Title div Close
   function cleardiv2(i) 
    {
      var x = document.getElementById("myDIV2-"+i);
      var a = document.getElementById("titleaddbutton");
          if (x.style.display === "none") 
          {
            x.style.display = "block";
            a.style.visibility = 'visible';
          } 
          else 
          {
            x.style.display = "none";
            a.style.visibility = 'visible';
          }
      }
//Text Edit
   function submit_form(form_class,id)
   {

        CKEDITOR.instances.ckeditor.updateElement();
        var form = $('form#' + form_class + '-' + id);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
               $('#post-'+data.id).empty();
               $('#post-'+data.id).append(data.view);

               console.log(data.view);
              }).always(function(){

             });
    }

    function editdivclear(i)
    {
      
    }

//Text delete
    function htmldelete(i)
    {
     $.get("/deletecon_post/"+i, function(data){ 
        console.log(data.response); 
    });
     document.getElementById("post-"+i).remove();
    }
//Text Click
    function htmlclicked(i) 
    {
      $.ajax({
        type : 'get',
        url : '/editcon_post/'+i,
        dataType : 'json'
    }).done(function(data){
        $('#post-'+i).empty();
        $('#post-'+i).append(data.view);
           // CKEDITOR.instances.replace('textarea.ckeditor', { height: 'auto' });
           var editor = $('#post-' + i).find('textarea');
           editor.ckeditor();
       }).always(function(){
       });
    }

//Text INsert
function insertForm(form_class,id){

       updateCkeditor();
       var form = $('form#' + form_class + '-' + id);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
       $.ajax({
         type : post,
         url : url,
         data : data,
         dataType : 'json'
       }).done(function(data){
             $('#con_post'+data.id).append(data.view);
       }).always(function(){

     });
       document.getElementById("myDIV-"+id).style.display = "none";

}
//Add General
function AddGeneral(form_class,id){
        var form = $('form#' + form_class);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
               $('#Generalls').append(data.view);
               console.log(data.view);
              }).always(function(){

             });
}
//Add Parallax
function AddParallax(){

}
// Remove Generall
function delete_general(i){
      var r = confirm("Энэ хэсгийг бүгдийг устгах уу ??");
      if (r == true) {
       $.get("/delete_general/"+i, function(){ 
              console.log('Deleted'+i); 
        });
      document.getElementById("general"+i).remove();
     
      } else {
         
      }
}
function paralax_update(form_class,id){

        var form = $('form#' + form_class + '-' + id);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
        alert(data);
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
                console.log('Done');
              }).always(function(){
             });
}
var modal = document.getElementById('myModal');
function toast(editor) {
  modal.style.display = "block";
}

function updateCkeditor() {
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
}



function InsertTitle(form_class,id){
        var form = $("form#"+form_class+'-'+id);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
            $('#general'+data.id).empty();
               $('#general'+data.id).append(data.view);
              }).always(function(){

             });
    }
function titleUpdate(form_class,id){
        var form = $("form#"+form_class+'-'+id);
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
            $('#general'+data.id).empty();
               $('#general'+data.id).append(data.view);
              }).always(function(){
             });
}
// $("p").click(function(){
//      var a = $(this).html();
//      alert(a);

// });
// $("#remove").click(function(){
//   var a = $()
// })

