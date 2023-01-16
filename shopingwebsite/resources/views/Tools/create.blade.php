<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="create.js">
    <link rel="stylesheet" href="create.css">
    <title>Insert tool</title>
</head>
<body>
    <div class="col-md-6" style="margin:auto;margin-top:20px;">
        <h3>Insert Tool Form</h3>
        <form action = "{{route('storetool')}}" method = "post">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" type="text" class="form-control" name="title" value="" placeholder="لطفا نام ابراز مورد نظر را وارد کنید" style="margin-bottom:5px;">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input id="price" type="text" class="form-control" name="price" value="" placeholder="لطفا قیمت ابراز مورد نظر را وارد کنید (تومان)" style="margin-bottom:5px;">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="uploadOuter">
                        <span class="dragBox" >
                            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                            <p><label for="file" class="btn btn-primary" style="cursor: pointer;">Upload Image</label></p>
                            <p><img id="output" width="200" /></p>
                            <script>
                                var loadFile = function(event) {
                                    var image = document.getElementById('output');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </span>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="ذخیره" style="margin-top:10px;">
        </form>
    </div>
</body>
</html>