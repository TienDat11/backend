<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('products.index')
    @section('content')
    <a type="button" class="btn btn-primary mt-2 mb-5"  href="{{ route('product.create') }}">Create product</a>
    <div class="mt-5">List sản phẩm</div>
    {{-- @if (session('msg'))
        <div class="alert alert-success" role="alert" style="width: 500px">
            {{ 'session('msg') }}
        </div>
    @endif --}} 
        <table class="table table-success table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @if (!empty($products))
                    @foreach ($products as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="/image/{{ $item->image }}" width="200px" /></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>
                                <form action="#" method="POST">
                                    <a href="{{route('product.show',$item->id)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('product.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <form action=""></form>
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
            </tbody>
        </table>
    </div>

    @endsection
</body>
</html>