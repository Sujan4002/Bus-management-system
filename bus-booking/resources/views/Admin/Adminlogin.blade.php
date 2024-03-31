<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body {
        font-family: sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    h2 {
        margin-top: 0;
        text-align: center;
    }
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: #fff;
        border-radius: 3px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .is-invalid {
        border-color: #dc3545 !important; /* Red border color for invalid input */
    }
</style>
</head>
<body>
<div class="login-container">
    <h2>Admin Login</h2>
    @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
    <form action="{{ route('admin.authenticate') }}" method="post">

        @csrf
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" id="email" value="{{old('email')}}"placeholder="E-mail" class="@error('email') is-invalid @enderror">
        @error('email')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror">
        @error('password')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
        <input type="submit" value="Login">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-RnDWsMD+dlnnrmgqFtOr6nxG3vpsxNlB2w7Qv38Wy83Lch8C07C+r4jL40CCVZ0D" crossorigin="anonymous"></script>
</body>
</html>
