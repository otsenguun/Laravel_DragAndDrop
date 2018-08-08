@extends('backend.index')


@section('content')

@include('backend.partials.nav')
@include('backend.partials.leftbar')


<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Үйлдвэрүүд
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Админ</a></li>
        <li class="active">Үйлдвэрүүдийн жагсаалт</li>
      </ol>

      <!-- <div class="text-right"><button class="btn btn-success" onclick="window.location.href='{{ route('carproduct.create') }}'" >Үйлдвэр нэмэх</button>


        
      </div> -->
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
