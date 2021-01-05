<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">
   <div class="content-inside">
      <div class="my-4">
         <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
               <a style="background-color: #5FB404;color: white" class="nav-link active" id="home-tab" data-toggle="tab"
                  role="tab" aria-controls="home" aria-selected="false"><b>Mapa - Localização dos Pontos de
                     Entulhos</b></a>
            </li>
         </ul>

         <div id="map"></div>

         <hr class="my-4" />

         <a href="javascript:history.back()" class="btn btn-info btn-xs">Voltar</a>


      </div>
   </div>
</div>

<script>

   var map;
   var infoWindow;

   // A variável markersData guarda a informação necessária a cada marcador juntamente com o {loop} da variável markers do TPL
   // Para utilizar este código basta alterar a informação contida nesta variável
   var markersData = ['<?php $counter1=-1;  if( isset($markers) && ( is_array($markers) || $markers instanceof Traversable ) && sizeof($markers) ) foreach( $markers as $key1 => $value1 ){ $counter1++; ?>',{ id: '<?php echo $value1["idcall"]; ?>', lat: '<?php echo $value1["lat"]; ?>', lng: '<?php echo $value1["lng"]; ?>', loc: '<?php echo $value1["locality"]; ?>', obs: '<?php echo $value1["observation"]; ?>' },'<?php } ?>'];


   function initMap() {
      var mapOptions = {
         center: new google.maps.LatLng(-16.027876751643, -48.041942848535),
         zoom: 13,
         mapTypeId: 'roadmap',
      };

      map = new google.maps.Map(document.getElementById('map'), mapOptions);

      // cria a nova Info Window com referência à variável infowindow
      // o conteúdo da Info Window será atribuído mais tarde
      infoWindow = new google.maps.InfoWindow();

      // evento que fecha a infoWindow com click no mapa
      google.maps.event.addListener(map, 'click', function () {
         infoWindow.close();
      });

      // Chamada para a função que vai percorrer a informação
      // contida na variável markersData e criar os marcadores a mostrar no mapa
      displayMarkers();
   }
   google.maps.event.addDomListener(window, 'load', initialize);

   // Esta função vai percorrer a informação contida na variável markersData
   // e cria os marcadores através da função createMarker
   function displayMarkers() {

      // esta variável vai definir a área de mapa a abranger e o nível do zoom
      // de acordo com as posições dos marcadores


      // Loop que vai estruturar a informação contida em markersData
      // para que a função createMarker possa criar os marcadores 
      for (var i = 0; i < markersData.length; i++) {

         var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
         var call = markersData[i].id;
         var latitude = markersData[i].lat;
         var longitude = markersData[i].lng;
         var locality = markersData[i].loc;
         var observation = markersData[i].obs;


         createMarker(call, latlng, locality, observation, latitude, longitude);

      }

   }

   // Função que cria os marcadores e define o conteúdo de cada Info Window.
   function createMarker(call, latlng, locality, observation, latitude, longitude) {
      var marker = new google.maps.Marker({
         map: map,
         position: latlng,
         title: "Chamado " + call
      });

      // Evento que dá instrução à API para estar alerta ao click no marcador.
      // Define o conteúdo e abre a Info Window.
      google.maps.event.addListener(marker, 'click', function () {

         // Variável que define a estrutura do HTML a inserir na Info Window.
         var iwContent = '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h5 id="firstHeading" class="firstHeading">' + locality + '</h5>' +
            '<div id="bodyContent">' +
            "<p ><b style='font-size:17px;'>" + observation + "</b><b style='font-size:13px;'>Latitude: " + latitude + "<br>Longitude: " + longitude + "</b> </p>" +
            "</div>" +
            "</div>";

         // O conteúdo da variável iwContent é inserido na Info Window.
         infoWindow.setContent(iwContent);

         // A Info Window é aberta.
         infoWindow.open(map, marker);
      });
   }

</script>


<script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1RqQyxumXFMLKO2NG9isrbO8nXTPtxc&callback=initMap">
   </script>