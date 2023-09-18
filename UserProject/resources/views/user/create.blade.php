@extends('products.index')

@section('content')
    <div class="mt-5">
        <h2 class="text-center">
            Users
        </h2>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="mb-3 col-xs-12 col-md-12 col-sm-12">
                <strong for="first_name" class="form-label">First Name: </strong>
                {{ $user->first_name }}
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <strong for="last_name" class="form-label">Last Name: </strong>
                {{ $user->last_name }}
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <strong for="email" class="form-label">Email: </strong>
                {{ $user->email}}
            </div>
            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <strong for="last_name" class="form-label">Address: </strong>
                {{ $user->address }}
            </div>

            <div class="mb-3 mb-3 col-xs-12 col-md-12 col-sm-12">
                <strong for="image" class="form-label">Image: </strong>
               <img src="/images/{{ $user->image }}" width="300px" />
            </div>
            <div class="col-xs-12 col-md-12 col-sm-12 text-center mt-5">
                <a href="{{ url('/user') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </form>
@endsection