@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')
<style type="text/css">
  .user_desc_w{
    margin-right: 5%;
    margin-left: 5%;
  }
  .table-border1{
    border: 20;
    color: black;
  }
</style>
  <div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content">
<div class="row">
           <div class="col-xs-12">
     <div class="box">
       <div class="box-body">
      <div class="user_desc_w">
        

            <div class="col-md-6">
                 
           
            <div>
               <img class="img" src="/uploads/ProfileImage/{{$User->avatar}}" style="width: 160px;height: 150px; float: left; margin-right: 20px; margin-bottom: 10px; margin-top: 20px;">
            </div>
            <div>
              <h3>Хэрэглэгчийн мэдээлэл</h3>
                    <label> Нэр : </label>{{$User->name}} <br> 
                    <label> И-мейл: </label>{{$User->email}} <br>  
                    <label> Mэргэжил: </label>{{$User->major}} <br>
                    <label> Дэлгэрэнгүй: </label>{{$User->desc}} <br>
                    <label> Socials: </label>
                    @foreach($User->socials as $social)

                     <a href="{{$social->link}}"><i class="{{$social->icon}}"></i></a> 

                      @endforeach <br>
              
            </div>
                    
          
              
            </div>

            <div class="col-md-6" style="padding-top: 20px;">
              <h4>Social links</h4>
               @foreach($User->socials as $social)
               <div class="col-md-12" style="padding-top: 5px;">
                <div class="col-md-1"><i class="{{$social->icon}}"></i></div>
                <div class="col-md-8 ">{{$social->link}}</div>
                <div class="col-md-3">
                  <button class="btn" data-toggle="modal" data-target="#editmodal{{$social->id}}"><i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger" data-toggle="modal" data-target="#deletemodal{{$social->id}}"><i class="fa fa-trash-o"></i></button>
                </div>
                </div>
                <div class="modal fade" id="editmodal{{$social->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <div class="text-center"><h4>Change Social</h4></div>
                              </div>
                              {{ Form::model($social,['method'=>'PATCH','action'=>['SocialController@update',$social->id]] ) }}
                              <div class="modal-body">
                                  <div class="form-group">
                                    <div class="col-md-3"> {{ Form::label('name', 'Icon') }}</div>
                                    <div class="col-md-8">{{ Form::select('icon',['icon fa fa-twitter' => 'Twitter', 'icon fa fa-facebook' => 'Facebook', 'icon fa fa-instagram' => 'Instagram', 'icon fa fa-linkedin' => 'Linkedin', 'icon fa fa-youtube-play' => 'You Tube'],$social->icon,['class' => 'form-control']) }}</div>    
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-3"> {{ Form::label('name', 'Link') }}</div>
                                    <div class="col-md-8">{{ Form::text('link',$social->link,['class' => 'form-control']) }}</div>    
                                  </div>
                              </div>
                              <div class="modal-footer">

                                  <div class="text-center"> {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }} <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>

                              </div>
                              {{ Form::close() }}


                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="deletemodal{{$social->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <div class="text-center"><h4>Delete Social ?</h4></div>
                              </div>
                              <form method="get" action="{{url('/deletesocial',$social->id)}}" class="delete_form">
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
               <div class="col-md-12" style="padding-top: 20px;">
            {{Form::open(['route'=>'social.store'])}}
            <div class="col-md-3">
              <select name="icon" class="form-control">
                <option value="icon fa fa-twitter">Twitter</option>
                <option value="icon fa fa-facebook">Facebook</option>
                <option value="icon fa fa-instagram">Instagram</option>
                <option value="icon fa fa-linkedin">Linkedin</option>
                <option value="icon fa fa-youtube-play">You Tube</option>
              </select>
              </div>
              <div class="col-md-7">   <input type="url" name="link" class="form-control"></div>
              <div class="col-md-2"> <input type="submit" class="btn btn-default" value="сошиал нэмэх"></div>
             <input type="hidden" name="user_id" value="{{$User->id}}">
            {{Form::close()}}
            </div>
            </div>

            <br>

         <div class="col-md-12"><h3>Оруулсан мэдээлэл</h3></div> 

          <table class="table table-border1 table-hover">
              <thead>
                <tr>
                  <th>№</th>
                  <th>Гарчиг</th>
                  <th>Зураг</th>
                  <th>Оруулсан огноо</th>
                  <th>Тохиргоо</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($conversations as $key => $cp)
                  <tr>
                    <td>{{$key}}</td>
                    <td>{{$cp->title}}</td>
                    <td><img class="img" src="/uploads/Conimage/{{$cp->image}}" style="width: 60px;height: 50px;"></td>
                    <td>{{$cp->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('conversation.show',$cp->id)}}">Харах</a></td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="text-center">
               {{$conversations->links()}}
            </div>
           
      </div>
    </div>
  </div>
</div>
</div>
</section>
  </div>
        </div>

  @stop
