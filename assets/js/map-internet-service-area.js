	mapboxgl.accessToken = 'pk.eyJ1IjoiZmFzdG1ldHJpY3MiLCJhIjoiY2ppd2VhY3dnMXdqcjNxa2JlZnFycDkzYiJ9.xPEDJWXqU7-ISKMB-CzX_A';
	var map = new mapboxgl.Map({
		container: 'service-map',
		style: 'mapbox://styles/mapbox/streets-v10',
		center: [-122.272768, 37.898698],
		zoom: 7
	});
	map.on('load', function () {
		map.addLayer({
			'id': 'maine',
			'type': 'fill',
			'minzoom': 3,
			'maxzoom': 9,
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Polygon',
						'coordinates': [[[-122.2998046875, 38.66406704456943, -122.2998046875],
						[-123.134765625, 38.279157039458354],
						[-121.99905395507812, 37.19423663983283],
						[-121.72576904296875, 37.26968150969715],
						[-121.3714599609375, 37.63163475580643],
						[-121.53350830078125, 38.37396220263092]]]
					}
				}
			},
			'layout': {},
			'paint': {
				'fill-color': '#e28f32',
				'fill-opacity': 0.4
			}
		});
	});
	var map2 = new mapboxgl.Map({
		container: 'la-map',
		style: 'mapbox://styles/mapbox/streets-v10',
		center: [-117.13623046875,35.56798045801209],
		zoom: 6
	});
	map2.on('load', function () {
		map2.addLayer({
			'id': 'maine',
			'type': 'fill',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Polygon',
						'coordinates': [[[-118.67431640625, 38.05674222065293],
							[-118.0975341796875, 35.7286770448517],
							[-118.564453125, 35.47856499535729],
							[-117.51800537109375, 34.71678232049371],
							[-118.8116455078125, 34.732584206123626],
							[-118.795166015625, 34.58799745550482],
							[-120.0640869140625, 35.02999636902565],
							[-120.1959228515625, 34.90395296559004],
							[-119.3939208984375, 34.488447837809304],
							[-119.7125244140625, 34.17772537282446],
							[-117.9437255859375, 33.42456461884056],
							[-116.7572021484375, 33.39934533042092],
							[-116.74896240234375, 34.58573628651288],
							[-116.246337890625, 34.795761534730325],
							[-115.411376953125, 34.161818161230386],
							[-114.378662109375, 34.07996230865873],
							[-114.08203125, 34.261756524459805],
							[-114.620361328125, 35.03899204678081]]]
					}
				}
			},
			'layout': {},
			'paint': {
				'fill-color': '#e28f32',
				'fill-opacity': 0.4
			}
		});
	});