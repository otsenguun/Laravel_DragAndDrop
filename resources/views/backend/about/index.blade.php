@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')
<style>
    .about-image{
        width: 33%;
        display: inline-block;
    }
    .about-image img{
        width: 100%;
    }
    .delete{
        position: absolute;
        opacity: 0;
    }
    .about-image:hover .delete{
        opacity: 1;
    }
</style>

<div class="wrapper">
    <div class="content-wrapper">
            <section class="content-header">
                    <h1>
                        Намтар
                    </h1>

                    <ol class="breadcrumb">
                        <li><a href="#">
                                <i class="fa fa-dashboard"></i>
                                        Admin
                            </a>
                            </li>
                        <li class="active">Намтар</li>
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
                                    <div class="col-md-12">
                                        @foreach($about as $a)
                                        {!! Form::model($a, ['method' => 'PATCH', 'action' => ['AboutController@update',$a->id]]) !!}

                                        <label for="">Тайлбар 1</label>
                                         <textarea id="ckeditor" class="ckeditor" name="desc">{{$a->desc}}</textarea>
                                        <label for="">Тайлбар 2</label>
                                        <textarea id="ckeditor" class="ckeditor" name="desc1">{{$a->desc1}}</textarea>
                                        @endforeach
                                        <div class="text-center" style="padding-top:20px;padding-bottom:20px;">
                                                {{Form::submit('Save',['class'=>'btn btn-primary'])}}
                                        </div>
                                        
                                        {{Form::close()}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="width:100%">Бүтээлүүд</label>
                                        @foreach($creations as $creation)
                                   <div class="col-md-9"> <p>{{$creation->name}}</p></div>
                                    <div class="col-md-3"><a href="{{url('/deletecreation',$creation->id)}}" class="btn fa fa-trash-o"></a></div>
                                        @endforeach
                                        {{Form::open(['route'=>'creation.store'])}}
                                        {{Form::text('name','',['class'=>'form-control'])}}
                                        {{Form::submit('Add',['class'=>'form-control'])}}
                                        {{Form::close()}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="width:100%">Зурагууд</label>
                                        @foreach($aboutimages as $AI)
                                        <div class="about-image">
                                                <a href="{{url('aboutimagedelete',$AI->id)}}" class="btn btn-danger fa fa-trash-o delete"></a>
                                                <img src="uploads/{{$AI->image}}" alt="">
                                        </div>
                                        @endforeach
                                        {{Form::open(['route'=>'about_image.store','files' => true])}}
                                        {{Form::file('image',['class'=>'form-control'])}}
                                        {{Form::submit('Add',['class'=>'form-control'])}}
                                        {{Form::close()}}
                                    </div>
                               </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js"></script>



@stop
