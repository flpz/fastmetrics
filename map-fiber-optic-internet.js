	mapboxgl.accessToken = 'pk.eyJ1IjoiZmFzdG1ldHJpY3MiLCJhIjoiY2ppd2VhY3dnMXdqcjNxa2JlZnFycDkzYiJ9.xPEDJWXqU7-ISKMB-CzX_A';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v10',
		center: [-122.272768, 37.898698],
		zoom: 7
	});
	map.on('load', function () {

		map.addLayer({
			'id': 'maine',
			'minzoom': 3,
			'maxzoom': 9,
			'type': 'fill',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Polygon',
						'coordinates': [[[-122.2998046875, 38.66406704456943],
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
		map.addLayer({
			'id': 'circle1',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.4756886, 38.5046132]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle2',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.4212967, 37.7742542]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle3',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-121.886856, 37.338035]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle4',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-121.9514707, 37.2873832]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle5',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.2628397, 37.5070362]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle6',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.5359377, 37.9726132]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle7',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-121.9802007, 37.7797932]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle8',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.0673517, 37.9098712]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle9',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-121.9926867, 37.5471542]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle10',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.1460477, 37.4416422]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle11',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.0861827, 37.3857892]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle12',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.2863787, 37.8678152]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle13',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.2741867, 37.8034092]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle14',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.0421177, 38.2492732]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle15',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.4727887, 37.6877832]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle16',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-121.8761177, 37.6619572]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle17',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.0337917, 37.9752322]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle18',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.2889327, 38.2975372]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle19',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.7163797, 38.4401052]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		map.addLayer({
			'id': 'circle20',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.4602407, 38.2919002]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
		 map.addLayer({
			'id': 'circle21',
			'type': 'circle',
			'source': {
				'type': 'geojson',
				'data': {
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [-122.3284097, 37.5631202]
					}
				}
			},
			'paint': {
			  'circle-color': '#4c657a',
			  'circle-radius': {
				stops: [
				  [7, 20],
				  [10, 50]
				]
			  },
			  'circle-opacity': 0.6
			}
		 });
	});