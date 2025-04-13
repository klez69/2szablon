<?php
session_start();

// Sprawdzenie czy użytkownik jest zalogowany
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Obsługa logowania
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Tutaj powinno być prawidłowe sprawdzenie hasła (np. z bazy danych)
        // Na potrzeby przykładu używamy prostego sprawdzenia
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin.php');
            exit;
        } else {
            $error = 'Nieprawidłowy login lub hasło';
        }
    }
    
    // Wyświetl formularz logowania
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administracyjny - Logowanie</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .login-container {
                max-width: 400px;
                margin: 100px auto;
                padding: 20px;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .login-form {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            .login-form input {
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .login-form button {
                padding: 10px;
                background-color: #2c3e50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .login-form button:hover {
                background-color: #34495e;
            }
            .error {
                color: red;
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Logowanie do panelu administracyjnego</h2>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form class="login-form" method="POST">
                <input type="text" name="username" placeholder="Login" required>
                <input type="password" name="password" placeholder="Hasło" required>
                <button type="submit">Zaloguj się</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Panel administracyjny dla zalogowanego użytkownika
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .admin-nav {
            background-color: #2c3e50;
            padding: 15px;
            margin-bottom: 20px;
        }
        .admin-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
        }
        .admin-nav a {
            color: white;
            text-decoration: none;
        }
        .admin-section {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .admin-table th, .admin-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .admin-table th {
            background-color: #f5f5f5;
        }
        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary {
            background-color: #3498db;
            color: white;
        }
        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }
        .btn-success {
            background-color: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Panel Administracyjny</h1>
            <a href="admin.php?logout=1" class="btn btn-danger">Wyloguj się</a>
        </div>
        
        <nav class="admin-nav">
            <ul>
                <li><a href="#strona">Strona główna</a></li>
                <li><a href="#uzytkownicy">Użytkownicy</a></li>
                <li><a href="#ustawienia">Ustawienia</a></li>
            </ul>
        </nav>

        <div class="admin-section">
            <h2>Statystyki</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>Odwiedziny</h3>
                    <p>1,234</p>
                </div>
                <div class="stat-item">
                    <h3>Użytkownicy</h3>
                    <p>42</p>
                </div>
                <div class="stat-item">
                    <h3>Projekty</h3>
                    <p>15</p>
                </div>
            </div>
        </div>

        <div class="admin-section">
            <h2>Ostatnie aktywności</h2>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Akcja</th>
                        <th>Użytkownik</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-03-20</td>
                        <td>Edycja strony głównej</td>
                        <td>Admin</td>
                        <td>Zakończone</td>
                    </tr>
                    <tr>
                        <td>2024-03-19</td>
                        <td>Dodanie nowego projektu</td>
                        <td>Admin</td>
                        <td>Zakończone</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="admin-section">
            <h2>Szybkie akcje</h2>
            <div class="quick-actions">
                <a href="#" class="btn btn-primary">Dodaj nowy projekt</a>
                <a href="#" class="btn btn-success">Edytuj stronę główną</a>
                <a href="#" class="btn btn-primary">Zarządzaj użytkownikami</a>
            </div>
        </div>
    </div>

    <?php
    // Obsługa wylogowania
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: admin.php');
        exit;
    }
    ?>
</body>
</html> 