<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上传文件</title>
</head>
<body>
<form action="{{url('uploader/imgfile')}}" method="post" enctype="multipart/form-data" >
    {{csrf_field()}}
    <div class="form-group">
        <label for="money" class="col-sm-4 control-label">上传文件</label>
        <div class="col-sm-8">
            <input type="file" name="img" class="form-control" placeholder="上传文件">
        </div>
    </div>
    <button type="submit" >上传</button>
</form>
</body>
</html>