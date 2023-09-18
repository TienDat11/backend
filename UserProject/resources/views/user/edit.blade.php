@extends('products.index')

@section('content')
    <div class="mt-5">
        <h2 class="text-center">
            EDIT PRODUCT
        </h2>
    </div>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="first_name" class="form-label">First_Name:</label>
                <input type="text" class="form-control" id="name" name="first_name" placeholder="first_name..." value="{{ $user->first_name }}">
                @error('first_name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="last_name" class="form-label">Last_Name:</label>
                <input type="text" class="form-control" id="name" name="last_name" placeholder="last_name..." value="{{ $user->last_name }}">
                @error('last_name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="email" class="form-label">email</label>
                <textarea type="text" class="form-control" id="detail" name="last_name" placeholder="email..." style="height: 120px">{{ $user->email }}</textarea>
                @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="address" class="form-label">Address:</label>
                <textarea type="text" class="form-control" id="detail" name="Address" placeholder="adress..." style="height: 120px">{{ $user->address }}</textarea>
                @error('address')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image" placeholder="image...">
                <img src="/images/{{ $user->image }}" width="300px" />
                @error('image')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-xs-12 col-md-12 col-sm-12 text-center mt-5">
                <a href="{{ url('/products') }}" class="btn btn-secondary">Back</a>
                <button type="Submit" value="Submit" class="btn btn-primary">Edit product</button>
            </div>
        </div>
    </form>
@endsection