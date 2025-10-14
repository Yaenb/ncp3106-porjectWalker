const map = L.map('map').setView([14.5995, 120.9842], 13); // Manila default

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
}).addTo(map);

fetch('api/get_ratings.php')
  .then(res => res.json())
  .then(data => {
    data.forEach(pin => {
      const color = pin.avg_rating > 4 ? 'green' :
                    pin.avg_rating > 2 ? 'yellow' : 'red';
      const marker = L.marker([pin.lat, pin.lng], {
        icon: L.icon({
          iconUrl: `assets/images/marker-${color}.png`,
          iconSize: [25, 41],
        })
      }).addTo(map);
      marker.bindPopup(`<b>${pin.place_name}</b><br>Rating: ${pin.avg_rating}`);
    });
  });
