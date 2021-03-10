    var map = L.map('mapid').setView([45.764043, 4.835659], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([45.764043, 4.835659]).addTo(map)
    .bindPopup('Voici le point gps de Lyon', {closeOnClick: false, autoClose: false})
    .openPopup();

    L.marker([45.739827, 4.770337]).addTo(map)
    .bindPopup('Rihanna of firreeeee', {closeOnClick: false, autoClose: false})
    .openPopup();

    L.marker([45.766211, 4.792767]).addTo(map)
    .bindPopup('David Guetta in the air', {closeOnClick: false, autoClose: false})
    .openPopup();

/*var map = L.map('map').setView([51.505, -0.09], 13);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright%22%3EOpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.', {closeOnClick: false, autoClose: false})
    .openPopup();

    var l2 =L.marker([51.48, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.', {closeOnClick: false, autoClose: false})
    .openPopup();
   */