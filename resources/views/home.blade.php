<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body { 
            font-family: sans-serif; 
            margin: 50px; 
        }
        h2 {
            font-size: 28px;
            font-weight: normal;
            margin-bottom: 15px;
            color: #212529;
        }
        .btn-logout { 
            display: inline-block;
            padding: 8px 20px; 
            background-color: #0d6efd; /* Warna biru standar mirip gambar */
            color: white; 
            text-decoration: none; 
            border-radius: 4px; 
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .btn-logout:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

    <h2>Selamat datang, {{ $user->name }}</h2>
    
    <a href="/logout" class="btn-logout">Logout</a>

</body>
</html>