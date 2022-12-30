<!DOCTYPE html>
<html>

<head>
    <title>leaflet-rotate.js</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <!-- Leaflet JS / CSS -->
    <script src="https://unpkg.com/leaflet@1.7/dist/leaflet-src.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7/dist/leaflet.css">
    <link rel="stylesheet" href="{{ asset('search/src/leaflet-search.css')}}" />

    <!-- Leaflet-Rotate -->
    <script src="rotate/dist/leaflet-rotate-src.js"></script>

    <!-- include some miscellaneous -->
    <script src="rotate/misc/route.js"></script>
    <script src="rotate/misc/places.js"></script>
    <script src="rotate/misc/loremIpsum.js"></script>
    <script src="rotate/lib/debug.js"></script>

    <!-- bagian serch -->
    <script src="{{ asset('search/src/leaflet-search.js')}}"></script>

    <!-- dari download jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Leaflet.TextPath -->
    <script src="{{ asset('leaflet/js/leaflet.textpath.js ')}}"></script>

    <style>
        #map {
            width: 100%;
            height: 700px;
            border: 1px solid #ccc;
            max-height: 80vh;
        }

        .ikon {
            width: 50px;
            height: 50px;
            border: 2px solid #000000;
        }

        img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            margin-left: 10px;
        }

        .label-bidang {
            font-size: 10pt;
            color: yellow;
            text-align: center;
        }
    </style>

</head>

<body style="background-image: url('img/color.png');">

    <div id="map"></div>
    <script>
        // bagian data serch
        var data = [{
                "loc": [0.119275, 110.596268],
                "title": "sanggau"
            },
            {
                "loc": [0.821144, 109.477699],
                "title": "bengkayang"
            },
            {
                "loc": [-0.115488, 110.290282],
                "title": "meliau"
            },
            {
                "loc": [-2.977251, 104.774985],
                "title": "Palembang"
            },
            {
                "loc": [-0.031174, 110.120284],
                "title": "Tayan"
            },
            {
                "loc": [-6.918780, 107.622558],
                "title": "Bandung"
            },
            {
                "loc": [-3.318354, 114.595370],
                "title": "Banjarmasin"
            },
            {
                "loc": [-6.170694, 106.644504],
                "title": "Tangerang"
            },
            {
                "loc": [-0.875055, 131.256841],
                "title": "Sorong"
            },
            {
                "loc": [-0.862307, 134.066888],
                "title": "Manokwari"
            },
            {
                "loc": [-2.216282, 113.915494],
                "title": "Palngkaraya"
            },
            {
                "loc": [-10.177651, 123.607680],
                "title": "Kupang"
            },
        ];



        var esri = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            id: 'mapbox.streets',
            maxZoom: 24,
            maxNativeZoom: 18,
        });

        var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 24,
            maxNativeZoom: 19,
            attribution: '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        });

        var map = L.map('map', {
            center: [-2.014066, 114.654494],
            zoom: 5,
            layers: [esri],
            // worldCopyJump: true,
            rotate: true,
            touchRotate: true,
            rotateControl: {
                closeOnZeroBearing: false
            },
            bearing: 0,
        });

        // map.setBearing(30);
        // map.touchRotate.enable();

        var layers = L.control.layers({
            'Empty': L.tileLayer(''),
            'Streets': osm,
            'Satellite': esri,
        }, null, {
            collapsed: false
        }).addTo(map);

        var markers = [];
        for (var i in places) {
            markers.push(L.marker(places[i], {
                    draggable: true
                })
                .bindPopup('<b>' + i + '</b><br>' + loremIpsum)
                .bindTooltip('<b>' + i + '</b>',
                    markers.length ? {} : {
                        direction: 'right',
                        permanent: true
                    }
                )
                .addTo(map));
        }

        var path = L.polyline(route, {
            renderer: L.canvas()
        }).addTo(map);

        var circle = L.circle([53, 4], 111111)
            .addTo(map);

        var polygon = L.polygon([
            [48, -3],
            [50, -4],
            [52, 4]
        ]).addTo(map);

        // Display some debug info
        L.Rotate.debug(map);
        // bagian serch
        //map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer
        var markersLayer = new L.LayerGroup(); //layer contain searched elements

        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
            position: 'topleft',
            layer: markersLayer,
            initial: false,
            zoom: 4,
            marker: false
        });
        map.addControl(controlSearch);

        ////////////populate map with markers from sample datall juga akaks
        for (i in data) {
            var title = data[i].title, //value searched
                loc = data[i].loc, //position found
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                }); //se property searched
            marker.bindPopup('title: ' + title);
            markersLayer.addLayer(marker);
        }


        //tambah disini
        $(document).ready(function() {
            $.getJSON('/lokasi/json', function(data) {
                $.each(data, function(index) {
                    //alert(data[index].lokasi);
                    $.getJSON(data[index].lokasi, function(json) {
                        geoLayer = L.geoJson(json, {
                            style: function(feature) {
                                return {
                                    fillOpacity: 0,
                                    weight: 2,
                                    color: "red",
                                    dashArray: "15 5",
                                    lineCap: "square"
                                };
                            },

                            onEachFeature: function(feature, layer) {

                                layer.on('click', (e) => {
                                    var html = '<div><h5> Nama Lokasi : ' + feature.properties.fid + '</h5>';
                                    html += '<h5> Negara : ' + feature.properties.NAME_0 + '</h5>';
                                    html += '<h5> Provinsi : ' + feature.properties.NAME_1 + '</h5>';
                                    html += '<h5> Kode : ' + feature.properties.KODE + '</h5>';
                                    html += '<h5> Lokasi : ' + data[index].lokasi + '</h5>';
                                    L.popup()
                                        .setLatLng(layer.getBounds().getCenter())
                                        .setContent(html)
                                        .openOn(map);
                                })

                                //custem marker kuhusus label L.divIcon
                                var iconLabel = L.divIcon({
                                    className: 'label-bidang',
                                    html: '<b>' + feature.properties.NAME_1 + '</b>',
                                    iconSize: [100, 20]
                                });

                                L.marker(layer.getBounds().getCenter(), {
                                    icon: iconLabel
                                }).addTo(map);

                                layer.addTo(map);

                            }

                        });
                    })
                });
            });
        });
    </script>

</body>

</html>