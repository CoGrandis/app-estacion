@extends(head)
        <link rel="stylesheet" href="./static/css/panel.css">

<body>
    <header>
        <h1>Panel de {{ USER_NAME }}</h1>
        <a href="?slug=logout" style="position: absolute; top: 20px; right: 20px; background-color: #D32F2F; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; font-size: 14px;">Cerrar Sesión</a>
    </header>

    <div id="wrapper">

        <div id="list-estacion">
            <div id="list-estacion-title">Estaciones</div>
        </div>

        <template id="tpl-btn-estacion">
            <a href="" class="btn-estacion">
                <div class="estacion-apodo">
                    
                </div>

                <div class="estacion-ubicacion">
                    
                </div>

                <div class="estacion-visitas">
                    
                </div>
            </a>
        </template>

        
    
    </div>



    <script type="text/javascript" src="./static/js/estaciones.js"></script>
    <script type="text/javascript" src="./static/js/panelScript.js"></script>
</body>
</html>