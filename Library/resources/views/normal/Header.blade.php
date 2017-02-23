<!DOCTYPE html>
<html>
  <head>
    <title>{{app('title')}}</title>
    <link rel="shortcut icon" href="{{app('image')}}/icon.png" type="image/png" />
    {!! Html::style(app('css').'/materialize.min.css') !!}
    {!! Html::style(app('css').'/Header.css') !!}
    {!! Html::style('http://fonts.googleapis.com/icon?family=Material+Icons') !!}
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! Html::script(app('js').'/jquery.min.js') !!}
    {!! Html::script(app('js').'/jquery.nicescroll.min.js') !!}
    {!! Html::script(app('js').'/materialize.js') !!}
    {!! Html::script(app('js').'/Header.min.js') !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
    /* Start Section Wallpaper */

    .wallpaper-Section{
        width: 100vw;
        height: 100vh;
        background-image: url({{url('public/images/wallpaper.jpg')}});
        background-size: cover;
        position: fixed;
    }

    /* End Section Wallpaper */
  </style>
  <body class="hidden-Scroll">
  <!-- Start Section Loader -->
  <section class='loader-Section'>
    <img src="{{url('public/images/loader.gif')}}" alt="loader" />
  </section>
  <!-- End Section Loader -->

  <!-- Start Section Wallpaper -->
  <section class="wallpaper-Section"></section>
  <!-- End Section Wallpaper -->
  
  <!-- Start Section Black -->
  <section class="black-Section"></section>
  <!-- End Section Black -->
 
  <!-- Start Types -->
  <ul id="Types" class="side-nav">
    <li><a href='{{url("/home")}}' class="home-Page"><h3>{{trans('Titles.nameOfSite')}}</h3></a></li>
    <div class="input-field">
        {!! Form::text('search','',['class'=>'validate']) !!}
        {!! Form::label('search',trans('Header.Search')) !!}
      </div>
      <li>
      {!! Form::open(['url'=>'sortby','method'=>'get','class'=>'select-Form']) !!}
      <div class="input-field select-SortBy">
        <select name="select-SortBy">
          <option value="" disabled selected>{{trans('Header.sortBy')}}</option>
          @foreach(app('sortsBy') as $getAllSortsBy)
            <option value="{{trans('Header.'.$getAllSortsBy->sortByEnglish)}}" route='{{url("sortby/".$getAllSortsBy->sortByRoutes)}}'>{{trans('Header.'.$getAllSortsBy->sortByEnglish)}}</option>
          @endforeach
        </select>
      </div>
      {!! Form::close() !!}
      </li>
      @foreach(app('types') as $type)
        <li><a href='{{url("section/".$type->id)}}' class='waves-effect'>{{$type->Type}}</a></li>
      @endforeach
  </ul>
  <div class="fixed-action-btn hide-on-med-and-down">
    <a href="javascript:;" data-activates="Types" class="tooltipped show-Types btn-floating btn-large waves-effect waves-light red button-collapse" data-position="top" data-delay="50" data-tooltip="{{trans('Header.Types')}}"><i class="material-icons">format_list_bulleted</i></a>
  </div>
  <i class="material-icons drag-Arrow hide-on-large-only">arrow_back</i>
  <!-- End Types -->