<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background: linear-gradient(to right, #2980b9, #6dd5fa, #ffffff);;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: white;
            width: 400px;
            border: none;
            border-radius: 10px;
            padding: 40px;
        }

        .container h1 {
            text-align: center;
        }

        .form-control {
            position: relative;
            width: 100%;
            margin-top: 40px;
        }

        .form-control input {
            width: 100%;
            height: 50px;
            font-size: 20px;
            border: none;
            outline: none;
            border-bottom: 2px solid #dadada;
            padding: 10px 0;
        }

        .btn-submit {
            width: 100%;
            height: 50px;
            border-radius: 25px;
            border: none;
            outline: none;
            background-color: var(--success-color);
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: #069a;
            transition: 0.6s;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit User</h1>
        <form method="POST">
            @csrf
            <div class="form-control">
                <label for="fullname content">Full Name:</label>
                <input type="text" name="fullname" value = "{{$user['fullname']}}" required>
            </div>
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="text" name="email" value = "{{$user['email']}}"  required>
            </div>
            <button type="submit" class="btn-submit">Nhấn vào đây </button>
        </form>
    </div>
</body>

</html>