@extends(head)
<body>
    <div class="reset-container">
        <h2>Restablecer Contraseña</h2>
        
        {{ ERROR_MESSAGE }}
        {{ FORM_CONTENT }}
        <p><a href="?slug=login">Volver al Login</a></p>
    </div>
    
    @extends(footer)
</body>
</html>