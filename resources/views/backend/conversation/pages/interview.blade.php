@extends('backend.index')

@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')

<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Cурвалжлага </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Cурвалжлага</li>
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
            {{Form::open(['method'=>'post','url'=>'conversationsearch','id'=>'searchForm'])}}
            <input type="text" name="title" placeholder="Гарчигаар хайх" onkeyup="showResult()">
            <input type="hidden" name="user_role" value="{{Auth::user()->role}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
             <input type="hidden" name="type" value="Cурвалжлага">
            <button onclick="searchButton()" type="submit" class="btn btn-default">Хайлт</button>
            {{Form::close()}}
             <table id="example2" class="table table-bordered table-hover">
                        <thead>
                              <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Image</th>
                                 <th>Settings</th>
                              </tr>
                        </thead>
                        <tbody>
                      @foreach($conversations as $key=> $tour)
                      <tr>
                          <td>{{$tour->id}}</td>
                          <td>{!! \Illuminate\Support\Str::limit ($tour->title, 51,'....')  !!}</td>
                          <td>{{$tour->type}}</td>
                          @if(empty($tour->image))
                            <td> <img src="images/No_Image.png" style="width: 100px;height: 100px;"> </td>
                          @else
                              <td> <img src="uploads/Conimage/{{$tour->image}}" style="width: 100px;height: 100px;"> </td>
                          @endif
                          <td>
                             <div class="text-center">
                                <a href="{{url('conversationshow1',$tour->id)}}" class="btn btn-primary">комментууд</a>
                                <a href="{{route('conversation.show',$tour->id)}}" class="btn btn-primary">дэлгэрэнгүй</a>
                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$tour->id}}">
                                       <span class="fa fa-edit"></span>
                                   </button>
                                   <button class="btn btn-danger" data-toggle="modal" data-target="#deleteconversation{{$tour->id}}" >
                                        <span class="fa fa-trash-o"></span>
                                   </button>
                              </div>
                          </td>
                      </tr>
                      <div class="modal fade" id="myModal{{$tour->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="text-center">
                                          {{ Html::image('uploads/Conimage/'.$tour->image, 'alt', [ 'width' => 200, 'height' => 150 ]) }}
                                        </div>
                                  </div>
                                  {{ Form::model($conversations,['method'=>'PATCH','action'=>['ConversationController@update',$tour->id],'files' => true] ) }}
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Name') }}</div>
                                          <div class="col-md-8">{{ Form::text('title', $tour->title,['class' => 'form-control']) }}</div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Image') }}</div>
                                          <div class="col-md-8">{{ Form::file('image',['class' => 'form-control']) }}</div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Оруулсан') }}</div>
                                          <div class="col-md-8">{{ Form::date('date',$tour->created_at,['class' => 'form-control'] ) }}</div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <div class="col-md-3"> {{ Form::label('name', 'Өнгө') }}</div>
                                          <div class="col-md-8">{{ Form::select('jstyle',['0'=>'Хар','1'=>'Өнгөт'],$tour->jstyle,['class' => 'form-control'] ) }}</div>
                                      </div>
                                       <br>

                                  </div>

                                  <div class="modal-footer">
                                      <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                                  {{ Form::close() }}
                              </div>
                          </div>
                      </div>
                      <div class="modal fade" id="deleteconversation{{$tour->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  </div>
                                  <form method="get" action="{{url('/deleteconversation',$tour->id)}}" class="delete_form">
                                      <div class="modal-body">
                                          {{ csrf_field() }}
                                          <div class="text-center">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <button class="btn btn-danger">Delete
                                              </button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                       @endforeach
                   </tbody>
                 </table>
                 <div class="text-right">{{ $conversations->links() }}</div>
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