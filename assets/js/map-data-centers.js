mapboxgl.accessToken = 'pk.eyJ1IjoiZmFzdG1ldHJpY3MiLCJhIjoiY2ppd2VhY3dnMXdqcjNxa2JlZnFycDkzYiJ9.xPEDJWXqU7-ISKMB-CzX_A';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/light-v9',
		center: [-122.3903303, 37.7889241],
		zoom: 15.8,
		pitch: 45,
		bearing: -17.6,
	});
	map.on('load', function () {
		// Insert the layer beneath any symbol layer.
		var layers = map.getStyle().layers;

		var labelLayerId;
		for (var i = 0; i < layers.length; i++) {
			if (layers[i].type === 'symbol' && layers[i].layout['text-field']) {
				labelLayerId = layers[i].id;
				break;
			}
		}

		map.addLayer({
			'id': '3d-buildings',
			'source': 'composite',
			'source-layer': 'building',
			'filter': ['==', 'extrude', 'true'],
			'type': 'fill-extrusion',
			'minzoom': 15,
			'paint': {
				'fill-extrusion-color': '#aaa',

				// use an 'interpolate' expression to add a smooth transition effect to the
				// buildings as the user zooms in
				'fill-extrusion-height': [
					"interpolate", ["linear"], ["zoom"],
					15, 0,
					15.05, ["get", "height"]
				],
				'fill-extrusion-base': [
					"interpolate", ["linear"], ["zoom"],
					15, 0,
					15.05, ["get", "min_height"]
				],
				'fill-extrusion-opacity': .6
			}
		}, labelLayerId);
	
		    map.loadImage('https://www.fastmetrics.com/assets/images/map-marker.png', function(error, image) {
			if (error) throw error;
			map.addImage('cat', image);
			map.addLayer({
				"id": "points",
				"type": "symbol",
				"source": {
					"type": "geojson",
					"data": {
						"type": "FeatureCollection",
						"features": [{
							"type": "Feature",
							"geometry": {
								"type": "Point",
								"coordinates": [-122.3903303, 37.7889241] 
							}
						}]
					}
				},
				"layout": {
					"icon-image": "cat",
					"icon-size": 1
				}
			});
		});
	});
	map.scrollWheelZoom.disable();