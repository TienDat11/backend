<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lear View</title>
</head>
<body>
    <div class="container"></div>
    {{-- @if(session('msg'))
        <div >{{ session('msg') }}</div>
    @endif --}}
    <h1>
        {{ $title }}
    </h1>
    {{-- @if ($errors->any())
        <div>du lieu nhap vao khong hop le</div>
    @endif --}}
    <form method="POST">
        @csrf
            <label for="fname">ho va ten</label><br>
            <input type="text" name="fullname"><br>
            {{-- @error('fullname')
                <span style="color: red">{{ $message }}</span>
            @enderror --}}
            <br />
            <label for="lname">email</label><br>
            <input type="text" name="email"><br><br>
            {{-- @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror --}}
            <br />
            <button type="submit" value="Submit">Them moi</button>
            <a>Quay lai</a>
            </div>
    </form>
</body>
</html>