@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')

<style>
    .video-container{
        width: 200px;
        height: auto;
    }
    .title{
        max-width: 100px;
      }
</style>
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Videos

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Videos list</li>
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
                                  <th>Гарчиг</th> 
                                  <th>Линк</th> 
                                  <th>Тохиргоо</th>                        
                                </tr>
                            </thead>
                        <tbody>
                        <!-- Main content -->
                        @foreach($videos as $video)
                        <tr>
                            <td class="title">{{ $video->title }}</td>
                            <td>
                                <div class="video-container">
                                <iframe width="560" height="315" src="{{$video->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </td>
                            <td>   <button data-toggle="modal" data-target="#myModal{{$video->id}}">
                                        <i class="fa fa-edit"></i>
                                    </button> 
                                    <button data-toggle="modal" data-target="#deleteslider{{$video->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                        </td>
                         </tr>
                           <div class="modal fade" id="myModal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                              {{ Form::model($video,['method'=>'PATCH','action'=>['VideoController@update',$video->id],'files' => true] ) }}
                                              <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="col-md-3">{{ Form::label('name', 'Гарчиг') }}</div>
                                                        <div class="col-md-8">{{ Form::text('text',$video->title, ['class' => 'form-control']) }}
                                                        </div>
                                                        <br>
                                                    </div>
                                                  <div class="form-group">
                                                      <div class="col-md-3">{{ Form::label('name', 'Линк') }}</div>
                                                      <div class="col-md-8">{{ Form::text('text',$video->link, ['class' => 'form-control']) }}
                                                      </div>
                                                      <br>
                                                  </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                              </div>
                                              {{ Form::close() }}
                                          </div>
                              </div>
                        </div>

                        <div class="modal fade" id="deleteslider{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              {{$video->title}}
                                          </div>
                                          {!! Form::open(['method' => 'DELETE', 'route' => ['video.destroy', $video->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}
                                              <div class="modal-body">
                                                  {{ csrf_field() }}
                                                  <div class="text-center">
                                                      <input type="hidden" name="_method" value="DELETE">
                                                      {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                  </div>
                                              </div>
                                         {!! Form::close() !!}
                                      </div>
                                  </div>
                        </div>

                        @endforeach
                        </tbody>
                        </table>
                    <div class="text-right">{{ $videos->links() }}</div>
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
