@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Banner

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Banners list</li>
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
                                  <th>Линк</th>
                                  <th>Байрлал</th>
                                  <th>Зураг</th>   
                                  <th>Тохиргоо</th>                        
                                </tr>
                            </thead>
                        <tbody>
                        <!-- Main content -->
                        @foreach($arts as $art)
                        <tr>
                            <td>{{ $art->text }}</td>
                            <td>
                              @if($art->position == 0)
                              Идвэхгүй
                              @elseif($art->position == 1)
                              Дэлгэрэнгүй хуудас
                              @elseif($art->position == 2)
                              Хэрэглэгчийн хуудас
                              @endif
                            </td>
                            <td><img src="/uploads/{{ $art->image }}" style="width: 100px;height: 100px;"></td>
                            <td>   <button data-toggle="modal" data-target="#myModal{{$art->id}}">
                                        <i class="fa fa-edit"></i>
                                    </button> 
                                    <button data-toggle="modal" data-target="#deleteslider{{$art->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                        </td>
                         </tr>
                           <div class="modal fade" id="myModal{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                   <div class="text-center">{{ Html::image('uploads/'.$art->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}</div>
                                              </div>
                                              {{ Form::model($art,['method'=>'PATCH','action'=>['ArtController@update',$art->id],'files' => true] ) }}
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <div class="col-md-3">    {{ Form::label('name', 'Зураг') }}</div>
                                                      <div class="col-md-8">{{ Form::file('image', ['class' => 'form-control']) }}
                                                      </div>
                                                      <br>
                                                  </div>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <div class="col-md-3">    {{ Form::label('name', 'Байршил') }}</div>
                                                      <div class="col-md-8">{{ Form::select('position',['0'=>'Идвэхгүй','1'=>'Дэлгэрэнгүй хуудас','2'=>'Хэрэглэгчийн хуудас'],$art->position,['class' => 'form-control']) }}
                                                      </div>
                                                      <br>
                                                  </div>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <div class="col-md-3">    {{ Form::label('name', 'Линк') }}</div>
                                                      <div class="col-md-8">{{ Form::textarea('text',$art->text, ['class' => 'form-control']) }}
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

                        <div class="modal fade" id="deleteslider{{$art->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          </div>
                                          {!! Form::open(['method' => 'DELETE', 'route' => ['arts.destroy', $art->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

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
                    <div class="text-right">{{ $arts->links() }}</div>
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
