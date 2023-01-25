@extends('index')
@section('maincontent')
<div class="row">
    <div class="col-md-11" style="margin:auto;margin-top:20px;">
        <a href="{{route('inserttool')}}" class="btn btn-info">افزودن ابزار</a>
        <div class="col-md-5" style="margin:auto;">
            <h1>لیست ابزارهای غیر برقی</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <th>شماره</th>
                <th>نام ابزار</th>
                <th>قیمت (تومان)</th>
                <th>تصویر</th>
                <th>عملیات</th>
            </thead>
            <tbody>
                <tbody>
                    @foreach ($tools as $tool)
                        <tr>
                            <td>{{$tool->id}}</td>
                            <td>{{$tool->title}}</td>
                            <td>{{$tool->price}}</td>
                            <td>{{$tool->image}}<img src="{{$tool->image}}" width="200" /></td>
                            <td>
                                <!--<a href="{{route('updatetool',['id'=>$tool->id])}}" target="_blank" class="btn btn-primary">Update</a>-->
                                <a href="{{route('showtool',['id'=>$tool->id])}}" target="_blank" class="btn btn-warning">Show</a>
                                <!--<a href="{{route('deletetool',['id'=>$tool->id])}}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a>-->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </tbody>
        </table>
        <div class="col-md-5" style="margin:auto;margin-top:15px;margin-bottom:15px;">
            {{ $tools->links() }}
        </div>
    </div>
</div>
@endsection