<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge"/>
  <meta content="" name="description"/>
  <meta content="" name="keywords"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta content="telephone=no" name="format-detection"/>
  <meta name="HandheldFriendly" content="true"/>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/master.css')}}"/>
  <link rel="icon" type="image/x-icon" href="{{ URL::asset('favicon.ico')}}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/my.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/button.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
  @yield('title')
  <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
</head>
<body>

    @yield('content')
    
    <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/sub.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/my.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/sortable_js.js')}}"></script>
    <script src="{{url('ckeditor/ckeditor.js')}}"></script>
    <script src="{{url::asset('ckeditor/adapters/jquery.js')}}"></script>

</body>
</html>
