<?php
session_start();

// Si no está logueado, redirigir al login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['user_name'] ?? 'Usuario';
$user_role = $_SESSION['user_role'] ?? 'cliente';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kone's</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        
        .dashboard-header {
            background-color: white;
            padding: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .dashboard-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .dashboard-title {
            font-size: 1.8rem;
            color: #333;
            margin: 0;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-welcome {
            color: #666;
            font-size: 1rem;
        }
        
        .user-role {
            background-color: #ff6b9d;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .logout-btn {
            padding: 8px 16px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        
        .logout-btn:hover {
            background-color: #c82333;
        }
        
        .dashboard-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .dashboard-card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .card-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-icon {
            width: 40px;
            height: 40px;
            background-color: #ff6b9d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }
        
        .card-content {
            color: #666;
            line-height: 1.6;
        }
        
        .admin-only {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }
        
        .admin-only h4 {
            color: #856404;
            margin-bottom: 10px;
        }
        
        .admin-only p {
            color: #856404;
            font-size: 0.9rem;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #ff6b9d;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .dashboard-nav {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .user-info {
                flex-direction: column;
                gap: 10px;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <div class="dashboard-nav">
            <h1 class="dashboard-title">Dashboard - Kone's</h1>
            <div class="user-info">
                <span class="user-welcome">¡Hola, <?php echo htmlspecialchars($user_name); ?>!</span>
                <span class="user-role"><?php echo ucfirst($user_role); ?></span>
                <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    
    <div class="dashboard-content">
        <!-- Estadísticas -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">45</div>
                <div class="stat-label">Niños Activos</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Profesionales</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">8</div>
                <div class="stat-label">Programas</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">95%</div>
                <div class="stat-label">Satisfacción</div>
            </div>
        </div>
        
        <!-- Tarjetas principales -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h2 class="card-title">
                    <div class="card-icon">👶</div>
                    Estimulación Temprana
                </h2>
                <div class="card-content">
                    <p>Programa especializado para bebés desde los 45 días hasta los 12 años, enfocado en el desarrollo integral de habilidades cognitivas, motoras y sociales.</p>
                    <p><strong>Horarios:</strong> Lunes a Viernes 9:00 - 18:00</p>
                </div>
            </div>
            
            <div class="dashboard-card">
                <h2 class="card-title">
                    <div class="card-icon">🎯</div>
                    Necesidades Especiales
                </h2>
                <div class="card-content">
                    <p>Atención personalizada para niños con TDAH, Síndrome de Down, TEA y otros trastornos del aprendizaje.</p>
                    <p><strong>Modalidad:</strong> Individual y grupal</p>
                </div>
            </div>
            
            <div class="dashboard-card">
                <h2 class="card-title">
                    <div class="card-icon">📚</div>
                    Club de Tareas
                </h2>
                <div class="card-content">
                    <p>Apoyo escolar para niños de preescolar y primaria, reforzando conocimientos de manera lógica y acorde a sus necesidades.</p>
                    <p><strong>Incluye:</strong> Regularización y apoyo en tareas</p>
                </div>
            </div>
            
            <div class="dashboard-card">
                <h2 class="card-title">
                    <div class="card-icon">🎮</div>
                    Ludoteca
                </h2>
                <div class="card-content">
                    <p>Espacio de juego educativo con materiales para juego de roles, simbólico y actividades de la vida diaria.</p>
                    <p><strong>Incluye:</strong> Área de lectura y juegos didácticos</p>
                </div>
            </div>
        </div>
        
        <!-- Funciones específicas por rol -->
        <?php if ($user_role === 'admin'): ?>
        <div class="dashboard-card admin-only">
            <h4>🔧 Funciones de Administrador</h4>
            <p>Como administrador, tienes acceso completo al sistema para gestionar usuarios, programas, horarios y reportes del centro.</p>
            <div style="margin-top: 15px;">
                <a href="#" style="background-color: #28a745; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; margin-right: 10px;">Gestionar Usuarios</a>
                <a href="#" style="background-color: #17a2b8; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; margin-right: 10px;">Ver Reportes</a>
                <a href="#" style="background-color: #ffc107; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px;">Configuración</a>
            </div>
        </div>
        <?php else: ?>
        <div class="dashboard-card">
            <h2 class="card-title">
                <div class="card-icon">📅</div>
                Mis Actividades
            </h2>
            <div class="card-content">
                <p>Aquí podrás ver tus próximas citas, actividades programadas y el progreso de tu hijo/a.</p>
                <p><strong>Próxima cita:</strong> Estimulación Temprana - Viernes 15:00</p>
                <p><strong>Programa actual:</strong> Desarrollo de Habilidades Sociales</p>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Enlaces rápidos -->
        <div class="dashboard-card">
            <h2 class="card-title">
                <div class="card-icon">🔗</div>
                Enlaces Rápidos
            </h2>
            <div class="card-content">
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="index.php" style="background-color: #ff6b9d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Ver Sitio Web</a>
                    <a href="#" style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Contactar</a>
                    <a href="#" style="background-color: #17a2b8; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Horarios</a>
                    <a href="#" style="background-color: #ffc107; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Documentos</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
