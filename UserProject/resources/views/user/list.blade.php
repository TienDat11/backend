<!-- <!DOCTYPE html>
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
    <h1 >Đây là tiêu đề của tôi</h1>
    @yield('content');  
    <h2>Đây là sự kết thúc</h2>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mọi người</title>
</head>
<body>
    @extends('user.index');
    @section('content')
    <div class="mt-5">
        <h2 class="text-center">
            LIST PRODUCT
        </h2>
    </div>
    {{-- @if (session('msg'))
        <div class="alert alert-success" role="alert" style="width: 500px">
            {{ session('msg') }}
        </div>
    @endif --}}

    {{-- <a type="button" class="btn btn-primary mt-2 mb-5" href="{{ route('product.create') }}">Create product</a> --}}
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
        @if (!empty($users))
        @foreach($users as $key => $value)
        <tr class="bg-{success}">
            <td class="text-right text-nowrap ">{{$key + 1}}</td>
            <td class="text-right text-nowrap ">{{$value['fist name']}}</td>
            <td class="text-right text-nowrap ">{{$value['last name'] }}</td>
            <td class="text-right text-nowrap ">{{$value['email']}}</td>
            <td class="text-right text-nowrap ">{{$value['address']}}</td>
            <td class="text-center text-nowrap "><img src="/image/{{$value['image']}}" style="width:200px"></td>
            <<td>
                                <form action="#" method="POST">
                                    <a href="#" class="btn btn-info">Show</a>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
            </td>
        </tr>
        @endforeach
        @else
                    <tr>
                        <td colspan="4">Data not found!!</td>
                    </tr>
        @endif
    </table>
    @endsection
    {{-- <td>
                                <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('user.show', $item->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
    </td> --}}
</body>
</html>