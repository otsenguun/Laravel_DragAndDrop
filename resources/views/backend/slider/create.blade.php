@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider Create
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админ</a></li>
        <li class="active">Slider Create</li>
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
                          {{ Form::open(['route' => 'slider.store','files' => true]) }}

                      <div class="form-group">
                        <div class="col-md-3"> {{ Form::label('name', 'Conversation id') }}</div>
                        <div class="col-md-8">{{ Form::number('con_id', '',['class' => 'form-control']) }}</div>    
                      </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-3"> {{ Form::label('name', 'Text side') }}</div>
                        <div class="col-md-8">{{ Form::select('counts',['0' => 'left', '1' => 'right'],null,['class' => 'form-control']) }}</div>    
                      </div>
                    <br>
                    <br>

                      <div class="form-group">
                        <div class="col-md-3">    {{ Form::label('name', 'Image') }}</div>
                        <div class="col-md-8">{{ Form::file('image', ['class' => 'form-control']) }}
                          </br>
                 
                          <div class="text-center"> {{ Form::submit('Create', ['class' => 'btn btn-primary']) }} <a href="{{route('slider.index')}}" class="btn btn-warning">Back</a></div>
                          
                        </div>
                      </div>

                     

                  {{ Form::close() }}

  
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
