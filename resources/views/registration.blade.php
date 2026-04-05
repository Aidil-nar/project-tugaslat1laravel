<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body { font-family: sans-serif; margin: 50px; }
        .container { max-width: 400px; }
        .form-group { display: flex; align-items: center; margin-bottom: 15px; }
        .form-group label { width: 100px; font-size: 14px; }
        .form-group input { flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .action-group { display: flex; align-items: center; margin-top: 15px; }
        .btn { padding: 8px 20px; background-color: #198754; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .link { margin-left: 20px; font-size: 14px; text-decoration: none; color: #0d6efd; line-height: 1.5; }
        .alert-success { margin-top: 20px; font-size: 13px; color: #555; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registration</h2>

        <form action="/register" method="POST">
            @csrf
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="action-group">
                <button type="submit" class="btn">Register</button>
                <a href="/login" class="link">Sudah punya<br>akun? Login</a>
            </div>
        </form>

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
    </div>

</body>
</html>