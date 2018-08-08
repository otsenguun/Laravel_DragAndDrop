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
            <li class="active">Art details</li>
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
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <img src="/uploads/{{$art->image}}">
                            </div>

                             <label>Урлангын нэр :</label>{{$art->text}}
                            <div class="col-md-6">
                                {{Form::open(['route' => 'arts_desc.store','files' => true])}}
                            Тайлбар оруулах : <input type="textarea" name="desc">
                            <input type="hidden" name="art_id" value="{{$art->id}}">
                            <input type="submit" value="Нэмэх">
                            {{Form::close()}}
                               
                            </div>
                            @foreach($art->descs as $desc)
                            <p>
                                <div class="col-md-10">{{$desc->desc}}</div>
                                 <div class="col-md-2">
                                    <button data-toggle="modal" data-target="#myModal{{$desc->id}}">
                                        <i class="fa fa-edit"></i>
                                    </button> 
                                    <button data-toggle="modal" data-target="#deleteslider{{$desc->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </div>
                            </p>


                        <div class="modal fade" id="myModal{{$desc->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                              {{ Form::model($desc,['method'=>'PATCH','action'=>['ArtDescController@update',$desc->id],'files' => true] ) }}
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <div class="col-md-3">    {{ Form::label('name', 'Дэлгэрэнгүй') }}</div>
                                                      <div class="col-md-8">{{ Form::textarea('desc',$desc->desc, ['class' => 'form-control']) }}
                                                      </div>
                                                      <br>
                                                  </div>
                                                  {{Form::hidden('art_id',$desc->art_id)}}
                                              </div>
                                              <div class="modal-footer">
                                                  <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                              </div>
                                              {{ Form::close() }}
                                          </div>
                              </div>
                        </div>

                        <div class="modal fade" id="deleteslider{{$desc->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          </div>
                                          {!! Form::open(['method' => 'DELETE', 'route' => ['arts_desc.destroy', $desc->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

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

                            
                        </div>
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
