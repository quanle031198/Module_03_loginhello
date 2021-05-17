<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="/login" method="POST">
        @csrf
        <p>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập"/> 
        </p>
        <p>
            <input type="password" name="password" placeholder="Nhập tên mật khẩu"/> 
        </p>
        <p>
            <input type="submit" value="Login"/> 
        </p>
    </form>    
</body>
</html>