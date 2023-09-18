<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lear View</title>
</head>

<body>

    <h1>
        LIST DANH USER
        {{$title}}
    </h1>
    <hr />
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>

                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($user_list))
            @foreach ($user_list as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $item->id) }}">Sửa</a>
                </td>
                <td>
                    <a href="{{route('user.view',$item->id)}}">Xoá</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">Data not found!!</td>
            </tr>
            @endif

        </tbody>
        <a href="{{ route('user.add') }}">Them Nguoi dung</a>

    </table>
    @if(session('msg'))
    <h3>{{ session('msg') }}</h3>
    @endif
</body>

</html>