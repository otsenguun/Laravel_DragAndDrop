@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Video Create
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админ</a></li>
        <li class="active">Video Create</li>
      </ol>

   
    </section>
<section class="content">
  @if (Session::has('flash_message'))
  <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
      <div class="row">
       		<div class="col-xs-12">
				<div class="box">
           			<div class="box-body">
                        {{ Form::open(['route' => 'video.store','files' => true]) }}
                            <div class="form-group">
                                <div class="col-md-3"> {{ Form::label('name', 'Гарчиг') }}</div>
                                <div class="col-md-8">{{ Form::text('title', '',['class' => 'form-control']) }}</div>    
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-md-3"> {{ Form::label('name', 'Линк') }}</div>
                                <div class="col-md-8">{{ Form::text('link','',['class' => 'form-control']) }}</div>    
                            </div><br><br>

                            <div class="form-group">
                                 <div class="text-center"> 
                                     {{ Form::submit('Create', ['class' => 'btn btn-primary']) }} 
                                     <a href="{{route('slider.index')}}" class="btn btn-warning">Back</a></div>
                                </div>
                            </div>
                         {{ Form::close() }}
  					</div>
   				</div>
   			</div>
      </div>
</section>

  </div>

  </div>



  @stop
