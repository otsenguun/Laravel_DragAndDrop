@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Хэрэглэгчид
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
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
                  <th>Name</th>
                  <th>Role</th>
                  <th>User Image</th>
                  <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $key=> $slider)
                  <tr>
                      <td>{{$key}}</td> 
                      <td><a href="/user_description/{{$slider->id}}" style="color: black;">{{$slider->name}}</a></td> 
                      <td>{{$slider->role}}</td>
                      <td><img class="img" src="uploads/ProfileImage/{{$slider->avatar}}" style="width: 60px;height: 50px;"></td>
                      <td>
                       <div class="text-center">
                           @if(Auth::user()->role=='admin')
                             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$slider->id}}">
                                 <span class="fa fa-edit"></span>  
                             </button>
                             @if($slider->role != 'admin')
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteuser{{$slider->id}}" >
                              <span class="fa fa-trash-o"></span>
                              @endif
                             @else
                             <a href="/user_description/{{$slider->id}}" class="btn btn-primary">Харах</a>
                              @endif
                           </button>
                      </div>
                      </td>
                  </tr>
                  <div class="modal fade" id="myModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <div class="text-center">{{ Html::image('uploads/ProfileImage/'.$slider->avatar, 'alt', [ 'width' => 200, 'height' => 150 ]) }}</div>
                              </div>
                              {{ Form::model($slider,['method'=>'PATCH','action'=>['UserController@update',$slider->id],'files' => true] ) }}
                              <div class="modal-body">
                                <div class="form-group">
                                      <div class="col-md-3">    {{ Form::label('name', 'Зураг') }}</div>
                                      <div class="col-md-8">{{ Form::file('image',['class' => 'form-control']) }}</div>
                                      <br>
                                  </div>
                                  <div class="form-group">
                                        <div class="col-md-3">    {{ Form::label('name', 'Нэр') }}</div>
                                        <div class="col-md-8">{{ Form::text('name',$slider->name, ['class' => 'form-control']) }}</div>
                                        <br>
                                    </div>
                                  <div class="form-group">
                                      <div class="col-md-3">    {{ Form::label('name', 'Email') }}</div>
                                      <div class="col-md-8">{{ Form::email('email',$slider->email, ['class' => 'form-control']) }}

                                      </div>
                                      <br>
                                  </div>
                                  <div class="form-group">
                                        <div class="col-md-3">    {{ Form::label('name', 'Mэргэжил') }}</div>
                                        <div class="col-md-8">{{ Form::text('name',$slider->major, ['class' => 'form-control']) }}</div>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-md-3">    {{ Form::label('name', 'Дэлгэрэнгүй') }}</div>
                                            <div class="col-md-8">{{ Form::textarea('name',$slider->desc, ['class' => 'form-control']) }}</div>
                                            <br>
                                        </div>
                                  <div class="form-group">
                                    <div class="col-md-3"> {{ Form::label('name', 'Password') }}</div>
                                    <div class="col-md-8">{{ Form::password('password',['class' => 'form-control']) }}</div>    
                                  </div>




                              </div>
                              <div class="modal-footer">

                                  <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>

                              </div>






                              {{ Form::close() }}


                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="deleteuser{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <div class="text-center">{{$slider->name}} = Delete ?</div>
                              </div>
                              <form method="get" action="{{url('/deleteuser',$slider->id)}}" class="delete_form">
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
