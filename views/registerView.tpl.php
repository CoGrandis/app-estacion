@extends(head)

<body>
    
	<div class="login-container">
        <h2>Registrarse</h2>
        
        <?php if($errno != ""): ?>
            <div style="background-color: #ffebee; color: #c62828; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #ef5350;">
                {{ ERROR }}
            </div>
        <?php endif; ?>
        
        <form action="?slug=register" method="POST">
            <input type="email" name="txt_email" placeholder="Correo electrónico" required>
            <input type="password" name="txt_password" placeholder="Contraseña" required>
            <input type="password" name="txt_password2" placeholder="Repetir contraseña" required>
            <button type="submit" name="btn_register">Registrar</button>
            <p><a href="?slug=login">Ya tenes una cuenta? Inicia sesion</a></p>
        </form>
    </div>
	
	@extends(footer)
</body>
</html>