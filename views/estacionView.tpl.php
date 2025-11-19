<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>app-estacion</title>

	<link rel="stylesheet" href="./static/css/estaciones.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/2eb80ea257.js" crossorigin="anonymous"></script>
	<!-- Mantengo la versión que venías usando -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>

	<div id="chipid" style="display: none;">{{ CHIP_ID }}</div>

	<!-- Envoltura total -->
	<div id="wrapper">

		<!-- Contenedor principal -->
		<div id="container">

			<!-- Panel -->
			<div id="panel">

				<!-- Botón volver -->
				<div id="menu">
					<a href="?slug=panel">
						<i class="fas fa-chevron-left"></i>
					</a>
				</div>
				<!-- Fin botón volver -->

				<!-- Display con datos extendidos -->
				<div id="panel-container">

					<!-- Título constante -->
					<div id="panel-title">
						<div id="col-sub">
							<div id="fecha"></div>
							<div id="hora"></div>
						</div>

						<div id="title-ubicacion">
							<i class="fas fa-map-marker-alt color-ubicacion"></i>
							<span id="ubicacion">Buenos Aires, Garín</span>
						</div>

						<div id="title-sub" style="display: none;">
							<i class="fas fa-thermometer-full color-temperatura"></i>&nbsp;TEMPERATURA
						</div>
					</div>
					<!-- Fin título constante -->

					<!-- Inicia Sección de datos de temperatura -->
					<div id="panel-container-temperatura">
						<div class="panel-col">
							<div class="col-items">
								<div class="item">
									<div class="item-title">
										<i class="fas fa-thermometer-full color-temperatura"></i>&nbsp;TEMPERATURA
									</div>
								</div>
							</div>

							<div class="col-items">
								<div class="col-important">
									<div class="important-val-int" id="temp-val-int">--</div>
									<div class="important-detail">
										<div class="important-val-unit">ºC</div>
										<div class="important-val-dec" id="temp-val-dec">--</div>
									</div>
								</div>

								<div class="panel-row">
									<div class="item">
										<div class="item-title">
											<i class="fas fa-caret-up color-rojo"></i>&nbsp;Máxima
										</div>
										<div class="item-value" id="temp-max">--ºC</div>
									</div>

									<div class="item">
										<div class="item-title">
											<i class="fas fa-caret-down color-verde"></i>&nbsp;Mínima
										</div>
										<div class="item-value" id="temp-min">--ºC</div>
									</div>
								</div>

							</div>
						</div>

						<div class="panel-col">
							<div class="col-items">
								<div class="item">
									<div class="item-title">
										<i class="fas fa-child color-humedad"></i>&nbsp;SENSACIÓN
									</div>
								</div>
							</div>

							<div class="col-items">
								<div class="col-important">
									<div class="important-val-int" id="sens-val-int">--</div>
									<div class="important-detail">
										<div class="important-val-unit">ºC</div>
										<div class="important-val-dec" id="sens-val-dec">--</div>
									</div>
								</div>

								<div class="panel-row">
									<div class="item">
										<div class="item-title">
											<i class="fas fa-caret-up color-rojo"></i>&nbsp;Máxima
										</div>
										<div class="item-value" id="sen-max">--ºC</div>
									</div>

									<div class="item">
										<div class="item-title">
											<i class="fas fa-caret-down color-verde"></i>&nbsp;Mínima
										</div>
										<div class="item-value" id="sen-min">--ºC</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Fin Sección de datos de temperatura -->

					<!-- Inicia Sección de datos de fuego -->
					<div id="panel-container-fuego">
						<div class="panel-col">
							<div class="col-items">
								<div class="item">
									<div class="item-title">FFMC</div>
									<div class="item-value" id="ffmc">--</div>
								</div>

								<div class="item">
									<div class="item-title">DMC</div>
									<div class="item-value" id="dmc">--</div>
								</div>

								<div class="item">
									<div class="item-title">DC</div>
									<div class="item-value" id="dc">--</div>
								</div>
							</div>
						</div>

						<div class="panel-col">
							<div class="col-items">
								<div class="item">
									<div class="item-title">ISI</div>
									<div class="item-value" id="isi">--</div>
								</div>

								<div class="item">
									<div class="item-title">BUI</div>
									<div class="item-value" id="bui">--</div>
								</div>

								<div class="item">
									<div class="item-title">FWI</div>
									<div class="item-value" id="fwi">--</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin Sección de datos de fuego -->

					<!-- Inicia Sección de datos de humedad -->
					<div id="panel-container-humedad">
						<div class="panel-col">
							<div class="col-items">
								<div class="col-important">
									<div class="important-val-int" id="humedad__val__int">--</div>

									<div class="important-detail">
										<div class="important-val-unit">%</div>
										<div class="important-val-dec" id="humedad__val__dec">--</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin Sección de datos de humedad -->

					<!-- Inicia Sección de datos de viento -->
					<div id="panel-container-viento">
						<div class="panel-col">
							<div class="col-items">
								<div class="item">
									<div class="item-title">
										<i class="fas fa-wind color-viento"></i>&nbsp;VIENTO
									</div>
								</div>
							</div>

							<div class="col-items">
								<div class="col-important">
									<div class="important-val-int" id="viento__val__int">--</div>

									<div class="important-detail">
										<div class="important-val-unit">Km/H</div>
										<div class="important-val-dec" id="viento__val__dec">--</div>
									</div>
								</div>

								<div class="panel-row">
									<div class="item">
										<div class="item-title">
											<i class="fas fa-caret-up color-rojo"></i>&nbsp;Máximo
										</div>
										<div class="item-value" id="viento__max">--Km/H</div>
									</div>
								</div>
							</div>
						</div>

						<div class="panel-col">
							<div class="panel-row">
								<div style="display: flex; align-items: center; gap:5px; font-size: 18px;">
									<i class="far fa-compass color-rojo"></i>
									<div id="viento__val__veleta">--</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin Sección de datos de viento -->

					<!-- Inicia Sección de datos de presion -->
					<div id="panel-container-presion">
						<div class="panel-col">
							<div class="col-items">
								<div class="col-important">
									<div class="important-val-int" id="presion__val__int">--</div>

									<div class="important-detail">
										<div class="important-val-unit">hPa</div>
										<div class="important-val-dec" id="presion__val__dec">--</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin Sección de datos de presion -->

				</div>
				<!-- Fin display con datos extendidos -->

				<!-- Gráficos: principal + secundarios -->
				<div id="panel-canvas">
					<div id="contenedor-grafico" class="chart-container" style="position: relative; width: 100%; padding: 0.5em; display:flex; flex-direction:column; gap:12px;">

						<!-- Gráfico original (tumyChart) -->
						<div style="width:100%; height:280px;">
							<canvas id="myChart" class="border-debug" style="width:100%; height:100%;"></canvas>
						</div>

						<!-- Nuevo gráfico: temperatura -->
						<div class="card-chart" style="width:100%; height:240px;">
							<canvas id="chart-temperatura" style="width:100%; height:100%;"></canvas>
						</div>

						<!-- Nuevo gráfico: humedad -->
						<div class="card-chart" style="width:100%; height:240px;">
							<canvas id="chart-humedad" style="width:100%; height:100%;"></canvas>
						</div>

						<!-- Nuevo gráfico: combinado -->
						<div class="card-chart" style="width:100%; height:300px;">
							<canvas id="chart-combinado" style="width:100%; height:100%;"></canvas>
						</div>

					</div>
				</div>
				<!-- Fin Gráfico -->

			</div>
			<!-- Fin panel -->

		</div>
		<!-- Fin contenedor principal -->

		<!-- Botones para cambiar el panel -->
		<div id="controls">

			<!-- Botón temperatura -->
			<div class="btn-control" id="btn-temperatura">
				<div class="btn-control-container">
					<div class="control-title">
						<i class="fas fa-thermometer-full color-temperatura"></i>
					</div>

					<div id="temp" class="control-date">--ºC</div>
				</div>
			</div>
			<!-- Fin botón temperatura -->

			<!-- Botón fuego -->
			<div class="btn-control" id="btn-fuego">
				<div class="btn-control-container">
					<div class="control-title">
						<i class="fas fa-fire color-fuego"></i>
					</div>

					<div id="fuego" class="control-date">?</div>
				</div>
			</div>
			<!-- Fin botón fuego -->

			<!-- Botón humedad -->
			<div class="btn-control" id="btn-humedad">
				<div class="btn-control-container">
					<div class="control-title">
						<i class="fas fa-tint color-humedad"></i>
					</div>

					<div id="humedad" class="control-date">--%</div>
				</div>
			</div>
			<!-- Fin botón humedad -->

			<!-- Botón presión -->
			<div class="btn-control" id="btn-presion">
				<div class="btn-control-container">
					<div class="control-title">
						<i class="fas fa-arrow-circle-down color-presion"></i>
					</div>

					<div id="presion" class="control-date">--hPa</div>
				</div>
			</div>
			<!-- Fin botón presión -->

			<!-- Botón viento -->
			<div class="btn-control" id="btn-viento">
				<div class="btn-control-container">
					<div class="control-title">
						<i class="fas fa-wind color-viento"></i>
					</div>
					<div id="viento" class="control-date">--Km/H</div>

					<i class="visible far fa-compass color-rojo align-center"></i>
					<div id="viento__direccion">--</div>
				</div>
			</div>
			<!-- Fin botón viento -->

		</div>
		<!-- Fin botones para cambiar el panel -->

	</div>
	<!-- Fin envoltura total -->

	<!-- tu script principal -->
	<script type="text/javascript" src="./static/js/panel.js"></script>
</body>
</html>
