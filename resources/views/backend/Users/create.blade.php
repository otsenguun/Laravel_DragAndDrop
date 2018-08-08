@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Хэрэглэгч үүсгэх
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админ</a></li>
        <li class="active">Хэрэглэгч үүсгэх</li>
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
              {{ HTML::ul($errors->all()) }}

                  {{ Form::open(array('route' => 'user.store')) }}

                      <div class="form-group">
                          {{ Form::label('name', 'Хэрэглэгчийн нэр') }}
                          {{ Form::text('name', '',array('class' => 'form-control')) }}
                      </div>

                      <div class="form-group">
                          {{ Form::label('email', 'И-Мейл') }}
                          {{ Form::email('email','', array('class' => 'form-control')) }}
                      </div>
                      <div class="form-group">
                          {{ Form::label('Password', 'Нууц үг') }}
                          {{ Form::password('password', array('class' => 'form-control')) }}
                      </div>
                      {{ Form::submit('Нэмэх', array('class' => 'btn btn-primary')) }}

                  {{ Form::close() }}
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



            

