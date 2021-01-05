<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="content">
    <div class="content-inside">
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="background-color: #5FB404;color: white" class="nav-link active" id="home-tab"
                        data-toggle="tab" role="tab" aria-controls="home" aria-selected="false"><b>Mapa - Localização Chamado <?php echo $call["value"]; ?></b></a>
                </li>
            </ul>
            
           <div id="map"></div>

            <hr class="my-4" />

             <a href="javascript:history.back()" class="btn btn-info btn-xs">Voltar</a>


        </div>
    </div>
</div>

    <script>

      function initMap() {
        var coordenadas = {lat: <?php echo $markers["valueLat"]; ?>, lng: <?php echo $markers["valueLng"]; ?>};

        var mapa = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: coordenadas 
        });

        const contentString =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h5 id="firstHeading" class="firstHeading"><?php echo $markers["valueLocality"]; ?></h5>' +
          '<div id="bodyContent">' +
          "<p ><b style='font-size:17px;'><?php echo $markers["valueObservation"]; ?></b><b style='font-size:13px;'>Latitude: <?php echo $markers["valueLat"]; ?><br>Longitude: <?php echo $markers["valueLng"]; ?></b> </p>" +
          "</div>" +
          "</div>";
           const infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
  
        var marker = new google.maps.Marker({
          position: coordenadas,
          map: mapa,
          title: 'Chamado <?php echo $call["value"]; ?>'
        });

        marker.addListener("click", () => {
        infowindow.open(map, marker);
       });
        
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1RqQyxumXFMLKO2NG9isrbO8nXTPtxc&callback=initMap">
    </script>







 