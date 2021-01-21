var map = L
	.map('map')
	.setView([
		-6.212594, 106.818498
	], 6);

mapLink = '<a href="http://meteonusantara.com">Meteo Nusantara Instrumen</a>';
L
	.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; ' + mapLink,
		maxZoom: 18
	})
	.addTo(map);

var myFeatureGroup = L
	.featureGroup()
	.addTo(map)
	.on("click", groupClick);
var mapMarker;


function groupClick(event) { }