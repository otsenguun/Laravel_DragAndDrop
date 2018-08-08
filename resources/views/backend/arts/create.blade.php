@extends('backend.index')


@section('content')
@include('backend.partials.nav')
@include('backend.partials.leftbar')
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Arts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Art Create</li>
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
                              {{ Form::open(['route' => 'arts.store','files' => true]) }}
                                      <div class="form-group">
                                        <div class="col-md-3"> {{ Form::label('name', 'Гарчиг') }}</div>
                                        <div class="col-md-8">{{ Form::text('text', '',['class' => 'form-control']) }}</div>  

                                      </div>
                                      <br>  
                                      <br>
                                       <div class="form-group">
                                        <div class="col-md-3"> {{ Form::label('name', 'Төрөл') }}</div>
                                        <div class="col-md-8">{{Form::file('image',['class' => 'form-control'])}}</div>  
                                      </div>
                                      <br>
                                      <br>
                                      <div class="col-md-12">
                                         <div class="text-center"> {{ Form::submit('Next', ['class' => 'btn btn-primary']) }} <a href="#" class="btn btn-warning">Back</a></div>
                                      </div>
                              {{Form::close()}}
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
