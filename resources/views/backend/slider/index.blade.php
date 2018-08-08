@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sliders
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Sliders list</li>
      </ol>

    </section>
 <section class="content">
  @if (Session::has('flash_message'))
  <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
      <div class="row">
       		 <div class="col-xs-12">
							 <div class="box">

            <!-- /.box-header -->
           							 <div class="box-body">
         
    <!-- Main content -->
                          <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Slider Image</th>
                  <th>Settings</th>

                 
                </tr>
                </thead>
                <tbody>
    <!-- Main content -->

                    
                  @foreach($sliders as $key=> $slider)
                  <tr>
                    <td>{{$key}}</td> 

                  
                   <td><img class="img" src="uploads/slider/{{$slider->image}}" style="width: 60px;height: 50px;"></td>
                  <td>
                   <div class="text-center">
              
                 
                   
                

                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$slider->id}}">
                           <span class="fa fa-edit"></span>
                       </button>
                       <button class="btn btn-danger" data-toggle="modal" data-target="#deleteslider{{$slider->id}}" ><span class="fa fa-trash-o"></span>


                       </button>
                 


                  


                  </div>
                  </td>
                    
                  </tr>
                  <div class="modal fade" id="myModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <div class="text-center">{{ Html::image('uploads/slider/'.$slider->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}</div>
                              </div>
                              {{ Form::model($slider,['method'=>'PATCH','action'=>['SliderController@update',$slider->id],'files' => true] ) }}
                              <div class="modal-body">
                                  <div class="form-group">
                                      <div class="col-md-3">    {{ Form::label('name', 'Image') }}</div>
                                      <div class="col-md-8">{{ Form::file('image', ['class' => 'form-control']) }}

                                      </div>
                                      <br>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-3">    {{ Form::label('name', 'ID') }}</div>
                                      <div class="col-md-8">{{ Form::number('con_id',$slider->con_id, ['class' => 'form-control']) }}

                                      </div>
                                      <br>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-3"> {{ Form::label('name', 'Text side') }}</div>
                                    <div class="col-md-8">{{ Form::select('counts',['0' => 'left', '1' => 'right'],$slider->counts,['class' => 'form-control']) }}</div>    
                                  </div>




                              </div>
                              <div class="modal-footer">

                                  <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>

                              </div>






                              {{ Form::close() }}


                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="deleteslider{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <div class="text-center">{{ Html::image('uploads/slider/'.$slider->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}  Delete ?</div>
                              </div>
                              <form method="get" action="{{url('/deleteslider',$slider->id)}}" class="delete_form">
                                  <div class="modal-body">
                                      {{ csrf_field() }}
                                      <div class="text-center">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <button class="btn btn-danger">Delete
                                          </button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      </div>
                                  </div>




                              </form>


                          </div>
                      </div>

                  </div>
                   @endforeach

           </tbody>
         </table>
          <div class="text-right">{{ $sliders->links() }}</div>

  
    <!-- /.content -->
  									</div>
   							 </div>
   			 </div>

        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>

  </div>

  </div>



  @stop
