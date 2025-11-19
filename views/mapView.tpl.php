<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mapa de Clientes - {{ APP_NAME }}</title>
	
	<!-- CSS y Javascript de Leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

	<style>
		/* Contenedor del mapa */
		#map {
		    width: 100%;
		    height: 90vh; /* el mapa ahora se ve */
		    border: 2px solid #1e293b;
		    border-radius: 12px;
		    margin: 15px 0;
		    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
		}

		/* Botón "volver" */
		.back-btn {
		    display: inline-block;
		    padding: 10px 14px;
		    background: #1e293b;
		    color: #fff;
		    text-decoration: none;
		    border-radius: 8px;
		    margin: 10px;
		    font-size: 14px;
		}
		.back-btn:hover {
		    background: #334155;
		}

	</style>
</head>
<body>
	<a href="?slug=administrator" class="back-btn">Volver</a>
	<div id="map"></div>
	
	<script type="text/javascript">
		const map = L.map('map').setView([-34.6037, -58.3816], 2);

		const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '© OpenStreetMap contributors'
		}).addTo(map);

		// Cargar datos de clientes
		loadClientsLocation().then(locations => {
			locations.forEach(location => {
				const marker = L.marker([location.latitud, location.longitud]).addTo(map)
					.bindPopup(`
						<b>IP:</b> ${location.ip}<br>
						<b>Accesos:</b> ${location.cantidad_accesos}
					`);
			});
		});

		async function loadClientsLocation(){
			try {
				const response = await fetch("api.php?list-clients-location");
				const data = await response.json();
				return data;
			} catch (error) {
				console.error('Error cargando ubicaciones:', error);
				return [];
			}
		}
	</script>
</body>
</html>