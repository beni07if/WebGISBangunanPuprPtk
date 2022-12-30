<!DOCTYPE html>
<html>
<head>
  <title>Peta Sederhana dengan OpenLayers</title>
  <!-- Link ke file CSS OpenLayers -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/css/ol.css" type="text/css">
  <!-- Link ke file JavaScript OpenLayers -->
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/build/ol.js"></script>
</head>
<body>
  <!-- Elemen HTML yang akan menjadi tempat menampilkan peta -->
  <div id="map" style="height: 400px;"></div>
  <script>
    // Buat objek Map baru dan tetapkan elemen HTML yang akan menjadi tempat menampilkan peta
    var map = new ol.Map({
      target: 'map',
    });

    // Buat objek View baru dan tetapkan pusat dan zoom level peta
    var view = new ol.View({
      center: [0, 0],
      zoom: 2,
    });

    // Buat objek TileLayer baru dan tetapkan sumber data peta yang akan digunakan
    var layer = new ol.layer.Tile({
      source: new ol.source.OSM(),
    });

    // Tambahkan lapisan peta ke objek Map
    map.addLayer(layer);

    // Tetapkan objek View sebagai view peta
    map.setView(view);
  </script>
</body>
</html>
