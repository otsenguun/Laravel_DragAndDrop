@extends('backend.index')

@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Жиргээ

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Жиргээ list</li>
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
                                      <th>Жиргээ</th>   
                                      <th>Тохиргоо</th>                        
                                    </tr>
                                </thead>
                                      <tbody>
                                      <!-- Main content -->
                                      @foreach($twitters as $twitter)
                                      <tr>
                                          <td>{{ $twitter->title }}</td>
                                          <td>{{ $twitter->desc}}</td>
                                          <td>    <button data-toggle="modal" data-target="#myModal{{$twitter->id}}">
                                                      <i class="fa fa-edit"></i>
                                                  </button> 
                                                  <button data-toggle="modal" data-target="#deleteslider{{$twitter->id}}">
                                                      <i class="fa fa-trash-o"></i>
                                                  </button>
                                                  @if($twitter->show==0)
                                                  <a class="btn btn-primary" href="{{url('showtwitter',$twitter->id)}}">Харуулах</a>
                                                  @else
                                                  <a class="btn btn-danger" href="{{url('removetwitter',$twitter->id)}}">Болиулах</a>
                                                  @endif
                                      </td>
                                       </tr>

                                       <div class="modal fade" id="myModal{{$twitter->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                 
                                                            </div>
                                                            {{ Form::model($twitter,['method'=>'PATCH','action'=>['TwitterController@update',$twitter->id],'files' => true] ) }}
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <div class="col-md-3">    {{ Form::label('name', 'Title') }}</div>
                                                                    <div class="col-md-8">{{ Form::text('title',$twitter->title, ['class' => 'form-control']) }}
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <div class="col-md-3">    {{ Form::label('name', 'Twit') }}</div>
                                                                    <div class="col-md-8">{{ Form::textarea('desc',$twitter->desc, ['class' => 'form-control']) }}
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

                                      <div class="modal fade" id="deleteslider{{$twitter->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        </div>
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['twitter.destroy', $twitter->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

                                                            <div class="modal-body">
                                                                {{ csrf_field() }}
                                                                <div class="text-center">
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    {!! Form::submit('Delete') !!}

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
                           <div class="text-right">{{ $twitters->links() }}</div>
                        <!-- /.content -->
                        </div>
                    </div>
               </div>
            <!-- /.col -->
           </div>
    </section>

</div>

</div>



@stop
