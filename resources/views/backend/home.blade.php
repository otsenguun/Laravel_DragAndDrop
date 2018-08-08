@extends('backend.index')


@section('title')
<title>Админ</title>
@stop
@section('content')
@include('backend.partials.nav')
@include('backend.partials.leftbar')
<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hello admin
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      @if (Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hello admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
</div>
@stop