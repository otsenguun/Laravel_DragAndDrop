@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Messages

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
                                  <th>Нэр</th>
                                  <th>И-Мэйл</th>
                                  <th>Утасны дугаар</th>
                                  <th>Агуулга</th>
                                  <th style="width: 40%;">Мессэж</th>                              
                                </tr>
                            </thead>
                        <tbody>
                        <!-- Main content -->
                        @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->message }}</td>
                         </tr>
                        @endforeach
                        </tbody>
                        </table>
                    <div class="text-right">{{ $messages->links() }}</div>
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
