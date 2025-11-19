@extends(head)

<body>

    <header>
        <h1>{{ APP_NAME }}</h1>
        <nav>
        <a href="?slug=login">Iniciar Sesión</a>
    </nav>
    </header>
    

    <section class="hero">
        <div class="hero-text">
            <h2>Monitoreo Climático y Seguridad Avanzada</h2>
            <p>Accede a datos en tiempo real de temperatura, humedad y presión de nuestras estaciones. Visualiza tendencias con gráficos dinámicos y mantén tu cuenta segura con nuestro sistema de notificaciones.</p>
            <a href="?slug=panel" class="btn">Ver Estaciones Ahora</a>
        </div>
    </section>

    <section class="features" id="features">
        <h3>¿Qué ofrece {{ APP_NAME }}?</h3>
        <div class="feature-grid">
            <div class="feature">
                <h4>Datos en Tiempo Real</h4>
                <p>Visualiza tendencias con gráficos de temperatura, humedad y riesgo de incendio, actualizados cada 60 segundos.</p>
            </div>
            <div class="feature">
                <h4>Ubicación de Clientes</h4>
                <p>El administrador puede rastrear la ubicación de los visitantes en un mapa interactivo con Leaflet.</p>
            </div>
        </div>
    </section>
    @extends(footer)


</body>
</html>