<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <label for="">Category Name</label>
        <input type="text" name="name"><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>