<style>
       #map {
        height: 100%;
        width: 100%;
       }
    </style>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB0Vep_UO3IX3klwUYqH9xM18pOwwsnZ0&callback=initMap" async defer></script>

<script type="text/javascript">
var map;
      function initMap() {
        var customMapType = new google.maps.StyledMapType([ { "featureType": "poi", "stylers": [ { "visibility": "off" } ] } ]);
        var customMapTypeId = 'custom_style';

        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 41.9947048, lng: 21.4315207},
          zoom: 15,
          mapTypeControlOptions: {
          
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
        }

        });

        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);

		// Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      var mypos = new google.maps.Marker({
    position: pos,
    map: map,
    title: 'MyPosition!'
  });


      map.setCenter(pos);
    }, function() {
      handleLocationError(true, mypos, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

        //initialize();
		loadPoints();

}



function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow;
}

function loadPoints()
{
var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	        points = JSON.parse(this.responseText);
	        var group = [];
	        for(var i=0; i < points.length; i++)
			{
			  //var icon = (points[i].type == 1) ? 'panel' : 'sensor'; 
			  var image = {
			        url: '/img/panel-icon.png',
			        size: new google.maps.Size(32, 32),
			        // The origin for this image is (0, 0).
			        origin: new google.maps.Point(0, 0),
			        // The anchor for this image is the base of the flagpole at (0, 32).
			        anchor: new google.maps.Point(0, 32)
			        };
			  var marker = new google.maps.Marker({
			        position: {lat:  parseFloat(points[i].lat), lng: parseFloat(points[i].lng)},
			        map: map,
			        icon: image,
			        title: 'Title',
			      });
			  group.push(marker);
			}
	    }
	};

<?php 
$url = "/index.php/map/api/";
if(isset($type))
	{
		$url = $url . $type . '/' . $id;
	}

	 ?>

xmlhttp.open("GET", "<?php echo $url; ?>", true);
xmlhttp.send();
}


function initialize()
{

  var contentString = '<iframe src=""></iframe>';
  

  
  for(var i =0; i < locations.length; i++)
  {
    var group = [];

    for(var x = 0; x < locations[i].length; x++)
    {

        var image = {
        url: icons[i],
        size: new google.maps.Size(30, 32),
        // The origin for this image is (0, 0).
        origin: new google.maps.Point(0, 0),
        // The anchor for this image is the base of the flagpole at (0, 32).
        anchor: new google.maps.Point(0, 32)
        };

        var marker = new google.maps.Marker({
        position: {lat: locations[i][x][1], lng: locations[i][x][2]},
        map: null,
        icon: image,
        title: locations[i][x][0],
      });

      addWindow(marker, '<iframe src="dsc/'+locations[i][x][0]+'.html"></iframe>');

      group.push(marker);
    }

    markers.push(group);
  }

  for(var x = 0; x < markers.length; x++)
  {
    markers[x].setMap(map);
  }
}

function setMarkers() {
  for(var x = 0; x < markers.length; x++)
  {
    markers[i][x].setMap(map);
  }
}

function addWindow(marker, message)
{

  var infoWindow = new google.maps.InfoWindow({
                content: message,
				maxWidth: 500,

            });

            google.maps.event.addListener(marker, 'click', function () {
                infoWindow.open(map, marker);
            });
}

function removeMarkers(i) {
  for(var x = 0; x < markers[i].length; x++)
  {
    markers[i][x].setMap(null);
  }
}

function update(e)
{
  // 'this' is reference to checkbox clicked on
    var form = this.form;

    if ( this.checked ) {
        setMarkers(this.value);
    } else {
        removeMarkers(this.value);
    }
}	

</script>