@extends(head)
    <link rel="stylesheet" type="text/css" href="./static/css/landing.css">
<body>
     <header>
        <h1>{{ APP_NAME }}</h1>

    <nav>
        <a href="?slug=login">Registrarse</a>
    </nav>

    </header>

    	<div class="login-container">
            <h2>Iniciar Sesión</h2>
            <form action="?slug=login" method="POST">
                <input type="email" name="txt_email" placeholder="Correo electrónico" required>
                <input type="password" name="txt_password" placeholder="Contraseña" required>
                <button type="submit" name="btn_login">Iniciar</button>
            </form>
        </div>
	
	@extends(footer)
</body>
</html>
