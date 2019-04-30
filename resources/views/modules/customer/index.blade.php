<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Danh sách khách hàng</h1>

<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('show', ['tasksId' => 1])}}">Xem</a> | <a href="{{route('edit', ['tasksId'=> 2])}}">Sửa</a>
            | <a href="{{route('delete', ['photo'=> 2])}}">Xóa</a> | <a href="{{route('create')}}">Create</a> | <a
                    href="{{route('update', ['tasksId'=> 3])}}">Update</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Nguyễn Văn B</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('show', ['tasksId' => 1])}}">Xem</a> | <a href="{{route('edit', ['tasksId'=> 2])}}">Sửa</a>
            | <a href="#">Xóa</a> | <a href="{{route('create')}}">Create</a> | <a href="">Update</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Nguyễn Văn C</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('show', ['tasksId' => 1])}}">Xem</a> | <a href="{{route('edit', ['tasksId'=> 2])}}">Sửa</a>
            | <a href="#">Xóa</a> | <a href="{{route('create')}}">Create</a> | <a href="">Update</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Nguyễn Văn D</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('show', ['tasksId' => 1])}}">Xem</a> | <a href="{{route('edit', ['tasksId'=> 2])}}">Sửa</a>
            | <a href="#">Xóa</a> | <a href="{{route('create')}}">Create</a> | <a href="">Update</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Nguyễn Văn E</td>
        <td>01234567890</td>
        <td>email.test@mail.com</td>
        <td>
            <a href="{{route('show', ['tasksId' => 1])}}">Xem</a> | <a href="{{route('edit', ['tasksId'=> 2])}}">Sửa</a>
            | <a href="#">Xóa</a> | <a href="{{route('create')}}">Create</a> | <a href="">Update</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>