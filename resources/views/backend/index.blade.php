<!DOCTYPE html>

</html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <!-- Mirrored from themesdesign.in/appzia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 11:17:22 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">  
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/iCheck/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/skins/_all-skins.min.css') }}">
    @yield('title')
  </head>
  <body class="sidebar-mini skin-black-light">
    @yield('content')
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Хэрэглэгчийн мэдээлэл</h4>
      </div>
      <div class="modal-body">

          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Мэдээлэл</a></li>
            <li><a data-toggle="tab" href="#menu1">Тохиргоо</a></li>
            <li><a data-toggle="tab" href="#menu2">Оруулсан Мэдээ</a></li>
          </ul>
        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <h3>Хэрэглэгчийн мэдээлэл</h3>
            <label> Нэр : </label>{{Auth::user()->name}} <br> 
            <label> И-мейл: </label>{{Auth::user()->email}} <br>  
            <label> Mэргэжил: </label>{{Auth::user()->major}} <br>
            <label> Төрөл: </label>{{Auth::user()->role}} <br>  
            <label> Дэлгэрэнгүй: </label>{{Auth::user()->desc}} <br> 
            <label> Socials:</label>
            @foreach(Auth::user()->socials as $social)
           <a href="{{$social->link}}"><i class="{{$social->icon}}"></i></a> 
            @endforeach
          </div>
          <div id="menu1" class="tab-pane fade">
            <h3>Мэдээлэл өөрчлөх</h3>
            {{Form::open(['method'=> 'PATCH','route' => ['user.update',Auth::user()->id],'files' => true])}}

             <div class="col-md-3"><label> Зураг : </label></div>
             <div class="col-md-9">{{Form::file('image',['class'=>'form-control'])}}</div>

             <div class="col-md-3"><label> Нэр : </label></div>
             <div class="col-md-9">{{Form::text('name',Auth::user()->name,['class'=>'form-control'])}}</div>

             <div class="col-md-3"> <label> И-мейл: </label></div>
             <div class="col-md-9">{{Form::email('email',Auth::user()->email,['class'=>'form-control'])}}</div>

             <div class="col-md-3"> <label> Mэргэжил: </label></div>
             <div class="col-md-9">{{Form::text('major',Auth::user()->major,['class'=>'form-control'])}}</div>

             <div class="col-md-3"> <label> Дэлгэрэнгүй: </label></div>
             <div class="col-md-9">{{Form::textarea('desc',Auth::user()->desc,['class'=>'form-control'])}}</div>

             <div class="text-center">
                {{Form::submit('Save')}}
             </div>

            {{Form::close()}}
            
            {{Form::open(['route'=>'social.store'])}}
            <div class="col-md-3">
              <select name="icon" class="form-control">
                <option value="icon fa fa-twitter">Twitter</option>
                <option value="icon fa fa-facebook">Facebook</option>
                <option value="icon fa fa-instagram">Instagram</option>
                <option value="icon fa fa-linkedin">Linkedin</option>
                <option value="icon fa fa-youtube-play">You Tube</option>
              </select>
              </div>
              <div class="col-md-7">   <input type="url" name="link" class="form-control"></div>
              <div class="col-md-2"> <input type="submit" class="btn btn-default" value="Add Social"></div>
             <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            {{Form::close()}}
          </div>
          <div id="menu2" class="tab-pane fade">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Гарчиг</th>
                  <th>Зураг</th>
                  <th>Оруулсан огноо</th>
                  <th>Тохиргоо</th>
                </tr>
              </thead>
              <tbody>
                  @foreach(Auth::user()->conversations as $cp)
                  <tr>
                    <td>{{$cp->title}}</td>
                    <td>{{$cp->image}}</td>
                    <td>{{$cp->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('conversation.show',$cp->id)}}">Харах</a></td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
       </div>
      </div>
       <div class="modal-footer" style="padding-top: 20px;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
      </div>
    </div>
  </div>
</div>
</body>
<script src="{{ URL::asset('AdminLTE/bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/moment/min/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"
    type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/plugins/iCheck/icheck.min.js') }}"
    type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/bower_components/fastclick/lib/fastclick.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>

  <script scr="{{URL::asset('/infinitescroll/infinite-scroll.pkgd.js')}}"></script>



<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<script>
      $('#product').on('change',function(e){


          var prod_id =e.target.value;


          $.get('/ajax-carmark?prod_id=' + prod_id,function(data){

            $('#carmark').empty();
            $.each(data,function(index,carmarkObj){


              $('#carmark').append('<option value="'+carmarkObj.id+'">'+carmarkObj.mark_name+'</option>');

            });

       });


   });

</script>
<script>

function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>



<script>
     $(document).on('click', '#delete-btn1', function(e) {
            e.preventDefault();
            var self = $(this);
            swal({
                    title: "Are you Sure ?",
                    text: "",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Тийм, delete it!",
                    closeOnConfirm: true
                },
                function(isConfirm){
                    if(isConfirm){
                        swal("Deleted!","this user has deleted", "success");
                        setTimeout(function() {
                            self.parents(".delete_form").submit();
                        }, 1000);
                    }
                    else{
                        swal("cancelled","Your user are safe", "error");
                    }
                });
        });
</script>

<!--  <script type="text/javascript">
  $('#searchtext').change(function() {
        var form = $("#searchForm");
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
                  console.log(data);
                  $('#example2').empty();
                  $('#example2').append(data.view);

              }).always(function(){
                
                
             });
      });
  </script> -->
  <script type="text/javascript">
  function showResult() {
        var form = $("#searchForm");
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
                  console.log(data);
                  $('#example2').empty();
                  $('#example2').append(data.view);

              }).always(function(){
                
                
             });
      }
  </script>
<!-- Mirrored from themesdesign.in/appzia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 11:17:26 GMT -->
  </body>
</html>
