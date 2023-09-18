<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mọi người</title>
</head>
<body>
    @extends('user.list');
    @section('content')
    <table class="table table-striped table-bordered table-hover table-responsive ">
        <tr>
            <th class="text-center text-nowrap font-weight-bold">Id</td>
            <th class="text-center text-nowrap font-weight-bold">First Name</td>
            <th class="text-center text-nowrap font-weight-bold">Last Name</td>
            <th class="text-center text-nowrap font-weight-bold">Email</td>
            <th class="text-center text-nowrap font-weight-bold">Address</td>
            <th class="text-center text-nowrap font-weight-bold">Image</td>
            <td>Thêm</td>
            <td>Sửa</td>
            <td>Xoá</td>
        </tr>
        @foreach($users as $key => $value)
        <tr class="bg-{success}">
            <td class="text-right text-nowrap ">{{$key + 1}}</td>
            <td class="text-right text-nowrap ">{{$value['fist name']}}</td>
            <td class="text-right text-nowrap ">{{$value['last name'] }}</td>
            <td class="text-right text-nowrap ">{{$value['email']}}</td>
            <td class="text-right text-nowrap ">{{$value['address']}}</td>
            <td class="text-center text-nowrap "><img src="/image/{{$value['image']}}" style="width:200px"></td>
            <td><a href="/user.edit"></a></td>
            <td><a href="/user.update"></a></td>
            <td><a href="/user.delete"></a></td>
        </tr>
        @endforeach
    </table>
    @endsection
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Bán Hàng số 1 Việt Nam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
<div class="container">
        @yield('content')
    </div>
</body>
</html>