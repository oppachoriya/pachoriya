    <script src="http://maps.googleapis.com/maps/api/js" type="text/javascript" ></script>
    <div id="gmap"  style="height: 600px; width: 100%; padding: 0px; margin: 65px 0px 10px 0px;">
    </div>
    <script type="text/javascript"<script>
        function initialize() {
            var zoom = 14 ;
            var mapType = google.maps.MapTypeId.ROADMAP ;
            var style = [   {"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},
                            {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},
                            {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},
                            {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
                            {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                            {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},
                            {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},
                            {"featureType":"poi.park",
                                "elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},
                                {"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},
                                {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},
                                {"elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                            {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},
                            {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},
                            {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}
                        ] ;
            //style = "" ;
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showMap,showMapAlt);
            }
            function showMap(position) {
                lat = position.coords.latitude ;
                lng = position.coords.longitude;
                var mapProp = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: zoom,
                    mapTypeId: mapType,
                    styles: style
                };
                var map = new google.maps.Map(document.getElementById("gmap"), mapProp);
            }

            function showMapAlt(position) {
                var lat = 23.5200 ;
                var lng = 77.8100 ;
                var mapProp = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: zoom,
                    mapTypeId: mapType,
                    styles: style
                };
                var map = new google.maps.Map(document.getElementById("gmap"), mapProp);
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>