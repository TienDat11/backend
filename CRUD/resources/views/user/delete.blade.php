<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete user</title>
</head>
<body>
    <h1>Delete User</h1>
    <p>Bạn có thật sự muốn xoá {{$user->fullname}} ? </p>
    <form method="POST" >
    @csrf
    <button type="submit">Xoá</button>  
    </form>
</body>
</html>