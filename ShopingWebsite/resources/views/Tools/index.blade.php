<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools list</title>
</head>
<body>
    <a href="{{route('inserttool')}}">افزودن ابزار</a>
    <h1>Tools List</h1>
    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>image</th>
            <th>عملیات</th>
        </thead>
        <tbody>
            <tbody>
                @foreach ($tools as $tool)
                    <tr>
                        <td>{{$tool->id}}</td>
                        <td>{{$tool->title}}</td>
                        <td>{{$tool->price}}</td>
                        <td>{{$tool->image}}</td>
                        <td><a href="/edittool">Edit</a></td>
                    </tr>
                @endforeach;
            </tbody>
        </tbody>
    </table>
    <?php
        
    ?>
</body>
</html>