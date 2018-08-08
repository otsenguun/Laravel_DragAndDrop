@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider Edit
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Slider Edit</li>
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
                          <div class="text-center">
             

               {{ Html::image('uploads/slider/'.$slider->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}
            </div>

         
    <!-- Main content -->
     {{ Form::model($slider,['method'=>'PATCH','action'=>['SliderController@update',$slider->id],'files' => true] ) }}
                      <div class="form-group">
                        <div class="col-md-3"> {{ Form::label('name', 'Subtitle') }}</div>
                        <div class="col-md-8">{{ Form::text('subtitle', $slider->subtitle,['class' => 'form-control']) }}</div>    
                      </div>
                    </br>
                    </br>
                    </br>
                    <div class="form-group">
                        <div class="col-md-3"> {{ Form::label('name', 'Title') }}</div>
                        <div class="col-md-8">{{ Form::text('title', $slider->title,['class' => 'form-control']) }}</div>    
                      </div>
                      </br>
                    </br>
                      <div class="form-group">
                        <div class="col-md-3"> {{ Form::label('name', 'Name') }}</div>
                        <div class="col-md-8">{{ Form::text('name', $slider->name,['class' => 'form-control']) }}</div>    
                      </div>
                      </br>
                    </br>
                      <div class="form-group">
                        <div class="col-md-3">    {{ Form::label('name', 'Image') }}</div>
                        <div class="col-md-8">{{ Form::file('image', ['class' => 'form-control']) }}
                          </br>
                 
                          <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <a href="{{route('slider.index')}}" class="btn btn-warning">Back</a></div>
                          
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
