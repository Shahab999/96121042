@extends('index')
@section('maincontent')
    <div class="col-md-9" style="margin:auto;margin-top:20px;">
        <a href="{{route('inserttool')}}" class="btn btn-info">افزودن ابزار</a>
        <ul>
            <li>{{$tool->title}}</li>
            ___________________________________________________________________________________________________________
            <li>{{$tool->price}}</li>
            ___________________________________________________________________________________________________________
            <li>{{$tool->image}}<img src="{{$tool->image}}" width="200" /></li> 
        </ul>
    </div>
@endsection