window.onload = function(){

	var map;
	
	function initialize(){
		var mapProp = {
			center: new google.maps.LatLng(-14.665798770102048, -40.48271013107358),
			scrollwheel:false,
			zoom:12,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementById("mapa"),mapProp);
	}

	function addMarker(lat,long,icon,content){
		var latLng = {'lat':lat,'lng':long};

		var marker = new google.maps.Marker({
			position:latLng,
			map:map,
			icon:icon
		});

		var infoWindow = new google.maps.InfoWindow({
			content:content,
			maxWidth:200,
			pixelOffset: new google.maps.Size(0,20)
		});

		google.maps.event.addListener(marker,'click',function() {
			infoWindow.open(map,marker);
		});

	}

	initialize();

	var conteudo = '<p style="color:black;font-size:13px;padding:10px 0;">Rua Osvaldo de Andrade, 447</p>';

	addMarker(-14.672230, -40.486700, '',conteudo);

}