<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Tools list</title>
</head>
<body>
    <div class="col-md-9" style="margin:auto;margin-top:20px;">
        <a href="{{route('inserttool')}}" class="btn btn-info">افزودن ابزار</a>
        <div class="col-md-3" style="margin:auto;">
            <h1>لیست ابزارها</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <th>شماره</th>
                <th>نام</th>
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
                                <a href="{{route('updatetool',['id'=>$tool->id])}}" target="_blank" class="btn btn-primary">Update</a>
                                <a href="{{route('deletetool',['id'=>$tool->id])}}" target="_blank" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach;
                </tbody>
            </tbody>
        </table>
    </div>
</body>
</html>