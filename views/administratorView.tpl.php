@extends(head)
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Panel de Administrador</h1>
            <a href="?slug=logout" class="logout-btn">Cerrar Sesión</a>
        </div>
        
        <a href="?slug=map" class="map-btn">Mapa de clientes</a>
        
        <div class="counters">
            <div class="counter-card">
                <h3>Usuarios Registrados</h3>
                <p class="counter-number">{{ CANT_USUARIOS }}</p>
            </div>
            
            <div class="counter-card">
                <h3>Cantidad de Clientes</h3>
                <p class="counter-number">{{ CANT_CLIENTES }}</p>
            </div>
        </div>
    </div>
    
    @extends(footer)
</body>
</html>