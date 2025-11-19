@extends(head)

<body>
    
	<div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="?slug=login" method="POST">
            <input type="text" name="txt_email" placeholder="Usuario o Email" required>
            <input type="password" name="txt_password" placeholder="Contraseña" required>
            <p><a href="?slug=recovery">Olvidaste tu contraseña?</a></p>
            <button type="submit" name="btn_login">Acceder</button>
            <p><a href="?slug=register">No tienes una cuenta? Registrarse</a></p>
            {{ ERROR }}
        </form>
    </div>
	
	@extends(footer)
</body>
</html>