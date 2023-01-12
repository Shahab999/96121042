<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert tool</title>
</head>
<body>
    <form action = "{{route('inserttoolpost')}}" method = "POST">
        @csrf
        <label for="title">Title</label>
        <input id="title" type="text" name="title" value="" placeholder="لطفا نام ابراز مورد نظر را وارد کنید">
        <label for="price">Price</label>
        <input id="price" type="text" name="price" value="" placeholder="لطفا قیمت ابراز مورد نظر را وارد کنید">
        <label for="image">Image</label>
        <input id="image" type="text" name="image" value="" placeholder="لطفا عکس ابراز مورد نظر را وارد کنید">
        <input type="submit" value="ذخیره">
    </form>
</body>
</html>