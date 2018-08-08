@extends('backend.index')

@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')

<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Comments
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Conversation Comments</li>
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
                <h2> Conversation : {!!$conversation->title!!}</h2>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                    <tr>
                      <th>id</th>
                      <th>Name</th>
                     
                      <th>Content</th>
                       <th>Settings</th>
                    </tr>
              </thead>
              <tbody>
        <!-- Main content -->

                        
                      @foreach($conversation->comments as $key=> $tour)
                      <tr>
                      <td>{{$key}}</td>
                      <td>{{ $tour->name}}</td>
                      <td>{{ $tour->content}}</td>
                      <td>
                       <div class="text-center">
                         <button class="btn btn-primary" data-toggle="modal" data-target="#showcomment{{$tour->id}}" >show</span>
                           </button>
                           <button class="btn btn-danger" data-toggle="modal" data-target="#deletecomment{{$tour->id}}" ><span class="fa fa-trash-o"></span>
                           </button>

                      </div>
                      </td>
                        
                      </tr>

                      <div class="modal fade" id="showcomment{{$tour->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                    <h3>Show Comment</h3>
                                  </div>
                                      <div class="modal-body">
                                            <h4>{{$tour->name}}</h4>
                                            <p>{{$tour->content}}</p>
                                          <div class="text-center">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          </div>
                                      </div>
                              </div>
                          </div>
                      </div>

                      
                      <div class="modal fade" id="deletecomment{{$tour->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  </div>
                                  <form method="get" action="{{url('/deletecomment',$tour->id)}}" class="delete_form">
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
                 <a href="{{url('deleteallcomment',$conversation->id)}}" class="btn btn-danger">Delete All</a>
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

 <script type="text/javascript">
      function searchButton(){
        var form = $("#searchForm");
        var data = form.serialize();
        var url = form.attr('action');
        var post = form.attr('method');
            $.ajax({
              type : post,
              url : url,
              data : data,
              dataType : 'json'
             }).done(function(data){
                  console.log(data);
                  $('#example2').empty();
                  $('#example2').append(data.view);

              }).always(function(){
                
                
             });
      }
  </script>

@stop