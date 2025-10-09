<?php
session_start();

// Si ya está logueado, redirigir al dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}

$error = '';
$success = '';

// Procesar login
if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $error = 'Por favor, completa todos los campos.';
    } else {
        // Aquí iría la conexión a la base de datos
        // Por ahora simulamos usuarios
        $users = [
            'admin' => ['password' => 'admin123', 'role' => 'admin', 'name' => 'Administrador'],
            'cliente' => ['password' => 'cliente123', 'role' => 'cliente', 'name' => 'Cliente Test']
        ];
        
        if (isset($users[$username]) && $users[$username]['password'] === $password) {
            $_SESSION['user_id'] = $username;
            $_SESSION['user_role'] = $users[$username]['role'];
            $_SESSION['user_name'] = $users[$username]['name'];
            
            header('Location: dashboard.php');
            exit();
        } else {
            $error = 'Usuario o contraseña incorrectos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Kone's</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: linear-gradient(135deg, #ff6b9d, #c44569);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .login-subtitle {
            color: #666;
            font-size: 1rem;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #ff6b9d;
        }
        
        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #ff6b9d;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }
        
        .login-btn:hover {
            background-color: #e55a8a;
        }
        
        .back-link {
            display: block;
            text-align: center;
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }
        
        .back-link:hover {
            color: #ff6b9d;
        }
        
        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .demo-users {
            margin-top: 30px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            font-size: 14px;
        }
        
        .demo-users h4 {
            margin-bottom: 10px;
            color: #333;
        }
        
        .demo-users p {
            margin-bottom: 5px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1 class="login-title">Kone's</h1>
            <p class="login-subtitle">Centro Psicoeducativo Infantil</p>
        </div>
        
        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required 
                       value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>
        
        <a href="index.php" class="back-link">← Volver al inicio</a>
        
        <div class="demo-users">
            <h4>Usuarios de prueba:</h4>
            <p><strong>Admin:</strong> usuario: admin, contraseña: admin123</p>
            <p><strong>Cliente:</strong> usuario: cliente, contraseña: cliente123</p>
        </div>
    </div>
</body>
</html>
