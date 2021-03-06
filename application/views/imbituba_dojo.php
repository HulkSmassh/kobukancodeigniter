			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Imbituba Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Imbituba Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>

						</div>
						
							<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<li class="col-md-4	 no-pin isotope-item">
									<div class="portfolio-item img">
										<a href="<?php echo base_url('/img/imbituba/fachada.jpg') ?>" class="thumb-info">
											<img src="<?php echo base_url('/img/imbituba/fachada.jpg') ?>" id="imbitubaFachada" class="100Width image-responsive" height="365">
										</a>
									</div>
								</li>
							</ul>

						<div class="col-md-4">

							<h2 class="shorter">Horários para <strong>Treino</strong></h2>

							<hr class="tall">

							<table class="table table-striped">
								<thead>
									<tr>
										<th>Dia</th>
										<th>Hora</th>
									</tr>									
										</thead>
										<tbody>
									<tr>
										<td>
											Terça
										</td>
										<td>
											19h - 20h
										</td>
										
									</tr>
									<tr>
										<td>
											Quinta
										</td>
										<td>
											19h - 20h
										</td>
										
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row center">
						<h4><strong>Responsável Técnico</strong></h4>
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/vinicius.jpg') ?>">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Vinicius</span>
											<span class="thumb-info-type">Shodan (1º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Vinicius Algarve</p>
									</span>
								</div>
							</li>							
						</ul>
					
					</div>

				</div>
<!-- 
				<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">
				
								<div style="height: 150px;"></div>
				
							</div>
						</div>
					</div>
				</section> -->
				<div class="container">

					<div class="row">

					<div class="col-md-12">
							<h3 class="short"><strong>Fotos</strong></h3>
						</div>

						  <div class="row">
							  <ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<?php foreach ($fotos as $foto) : ?>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="<?php echo base_url('/img/imbituba'.$foto); ?>" class="thumb-info">
												<img src="<?php echo base_url('/img/imbituba'.$foto); ?>" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>
									<?php endforeach; ?>
							</ul> 
						</div> 						

					</div>

				</div>

			</div>

		</div>

		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "",
				html: "",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// var initLatitude = -29.374935; //-29.374935, -51.112486
			// var initLongitude =  -51.112486;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: false,
					zoomControl: true,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: true,
					disableDefaultUI: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				// latitude: initLatitude,
				// longitude: initLongitude,
				zoom: 16
			};

			var map = $("#google-dojo").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#google-dojo").gMap("centerAt", options);
			}

		</script>

	</body>
</html>
