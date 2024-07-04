<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="path/to/estilo_index.css">
</head>
<body>
    <h5 class="title main-title">Inventario Escuadrón BRIAD</h5>

    <div class="main-container">
        <form class="box login" action="" method="POST" autocomplete="off">
            <h6 class="title">Iniciar Sesión</h6>

            <div class="field">
                <label class="label">Usuario</label>
                <div class="control user-container">
                    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Clave</label>
                <div class="control password-container">
                    <input class="input" type="password" name="login_clave" id="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                    <span class="mostrar_contraseña" id="mostrar_contraseña">
                        <i class="fas fa-eye" id="eyeOpen" style="display: none;"></i>
                        <i class="fas fa-eye-slash" id="eyeClosed"></i>
                    </span>
                </div>
            </div>

            <p class="button">
                <button type="submit" class="button_IS is-info is-rounded">Iniciar sesión</button>
            </p>

            <?php
            if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                require_once "./php/main.php";
                require_once "./php/iniciar_sesion.php";
            }
            ?>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('mostrar_contraseña');
            const passwordField = document.getElementById('login_clave');
            const eyeOpen = document.getElementById('eyeOpen');
            const eyeClosed = document.getElementById('eyeClosed');

            togglePassword.addEventListener('click', function() {
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);

                if (type === 'password') {
                    eyeOpen.style.display = 'none';
                    eyeClosed.style.display = 'block';
                } else {
                    eyeOpen.style.display = 'block';
                    eyeClosed.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>