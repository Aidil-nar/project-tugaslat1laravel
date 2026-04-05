<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug Login</title>
    <style>
        body { font-family: monospace; margin: 20px; background: #f5f5f5; }
        .container { background: white; padding: 20px; border-radius: 5px; max-width: 600px; }
        .ok { color: green; }
        .error { color: red; }
        .info { color: blue; }
        pre { background: #f0f0f0; padding: 10px; overflow-x: auto; }
    </style>
</head>
<body>

    <div class="container">
        <h2>🔍 Debug Login</h2>
        
        <h3>User Test:</h3>
        <p><strong>Email:</strong> test@example.com</p>
        <p><strong>Password:</strong> password123</p>

        <h3>Cek User di Database:</h3>
        <?php
            try {
                require 'vendor/autoload.php';
                $app = require 'bootstrap/app.php';
                $container = $app;
                
                $user = \App\Models\User::where('email', 'test@example.com')->first();
                
                if ($user) {
                    echo '<p class="ok">✓ User ditemukan di database</p>';
                    echo '<pre>Email: ' . htmlspecialchars($user->email) . PHP_EOL;
                    echo 'Name: ' . htmlspecialchars($user->name) . PHP_EOL;
                    echo 'Password Hash: ' . substr($user->password, 0, 20) . '...</pre>';
                } else {
                    echo '<p class="error">✗ User tidak ditemukan di database</p>';
                }
            } catch (Exception $e) {
                echo '<p class="error">✗ Error: ' . htmlspecialchars($e->getMessage()) . '</p>';
            }
        ?>

        <h3>Instruksi Testing:</h3>
        <ol>
            <li>Buka <a href="/login" target="_blank">/login</a></li>
            <li>Masukkan email: <code>test@example.com</code></li>
            <li>Masukkan password: <code>password123</code></li>
            <li>Klik Login</li>
        </ol>

        <h3>Jika Login Masih Gagal:</h3>
        <p class="info">📋 Silakan bagikan pesan error yang muncul di halaman login</p>

    </div>

</body>
</html>
