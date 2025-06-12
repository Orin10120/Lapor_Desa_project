var map = document.getElementById('map');
var lattitude = document.getElementById('lat');
var longitude = document.getElementById('lng');
var address = document.getElementById('address');

// Hardcode latitude dan longitude
var lat = -6.200000; // Contoh latitude
var lng = 106.816666; // Contoh longitude (Jakarta)

// Set nilai latitude dan longitude pada input
lattitude.value = lat;
longitude.value = lng;

// Buat peta menggunakan Leaflet
var mymap = L.map('map').setView([lat, lng], 13);

// Tambahkan marker pada lokasi
var marker = L.marker([lat, lng]).addTo(mymap);

// Tambahkan layer peta
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(mymap);

// Gunakan geocoding untuk mendapatkan alamat
var geocodingUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`;

fetch(geocodingUrl)
    .then(response => response.json())
    .then(data => {
        address.value = data.display_name;
        marker.bindPopup(`<b>Lokasi Laporan</b><br />Kamu berada di ${data.display_name}`).openPopup();
    })
    .catch(error => console.error('Error fetching reverse geocoding data:', error));
