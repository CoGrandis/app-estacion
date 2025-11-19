@extends(head)

<body>
    <div class="recovery-container">
        <h2>Recuperar Contraseña</h2>
        
        {{ MESSAGE }}
        {{ FORM_CONTENT }}
        
        <p><a href="?slug=login">Volver al Login</a></p>
    </div>
    
    @extends(footer)
</body>
</html>