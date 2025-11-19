@extends(head)

    <link rel="stylesheet" type="text/css" href="./static/css/estaciones.css">


<body>
    <header>
        <h1>Panel de {{ USER_NAME }}</h1>
    </header>

    <div id="wrapper">

        <div id="list-estacion">
            <div id="list-estacion-title">estaciones</div>
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

    @extends(footer)


    <script type="text/javascript" src="./static/js/estaciones.js"></script>
    <script type="text/javascript" src="./static/js/panelScript.js"></script>
</body>
</html>