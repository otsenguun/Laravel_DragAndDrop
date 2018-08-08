@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
    <div class="content-wrapper">
            <section class="content-header">
                    <h1>
                        Холбоо барих
                    </h1>

                    <ol class="breadcrumb">
                        <li><a href="#">
                                <i class="fa fa-dashboard"></i>
                                        Admin
                            </a>
                            </li>
                        <li class="active">Холбоо барих</li>
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

                                    <div class="col-md-3">
                                        <div class="col-md-12">
                                            <div class="col-md-12"><label for="">LOCATION</label></div>
                                            @foreach($locations as $key => $location)
                                            <div class="col-md-10">
                                                    <p><b>{{$key}}</b>&nbsp;:&nbsp;{{$location->name}}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="fa fa-edit"  data-toggle="modal" data-target="#editlocation{{$location->id}}"></button>
                                            </div>

                                            <div class="modal fade" id="editlocation{{$location->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <div class="text-center">
                                                                    <h3>Location</h3>
                                                                </div>
                                                        </div>
                                                        {{ Form::model($locations,['method'=>'PATCH','action'=>['LocationController@update',$location->id],'files' => true] ) }}
                                                            <div class="col-md-12">
                                                                {{Form::text('name',$location->name,['class'=>'form-control'])}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <a href="{{url('locationdelete',$location->id)}}" class="btn btn-danger" style="float:right">Delete</a>
                                                                </div>
                                                               
                                                            </div>
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{Form::open(['route'=>'location.store'])}}
                                        <div class="col-md-9">
                                            {{Form::text('name','',['class'=>'form-control'])}}
                                        </div>
                                        <div class="col-md-3">
                                            {{Form::submit('Нэмэх',['class'=>'btn btn-success'])}}
                                        </div>
                                        {{Form::close()}}
                                    </div>


                                    <div class="col-md-3">
                                        <div class="col-md-12">
                                            <div class="col-md-12"><label for="">PHONE</label></div>
                                            @foreach($phones as $key => $phone)
                                            <div class="col-md-10">
                                                    <p><b>{{$key}}</b>&nbsp;:&nbsp;{{$phone->name}}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="fa fa-edit"  data-toggle="modal" data-target="#editphone{{$phone->id}}"></button>
                                            </div>

                                            <div class="modal fade" id="editphone{{$phone->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <div class="text-center">
                                                                    <h3>phone</h3>
                                                                </div>
                                                        </div>
                                                        {{ Form::model($phones,['method'=>'PATCH','action'=>['PhoneController@update',$phone->id],'files' => true] ) }}
                                                            <div class="col-md-12">
                                                                {{Form::text('name',$phone->name,['class'=>'form-control'])}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <a href="{{url('phonedelete',$phone->id)}}" class="btn btn-danger" style="float:right">Delete</a>
                                                                </div>
                                                                
                                                            </div>
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{Form::open(['route'=>'phone.store'])}}
                                        <div class="col-md-9">
                                            {{Form::text('name','',['class'=>'form-control'])}}
                                        </div>
                                        <div class="col-md-3">
                                            {{Form::submit('Нэмэх',['class'=>'btn btn-success'])}}
                                        </div>
                                        {{Form::close()}}
                                    </div>


                                    <div class="col-md-3">
                                        <div class="col-md-12">
                                            <div class="col-md-12"><label for="">EMAIL</label></div>
                                            @foreach($emails as $key => $email)
                                            <div class="col-md-10">
                                                    <p><b>{{$key}}</b>&nbsp;:&nbsp;{{$email->name}}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="fa fa-edit"  data-toggle="modal" data-target="#editemail{{$email->id}}"></button>
                                            </div>

                                            <div class="modal fade" id="editemail{{$email->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <div class="text-center">
                                                                    <h3>email</h3>
                                                                </div>
                                                        </div>
                                                        {{ Form::model($emails,['method'=>'PATCH','action'=>['EmailController@update',$email->id],'files' => true] ) }}
                                                            <div class="col-md-12">
                                                                {{Form::text('name',$email->name,['class'=>'form-control'])}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <a href="{{url('emaildelete',$email->id)}}" class="btn btn-danger" style="float:right">Delete</a>
                                                                </div>
                                                                
                                                            </div>
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{Form::open(['route'=>'email.store'])}}
                                        <div class="col-md-9">
                                            {{Form::text('name','',['class'=>'form-control'])}}
                                        </div>
                                        <div class="col-md-3">
                                            {{Form::submit('Нэмэх',['class'=>'btn btn-success'])}}
                                        </div>
                                        {{Form::close()}}
                                    </div>


                                    <div class="col-md-3">
                                        <div class="col-md-12">
                                            <div class="col-md-12"><label for="">WORKING HOURS</label></div>
                                            @foreach($hours as $key => $hour)
                                            <div class="col-md-10">
                                                    <p><b>{{$key}}</b>&nbsp;:&nbsp;{{$hour->name}}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="fa fa-edit"  data-toggle="modal" data-target="#edithour{{$hour->id}}"></button>
                                            </div>

                                            <div class="modal fade" id="edithour{{$hour->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <div class="text-center">
                                                                    <h3>hour</h3>
                                                                </div>
                                                        </div>
                                                        {{ Form::model($hours,['method'=>'PATCH','action'=>['HourController@update',$hour->id],'files' => true] ) }}
                                                            <div class="col-md-12">
                                                                {{Form::text('name',$hour->name,['class'=>'form-control'])}}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} 
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <a href="{{url('hourdelete',$hour->id)}}" class="btn btn-danger" style="float:right">Delete</a>
                                                                </div>
                                                                
                                                            </div>
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        {{Form::open(['route'=>'hour.store'])}}
                                        <div class="col-md-9">
                                            {{Form::text('name','',['class'=>'form-control'])}}
                                        </div>
                                        <div class="col-md-3">
                                            {{Form::submit('Нэмэх',['class'=>'btn btn-success'])}}
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
</div>



@stop
